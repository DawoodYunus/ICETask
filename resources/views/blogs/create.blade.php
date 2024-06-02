<x-app-layout>
    <style>
        /* Custom styles */
        .max-w-2xl {
            max-width: 42rem; /* Adjust as needed */
            margin-left: auto;
            margin-right: auto;
        }
        
        .bg-white {
            background-color: #F4EBD0; /* Cream */
        }

        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .divide-y {
            border-color: rgba(0, 0, 0, 0.05);
        }

        .p-6 {
            padding: 1.5rem;
        }

        .text-gray-800 {
            color: #D6AD60; /* Gold */
        }

        .text-gray-600 {
            color: #777; /* Light gray */
        }

        .text-sm {
            font-size: 0.875rem; /* 14px */
        }

        .text-lg {
            font-size: 1.125rem; /* 18px */
        }

        .text-gray-900 {
            color: #222; /* Dark gray */
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .w-full {
            width: 100%;
        }

        .border-gold {
            border-color: #D6AD60; /* Gold */
        }

        .bg-gray-200 {
            background-color: #ccc; /* Light Gray */
        }

        .focus:border-indigo-300:focus {
            border-color: #5a67d8; /* Indigo */
            outline: none;
            box-shadow: 0 0 0 2px rgba(90, 103, 216, 0.5);
        }

        .rounded-md {
            border-radius: 0.375rem; /* 6px */
        }

        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .p-4 {
            padding: 1rem;
        }

        .sm\:p-6 {
            padding: 1.5rem;
        }

        .lg\:p-8 {
            padding: 2rem;
        }

        .block {
            display: block;
        }

        .inline-block {
            display: inline-block;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .h-6 {
            height: 1.5rem; /* 24px */
        }

        .text-center {
            text-align: center;
        }

        .text-gray-900 {
            color: #222; /* Dark gray */
        }

        .text-gray-600 {
            color: #777; /* Light gray */
        }

        .text-lg {
            font-size: 1.125rem; /* 18px */
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .inline-flex {
            display: inline-flex;
        }

        .space-x-2 {
            margin-right: 0.5rem;
        }
    </style>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('blogs.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="text-lg text-gray-900">{{ __('Title') }}</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="block w-full border-gold focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-2">
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="content" class="text-lg text-gray-900">{{ __('Content') }}</label>
                <textarea name="content" id="content" rows="5"
                    class="block w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-2">{{ old('content') }}</textarea>
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>

            <x-primary-button>{{ __('Create Blog') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
