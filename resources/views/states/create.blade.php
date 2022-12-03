<x-app-layout>
    <x-slot name="header">
        {{ __('State Registration') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->
				
				<form method="POST" action="{{ route('states.store') }}">
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