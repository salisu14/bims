<x-app-layout>
    <x-slot name="header">
        {{ __('Register Customer') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">

				<!-- put flash message here... -->
			
				<form method="POST" action="{{ route('customers.store') }}">
					@csrf

					<!-- First Name -->
					<div>
						<x-label for="fname" :value="__('First Name')"/>
						<x-input type="text"
							name="first_name"
							id="fname"
							value="{{ old('first_name', $first_name) }}"
							required
							autofocus
						/>
					</div>

					<!-- Last Name -->
					<div class="mt-3">
						<x-label for="lname" :value="__('Last Name')"/>
						<x-input type="text"
							name="last_name"
							id="lname"
							value="{{ old('last_name', $last_name) }}"
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
							value="{{ old('email', $email) }}"
							required
						/>
					</div>

					<!-- Phone Number -->
					<div class="mt-3">
						<x-label for="phone_number" :value="__('Phone Number')"/>
						<x-input type="text"
							name="phone_number"
							id="phone_number"
							value="{{ old('phone_number', $phone_number) }}"
							autofocus
						/>
					</div>

					<!-- Address -->
					<div class="mt-3">
						<x-label for="address" :value="__('Address')"/>
						<x-input type="text"
							name="address"
							id="address"
							value="{{ old('address', $address) }}"
							autofocus
						/>
					</div>

					<!-- Postal code -->
					<div class="mt-3">
						<x-label for="postal_code" :value="__('Postal Code')"/>
						<x-input type="text"
							name="postal_code"
							id="postal_code"
							value="{{ old('postal_code', $postal_code) }}"
							autofocus
						/>
					</div>

					<!-- City -->
					<div class="mt-3">
						<x-label for="city" :value="__('Choose City')"/>
						<select name="city_id" id="city" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
							@foreach($cities as $city)
								<option value="{{ $city->id }} {{ old($city_id }}">
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
								<option value="{{ $state->id }}">
									{{ $state->name  }}
								</option>
							@endforeach
						</select>
					</div>

					<!-- Submit -->
					<div class="flex flex-col items-center mt-4">
						<x-button class="w-full mb-2">
						{{ __('Submit') }}
						</x-button>
					</div>
				</form>
			</div>
		</div>
    </div>

</x-app-layout>