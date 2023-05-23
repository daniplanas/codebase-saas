<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg uppercase text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="overflow-hidden shadow-sm sm:rounded-lg bg-white">
        <div class="p-4 sm:p-6 text-gray-900">
            {{ __("You're logged in!") }}
        </div>
    </div>
</x-app-layout>
