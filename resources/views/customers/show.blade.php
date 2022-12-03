<x-app-layout>
    <x-slot name="header">
        {{ __('Deceased Bio Data') }}
    </x-slot>

   <x-flash />

    <x-errors class="mb-4" :errors="$errors" />

    <div class="bg-white px-4 py-4 inline-block overflow-hidden min-w-full rounded-lg shadow">
	<!-- <p class="text-gray-500 text-2xl title">display deceased's biography</p> -->
	<x-card>
	  <x-bladewind.list-view>
	     <x-bladewind.list-item>
	   	<h2 class="text-4xl font-semibold">{{ $deceased->full_name }}</h2>
	     </x-bladewind.list-item>

	     <x-bladewind.list-item>
	   	<div class="space-y-2">
		   <p class="px-2 text-xl">Registration Number: {{ $deceased->reg_no }}</p>
		   <p class="px-2 text-xl">Age: {{ $deceased->age }} years</p>
		   <p class="px-2 text-xl">Number of Orphans: {{ optional($deceased->children())->count() ?? 0 }}</p>
		   <p class="px-2 text-xl">Guardian Phone Number: {{ $deceased->guardian_phone }}</p>
		   <p class="px-2 text-xl">Zone: {{ optional($deceased->user->profile->zone)->name }}</p>
		   <p class="px-2 text-xl">Coordinator: {{ optional($deceased->user)->name }}</p>
		</div>
		<div>
		</div>
	     	 </x-bladewind.list-item>
	   </x-bladewind.list-view>

	   <div class="flex mt-1 items-center justify-end bg-transparent shadow-md rounded px-4 py-2">
		
		@can('deceased_edit')
		<div class="mr-4">
			<x-anchor-link class="" href="{{ route('deceaseds.edit', $deceased) }}">
				<svg class="w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
					<path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
				</svg> 
			</x-anchor-link>
		</div>
		@endcan
		
		@can('deceased_delete')	
		<div class="mr-4">
			<form class="inline" method="POST" action="{{ route('deceaseds.destroy',$deceased) }}">
				@csrf
				@method('DELETE')

				
				<x-bladewind.button can_submit="true" color="red" size="small" onclick="showModal('deceased-delete')">
				   Delete
				</x-bladewind.button>
				
				<x-bladewind.modal
				     type="warning"
				     title="Delete Deceased"
				     size="small"
				     cancel_button_label="No"
				     ok_button_label="Yes"
				     name="deceased-delete">
				  Are you sure you want delete this deceased?
				</x-bladewind.modal>
			</form>
		</div>
		@endcan
	    </div>
        </x-card>

	<div class="flex justify-end mt-4">
	       @can('orphan_create')
		<x-anchor-link class="mr-2" :href="route('children.create', $deceased)">
			<svg class="w-5 h-5 inline mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
		</svg>Add Orphan
		</x-anchor-link>
		@endcan

		@can('widow_create')
		<x-anchor-link :href="route('couples.create', $deceased)">
			<svg class="w-5 h-5 inline mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
			<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
		</svg>Add Widow
		</x-anchor-link>
		@endcan
	</div>
      
        @if($deceased->wives()->count() > 0)
	<h3 class="text-2xl font-semibold">Deceased's Widow(s)</h3>
        <x-card class="mt-2">
	 <x-bladewind.list-view>
	   @foreach($deceased->wives as $widow)
	     <x-bladewind.list-item class="mt-2 mb-2 font-bold text-2xl">
	       <p>{{ $loop->iteration }} . <a href="{{ route('widows.show', $widow)}}">{{ $widow->full_name }}</a></p>
	     </x-bladewind.list-item>
	   @endforeach
	 </x-bladewind.list-view>
	</x-card>
	@endif

	@if($orphans->count() > 0)
	   <h3 class="font-semibold text-2xl mb-2 mt-2">Deceased's Orphan(s)</h3>
	   <x-card>
	       <x-bladewind.list-view>
		    @foreach($orphans as $orphan)
		       <x-bladewind.list-item><a href="{{ route('orphans.show', $orphan) }}">{{ $orphan->full_name }}</a></x-bladewind.list-item>
		    @endforeach
		</x-bladewind.list-view>
	   </x-card>
	@endif
 
    @if($deceased->wives()->count() > 0 && $loans->count() > 0)
    <div class="mt-2">
      <h3  class="text-2xl font-semibold">Deceased's Widow's Loans</h3>
      <table class="min-w-full leading-normal table-auto md:table-fixed">
            <thead>
            <tr>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    ID
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Amount
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Widow
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Business
                </th>

                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Description
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Date applied
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Status
                </th>
               
            </tr>
            </thead>
            <tbody>
            @foreach($loans as $loan)
                <tr>
                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->id }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->amount  }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->widow->full_name  }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->business }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->description }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->created_at->toRfc7231String() }}</p>
                    </td>

                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loan->status->name }}</p>
                    </td>
            
                </tr>
            @endforeach
            </tbody>
        </table>
       </div>
       @endif
    </div>

    @if($rekuests->count() > 0)
    <div class="mt-3">
    <h3  class="text-2xl font-semibold">Orphans Approved Requests</h3>
	<table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Registration Number
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Orphan
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Item
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Specification
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Quantity
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Orphan Class
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Orphan Status
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Date Applied
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Date Approved
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Status/Collected at
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($rekuests as $rekuest)
                <tr>
                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->orphan->reg_no }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->orphan->full_name }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->item->name }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->specification }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->quantity }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->orphan_class }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ ucwords($rekuest->status) }}</p>
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $rekuest->created_at->format('D j M, Y') }}</p>
                    </td>
                    
                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                       <p class="text-gray-900 whitespace-no-wrap">{{ optional($rekuest->approved_at)->format('D j M, Y') ?? "Not approved" }}</p> 
                    </td>

                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                       <p class="text-gray-900 whitespace-no-wrap">{{ is_null($rekuest->collected_at) ? 'Not Collected' : $rekuest->collected_at->format('D j M, Y') }}</p> 
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    @endif

    <div class="mt-2 flex justify-end">
	<x-anchor-link class="mr-2" href="{{ route('ocards.index', $deceased) }}">
		Orphans ID Cards 
	</x-anchor-link>
	<x-anchor-link class="mr-2" href="{{ route('wcards.index', $deceased) }}">
		Widows ID Cards 
	</x-anchor-link>
	<x-anchor-link href="{{ route('deceaseds.index') }}">
		Back 
	</x-anchor-link>
    </div>
</x-app-layout>