<x-app-layout class="app-layout">
    <style>
       
        .content-section {
            padding-top: 3rem; 
            padding-bottom: 3rem;
        }

        
        .max-w-7xl {
            max-width: 80rem; 
            margin-left: auto;
            margin-right: auto;
        }

        .bg-white {
            background-color: #F4EBD0; 
        }

       
        .overflow-hidden {
            overflow: hidden;
        }

        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); 
        }

        .sm\:rounded-lg {
            border-radius: 0.5rem; 
        }

      
        .p-6 {
            padding: 1.5rem; 
        }

       
        .text-gray-900 {
            color: #D6AD60;
        }
    </style>
    <div class="py-12 content-section">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
