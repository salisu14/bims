<x-app-layout>
    <x-slot name="header">
        {{ __('User Details')  }}
    </x-slot>

        <div class="max-w-6xl mx-auto py-8 sm:px-6 lg:px-8">

            <div class="flex flex-col">
            
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            {{ $user->name  }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

</x-app-layout>