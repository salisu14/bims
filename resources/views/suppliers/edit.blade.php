<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Spplier Record') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors"/>

				<form method="POST" action="{{ route('suppliers.update', $supplier) }}">
					@csrf
					@method('PUT')
					
					<!-- Full Name -->
					<div>
						<x-label for="name" :value="__('Full Name')"/>
						<x-input type="text"
							name="name"
							id="name"
							value="{{ $supplier->name }}"
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
							value="{{ $supplier->email }}"
							required
						/>
					</div>

					<!-- Phone Number -->
					<div class="mt-3">
						<x-label for="phone" :value="__('Phone Number')"/>
						<x-input type="text"
							name="phone"
							id="phone"
							value="{{ $supplier->phone }}"
							autofocus
						/>
					</div>

					<!-- Address 1 -->
					<div class="mt-3">
						<x-label for="address" :value="__('Address1')"/>
						<x-input type="text"
							name="address1"
							id="address1"
							value="{{ $supplier->address1 }}"
							autofocus
						/>
					</div>

					<!-- Address 2 -->
					<div class="mt-3">
						<x-label for="address" :value="__('Address2')"/>
						<x-input type="text"
							name="address2"
							id="address2"
							value="{{ $supplier->address2 }}"
							autofocus
						/>
					</div>

					<!-- Postal code -->
					<div class="mt-3">
						<x-label for="postal_code" :value="__('Postal Code')"/>
						<x-input type="text"
							name="postal_code"
							id="postal_code"
							value="{{ $supplier->postal_code }}"
							autofocus
						/>
					</div>

					<!-- Website -->
					<div class="mt-3">
						<x-label for="website" :value="__('Website')"/>
						<x-input type="url"
							name="website"
							id="website"
							value="{{ $supplier->website }}"
							autofocus
						/>
					</div>

					<!-- Note -->
					<div class="mt-3">
							<x-label for="note" :value="__('Note')"/>
						<textarea class="block mt-1 w-full rounded-md form-input focus:border-indigo-600"
							name="note"
							id="note"
						>{{ $supplier->note }}</textarea>
					</div>

					<!-- City -->
					<div class="mt-3">
						<x-label for="city" :value="__('Choose City')"/>
						<select name="city_id" id="city" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
							@foreach($cities as $city)
								<option value="{{ $city->id }}" {{ ($city->id === $supplier->city_id) ? "selected": "" }}>
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
								<option value="{{ $state->id }}" {{ ($state->id === $supplier->state_id) ? "selected": "" }}>
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