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
                <th class="flex justify-center px-5 py-3  text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
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
                    
                    <td class="flex justify-center px-5 py-3 text-base bg-white border-b border-gray-200">
                        
                        <div>
                            <a href="{{ route('states.edit', $state) }}">
                                <svg class="w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg> 
                            </a>
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