<x-app-layout>
    <x-slot name="header">
        {{ __('Create User')  }}
    </x-slot>

    <x-flash />
           
    <x-anchor-link :href="route('users.index')">Back</x-anchor-link>

    
    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow mt-4">

        <div class="flex justify-center items-center bg-gray-200 px-6">
            <div class="p-6 max-w-xl w-full mx-auto py-10 bg-white shadow-md rounded-lg">
                <!-- Validation Errors -->
                

                <form method="POST" action="{{ route('users.store') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Name')"/>
                        <x-input type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                        />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')"/>
                        <x-input type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                required/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')"/>
                        <x-input type="password"
                                name="password"
                                id="password"
                                required
                                autocomplete="off"
                        />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')"/>
                        <x-input type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                autocomplete="off"
                                required
                        />
                    </div>

                    <!-- Phone Number -->
                    <div class="mt-4">
                        <x-label for="phone_number" :value="__('Phone Number')"/>
                        <x-input type="text"
                                name="phone_number"
                                id="phone_number"
                                value="{{ old('phone_number') }}"
                                required/>
                    </div>

                    <div class="mt-4">
                        <label for="roles" class="block font-medium text-sm text-gray-700">Roles</label>
                        <select name="roles[]" size="5" id="roles" class="form-multiselect rounded-md shadow-sm mt-1 block w-full" multiple="multiple">
                            @foreach($roles as $id => $role)
                                <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? ' selected' : '' }}>{{ $role }}</option>
                             @endforeach
                        </select>
                        @error('roles')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex mt-4">
                        <x-button class="w-full">
                            {{ __('Create') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
