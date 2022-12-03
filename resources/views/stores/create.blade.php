<x-app-layout>
    <x-slot name="header">
        {{ __('Create Store') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center stores-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->

				<form method="POST" action="{{ route('stores.store') }}">
					@csrf

					<!-- First Name -->
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

					<!-- Description -->
					<div class="mt-3">
						<x-label for="location" :value="__('Location')"/>
						<textarea class="block mt-1 w-full rounded-md form-input focus:border-indigo-600"
							name="location"
							id="location"
							required>{{ old('location') }}</textarea>
					</div>

					<div class="flex flex-col stores-end mt-4">
						<x-button class="w-full">
						{{ __('Submit') }}
						</x-button>
					</div>
				</form>
			</div>
		</div> 
    </div>

</x-app-layout>