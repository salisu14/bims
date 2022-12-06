<x-app-layout>
    <x-slot name="header">
        {{ __('States') }}
    </x-slot>

    <x-flash />

    <x-errors class="mb-4" :errors="$errors" />

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

        <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    S/N
                </th>
                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                   Name
                </th>
                <th class="flex justify-center  px-5 py-3  text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
		            Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($states as $state)
                <tr>
                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $loop->iteration }}</p>
                    </td>
                    <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                        <p class="text-gray-900 whitespace-no-wrap">{{ $state->name }}</p>
                    </td>
                    
                    <td class="flex justify-center px-5 py-3 text-sm bg-white border-b border-gray-200">
                        
                        <div class="mt-4 inline">
                            @can('state_edit')
                            <div class="mr-4 inline">
                                <x-anchor-link class="" href="{{ route('states.edit', $state) }}">
                                        <svg class="w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                        </svg> 
                                </x-anchor-link>
                            </div>
                            @endcan
                                
                            @can('state_delete')	
                            <div class="mr-4 inline">
                                <form class="inline" method="POST" action="{{ route('states.destroy',$state) }}">
                                        @csrf
                                        @method('DELETE')
                                    
                                    <button onclick="return confirm('Are you sure you want delete this state?')" type="submit">
                                            <svg class="w-7 h-7 inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        <button>
                                </form>
                            </div>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $states->links() }}
        </div>

        <div class="flex justify-end m-2">
            
            <x-anchor-link :href="route('states.create')">
                <svg class="w-5 h-5 inline mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg> Add New
            </x-anchor-link>
        </div>
    </div>
</x-admin-layout>