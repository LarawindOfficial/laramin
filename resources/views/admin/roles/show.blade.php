<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Role') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a href="{{ route('roles.index') }}" class="button return-button">
            {{ __('Return') }}
        </a>
        <a href="{{ route('roles.edit', $role->id) }}" class="button update-button">
            {{ __('Update Role') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{ $role->name }}
        </div>
    </div>
</x-app-layout>
