<x-app-layout>
    <x-slot name="header">
        {{ __('customers') }}
    </x-slot>

    <x-flash />    

    <x-errors class="mb-4" :errors="$errors" />

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

        <table class="min-w-full leading-normal table-auto">
            <thead>
                <tr>
                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        ID
                    </th>

                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        First Name
                    </th>

                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Last Name
                    </th>

                    <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Phone Number
                    </th>
                    <th class="px-5 py-3  text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                        Show details
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td class="px-1 py-3 text-base bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap"><a href="{{ route('customers.show', $customer) }}">{{ $customer->id   }}</a></p>
                        </td>

                        <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $customer->first_name }}</p>
                        </td>

                        <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $customer->last_name }}</p>
                        </td>

                        <td class="px-5 py-3 text-base bg-white border-b border-gray-200">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $customer->phone_number }}</p>
                        </td>
                        
                        <td class="px-5 py-3 text-sm bg-white border-b border-gray-200">
                            <a href="{{ route('customers.show', $customer) }}">
                                <svg class="w-5 h-5 inline" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $customers->links() }}
        </div>

        <div class="flex justify-end m-2">
          
            <x-anchor-link :href="route('customers.create')">
                <svg class="w-5 h-5 inline mr-1" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>Add New
            </x-anchor-link>
        </div>
	
    </div>

</x-app-layout>