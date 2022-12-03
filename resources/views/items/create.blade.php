<x-app-layout>
    <x-slot name="header">
        {{ __('Add Item') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->

				<form method="POST" action="{{ route('items.store') }}">
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
						<x-label for="description" :value="__('Description')"/>
						<textarea class="block mt-1 w-full rounded-md form-input focus:border-indigo-600"
							name="description"
							id="description"
							required>{{ old('description') }}</textarea>
					</div>

					<!-- Category -->
					<div class="mt-3">
						<x-label for="category" :value="__('Choose Category')"/>
						<select name="category_id" id="category" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
						@foreach($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name  }}</option>
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