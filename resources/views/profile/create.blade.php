<x-admin-layout>
    <x-slot name="header">
        {{ __('User Profile') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
    <div class="flex justify-center items-center bg-gray-200 px-6">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
               
	        <!-- Validation Errors -->
    		<x-auth-validation-errors class="mb-4" :errors="$errors"/>

		<form method="POST" action="#">
			@csrf
			@method('PUT')

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
			<div class="mt-3">
			    <x-label for="email" :value="__('Email')"/>
			    <x-input type="email"
				name="email"
				id="email"
				value="{{ old('email') }}"
				required/>
			</div>

			<!-- Password -->
			<div class="mt-3">
			    <x-label for="password" :value="__('Password')"/>
			    <x-input type="password"
				name="password"
				id="password"
				required
				autocomplete="current-password"
			    />
			</div>

			<!-- Confirm Password -->
			<div class="mt-3">
			    <x-label for="password_confirmation" :value="__('Confirm Password')"/>
			    <x-input type="password"
				name="password_confirmation"
				id="password_confirmation"
				required
			    />
			</div>
			
			
			<!-- State -->
			<div class="mt-3">
				<x-label for="state" :value="__('Choose State')"/>
				<select name="state_id" id="state" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
				  @foreach($states as $state)
				  	<option value="{{ $state->id }}">
					  {{ $state->name  }}
					</option>
				  @endforeach
				</select>
			</div>

			<!-- City -->
			<div class="mt-3">
				<x-label for="city" :value="__('Choose City')"/>
				<select name="city_id" id="city" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
				  @foreach($cities as $city)
				  	<option value="{{ $city->id }}">
					  {{ $city->name  }}
					</option>
				  @endforeach
				</select>
			</div>

			<!-- Town -->
			<div class="mt-3">
				<x-label for="town" :value="__('Choose Town')"/>
				<select name="town_id" id="town" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
				  @foreach($towns as $town)
				  	<option value="{{ $town->id }}">
					  {{ $town->name  }}
					</option>
				  @endforeach
				</select>
			</div>

			<!-- Zone -->
			<div class="mt-3">
				<x-label for="zone" :value="__('Choose Zone')"/>
				<select name="zone_id" id="zone" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
				  @foreach($zones as $zone)
				  	<option value="{{ $zone->id }}">
					  {{ $zone->name  }}
					</option>
				  @endforeach
				</select>
			</div>


			<div class="flex flex-col items-end mt-4">
				<x-button class="w-full">
				{{ __('Submit') }}
				</x-button>
			</div>
		</form>
            </div>
        </div>
        
    </div>

</x-admin-layout>