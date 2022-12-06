<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Customer Record') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
    <div class="flex justify-center items-center bg-gray-200 px-6">
            <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
               
	        <!-- Validation Errors -->
    		<x-auth-validation-errors class="mb-4" :errors="$errors"/>

		<form method="POST" action="{{ route('customers.update', $customer) }}">
			@csrf
			@method('PUT')
			
			<!-- First Name -->
			<div>
				<x-label for="name" :value="__('Full Name')"/>
				<x-input type="text"
					name="name"
					id="name"
					value="{{ $customer->name }}"
					required
					autofocus
				/>
			</div>

			<!-- Email Address -->
			<div class="mt-4">
				<x-label for="email" :value="__('Email')"/>
				<x-input 
					type="email"
					name="email"
					id="email"
					value="{{ $customer->email }}"
				    required
				/>
			</div>

			<!-- Phone Number -->
			<div class="mt-3">
				<x-label for="phone" :value="__('Phone Number')"/>
				<x-input type="text"
					name="phone"
					id="phone"
					value="{{ $customer->phone }}"
					autofocus
				/>
			</div>

				<!-- Address -->
				<div class="mt-3">
					<x-label for="address" :value="__('Address')"/>
					<x-input type="text"
						name="address"
						id="address"
						value="{{ $customer->address }}"
						autofocus
					/>
				</div>

				<!-- Postal code -->
				<div class="mt-3">
					<x-label for="postal_code" :value="__('Postal Code')"/>
					<x-input type="text"
						name="postal_code"
						id="postal_code"
						value="{{ $customer->postal_code }}"
						autofocus
					/>
				</div>

				<!-- City -->
				<div class="mt-3">
					<x-label for="city" :value="__('Choose City')"/>
					<select name="city_id" id="city" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
						@foreach($cities as $city)
							<option value="{{ $city->id }}" {{ ($city->id === $customer->city_id) ? "selected": "" }}>
								{{ $city->name  }}
							</option>
						@endforeach
					</select>
				</div>

				<!-- State -->
				<div class="mt-3">
					<x-label for="state" :value="__('Choose State')"/>
					<select name="state_id" id="state" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
						@foreach($states as $state)
							<option value="{{ $state->id }}" {{ ($state->id === $customer->state_id) ? "selected": "" }}>
								{{ $state->name  }}
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

</x-app-layout>