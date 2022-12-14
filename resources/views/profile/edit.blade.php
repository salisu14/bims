<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit User Profile') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
    <div class="flex justify-center items-center bg-gray-200 px-6">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
               
	        <!-- Validation Errors -->
    		<x-auth-validation-errors class="mb-4" :errors="$errors"/>

		<form method="POST" action="{{ route('admin.deceaseds.update', $deceased) }}">
			@csrf
			@method('PUT')
			
			
			<!-- State -->
			<div class="mt-3">
				<x-label for="state" :value="__('Choose State')"/>
				<select name="state_id" id="state" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
				  @foreach($states as $state)
				  	<option value="{{ $state->id }}" {{ ($state->id === $deceased->state_id) ? "selected": "" }}>
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
				  	<option value="{{ $city->id }}" {{ ($city->id === $deceased->city_id) ? "selected": "" }}>
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
				  	<option value="{{ $town->id }}" {{ ($town->id === $town->town_id) ? "selected": "" }}>
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
				  	<option value="{{ $zone->id }}" {{ ($zone->id === $deceased->zone_id) ? "selected": "" }}>
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