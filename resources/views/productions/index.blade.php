<x-app-layout>
    <x-slot name="header">
            {{ __('Productions') }}
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
            <x-anchor-link href="{{ route('productions.create') }}">
				Create new production
			</x-anchor-link>
        </div>
    </div>
</x-app-layout>
