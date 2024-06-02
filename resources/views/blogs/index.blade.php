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

        .text-xl {
            font-size: 1.25rem; /* 20px */
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

        .flex-1 {
            flex: 1;
        }

        .justify-between {
            justify-content: space-between;
        }

        .items-center {
            align-items: center;
        }

        .inline-block {
            display: inline-block;
        }

        .rounded-md {
            border-radius: 0.375rem; /* 6px */
        }

        .mb-4 {
            margin-bottom: 1rem;
        }

        .w-6 {
            width: 1.5rem; /* 24px */
        }

        .h-6 {
            height: 1.5rem; /* 24px */
        }

        .w-4 {
            width: 1rem; /* 16px */
        }

        .h-4 {
            height: 1rem; /* 16px */
        }

        .p-2 {
            padding: 0.5rem;
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem;
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
        <a href="{{ route('blogs.create') }}" class="bg-blue-500 text-b px-4 py-2 rounded-md mb-4 inline-block">Create New Blog</a>
        
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($blogs as $blog)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $blog->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $blog->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($blog->created_at->eq($blog->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($blog->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12 10a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('blogs.edit', $blog)">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>
                                        <form method="POST" action="{{ route('blogs.destroy', $blog) }}">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('blogs.destroy', $blog)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>
                        <h2 class="mt-4 text-xl font-semibold text-gray-900">{{ $blog->title }}</h2>
                        <p class="mt-2 text-lg text-gray-900">{{ $blog->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

