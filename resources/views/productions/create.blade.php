<x-app-layout>
   <x-slot name="header">
        {{ __('Create New Production') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
    <div class="flex justify-center items-center bg-gray-200 px-6">
            <div class="p-6 max-w-xl w-full bg-white shadow-md rounded-md">
               
                <form method="POST" action="{{ route('productions.store') }}">
                @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="production" :value="__('Name')"/>
                        <x-input type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                        />
                    </div>

                    <div class="mt-3">
                        <label for="" class="block font-medium text-sm text-gray-700">Items</label>
                            <select name="" id="" size="10" class="form-multiselect rounded-md shadow-sm mt-1 block w-full" multiple="multiple">
                               
                                    <option value="">item 1</option>
                              
                            </select>
                    </div>

                    <div class="flex flex-col items-end mt-4">
                        <x-button class="w-full">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</x-app-layout>