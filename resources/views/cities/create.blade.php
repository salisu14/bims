<x-app-layout>
    <x-slot name="header">
        {{ __('Create City') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->
				

				<form method="POST" action="{{ route('cities.store') }}">
					@csrf

					<!-- Name -->
					<div>
						<x-label for="city" :value="__('City Name')"/>
						<x-input type="text"
							name="name"
							id="city"
							value="{{ old('name') }}"
							required
							autofocus
						/>
					</div>

					<!-- State -->
					<div class="mt-3">
						<x-label for="state" :value="__('Choose State')"/>
						<select name="state_id" id="state" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
							@foreach($states as $state)
								<option value="{{ $state->id }}">{{ $state->name  }}</option>
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