{{-- TODO: Add authorization conditions --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show User') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a href="{{ route('users.index') }}" class="button return-button">
            {{ __('Return') }}
        </a>
        <a href="{{ route('users.edit', $user->id) }}" class="button update-button">
            {{ __('Update User') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $user->name }}
        </div>
    </div>
</x-app-layout>
