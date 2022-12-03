<x-app-layout>
    <x-slot name="header">
        {{ __('Permissions') }}
    </x-slot>

    <x-flash />

    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">

        <div class="inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md">
            <div class="flex justify-center items-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500">Info</span>
                    <p class="text-sm text-gray-600">Permissions</p>
                </div>
            </div>
        </div>

        <table class="min-w-full leading-normal">
            <thead>
            <tr>
                <th class="px-5 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    S/N
                </th>

                <th class="px-5 py-2 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">
                    Name
                </th>
            </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td class="px-5 py-2 text-sm bg-white border-b border-gray-200">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-5 py-2 text-sm bg-white border-b border-gray-200">
                        {{ $permission->name }}
                    </td>       
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">
            {{ $permissions->links() }}
        </div>
    </div>

</x-app-layout>