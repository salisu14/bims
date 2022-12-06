<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Item') }}
    </x-slot>

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
    
		<div class="flex justify-center items-center bg-gray-200 px-6">
			<div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
				
				<!-- Validation Errors -->
			

				<form method="POST" action="{{ route('items.update', $item) }}">
					@csrf
					@method('PUT')

					<!-- Name -->
					<div>
						<x-label for="name" :value="__('Name')"/>
						<x-input type="text"
							name="name"
							id="name"
							value="{{ $item->name }}"
							required
							autofocus
						/>
					</div>

					<!-- Price -->
					<div class="mt-2">
						<x-label for="price" :value="__('Item Price')"/>
						<x-input type="text"
							name="price"
							id="price"
							value="{{ $item->price }}"
							required
							autofocus
						/>
					</div>

					<!-- Cost -->
					<div class="mt-2">
						<x-label for="cost" :value="__('Cost')"/>
						<x-input type="text"
							name="cost"
							id="cost"
							value="{{ $item->cost }}"
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
							required>{{ trim($item->description)  }}</textarea>
					</div>

					<!-- Category -->
					<div class="mt-3">
						<x-label for="category" :value="__('Choose Category')"/>
						<select name="category_id" id="category" class="block mt-1 w-full rounded-md form-input focus:border-indigo-600">
						@foreach($categories as $category)
							<option value="{{ $category->id }}" {{ ($category->id == $item->category_id) ? "selected": "" }}>{{ $category->name  }}</option>
						@endforeach
						</select>
					</div>

						
					<div class="flex flex-col items-end mt-4">
						@can('item_create')
						<x-button class="w-full">
						{{ __('Submit') }}
						</x-button>
						@endcan
					</div>
				</form>
			</div>
		</div>
    </div>
</x-admin-layout>