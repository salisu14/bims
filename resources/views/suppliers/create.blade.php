<x-app-layout>
    <x-slot name="header">
        {{ __('Register Supplier') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">

				<!-- put flash message here... -->
				<x-auth-validation-errors class="mb-4" :errors="$errors"/>

			
				<form method="POST" action="{{ route('suppliers.store') }}">
					@csrf

					<!-- First Name -->
					<div>
						<x-label for="name" :value="__('Supplier Name')"/>
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
						<x-input 
							type="email"
							name="email"
							id="email"
							value="{{ old('email') }}"
							required
						/>
					</div>

					<!-- Phone Number -->
					<div class="mt-3">
						<x-label for="phone" :value="__('Phone Number')"/>
						<x-input type="text"
							name="phone"
							id="phone"
							value="{{ old('phone') }}"
							autofocus
						/>
					</div>

					<!-- Address -->
					<div class="mt-3">
						<x-label for="address1" :value="__('Address 1')"/>
						<x-input type="text"
							name="address1"
							id="address1"
							value="{{ old('address1') }}"
							autofocus
						/>
					</div>

					<!-- Address 2-->
					<div class="mt-3">
						<x-label for="address2" :value="__('Address 2')"/>
						<x-input type="text"
							name="address2"
							id="address2"
							value="{{ old('address2') }}"
							autofocus
						/>
					</div>

					<!-- Postal code -->
					<div class="mt-3">
						<x-label for="postal_code" :value="__('Postal Code')"/>
						<x-input type="text"
							name="postal_code"
							id="postal_code"
							value="{{ old('postal_code') }}"
							autofocus
						/>
					</div>

					<!-- Website -->
					<div class="mt-3">
						<x-label for="website" :value="__('Website')"/>
						<x-input type="url"
							name="website"
							id="website"
							value="{{ old('website') }}"
							autofocus
						/>
					</div>

					<!-- Note -->
					<div class="mt-3">
							<x-label for="note" :value="__('Note')"/>
						<textarea class="block mt-1 w-full rounded-md form-input focus:border-indigo-600"
							name="note"
							id="note"
						>{{ old('note') }}</textarea>
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