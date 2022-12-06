<x-app-layout>
    <x-slot name="header">
        {{ __('Customer Information') }}
    </x-slot>

   <x-flash />

    <x-errors class="mb-4" :errors="$errors" />

    <div class="bg-white px-4 py-4 inline-block overflow-hidden min-w-full rounded-lg shadow">
	<!-- <p class="text-gray-500 text-2xl title">display deceased's biography</p> -->
	<x-card>
        <h1 class="text-blue-500 text-3xl">{{ $customer->name  }}</h1>
        <ul class="mt-2 text-xl">
            <li class="mb-1">Phone Number: {{ $customer->phone }}</li>
            <li class="mb-1">Address: {{ $customer->address }}, {{ $customer->city->name }} {{ $customer->state->name }}</li>
        </ul>
	  <div class="mt-4">
		@can('deceased_edit')
		<div class="mr-4 inline">
			<x-anchor-link class="" href="{{ route('customers.edit', $customer) }}">
				<svg class="w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
				</svg> 
			</x-anchor-link>
		</div>
		@endcan
		
		@can('customer_delete')	
		<div class="mr-4 inline">
			<form class="inline" method="POST" action="{{ route('customers.destroy',$customer) }}">
				@csrf
				@method('DELETE')
               
               <button onclick="return confirm('Are you sure you want delete this customer?')" type="submit">
                    <svg class="w-7 h-7 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                <button>
			</form>
		</div>
		@endcan
	    </div>
    </x-card>

</x-app-layout>