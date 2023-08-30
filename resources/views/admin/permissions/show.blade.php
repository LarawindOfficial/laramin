<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Permission') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a href="{{ route('permissions.index') }}" class="button return-button">
            {{ __('Return') }}
        </a>
        <a href="{{ route('permissions.edit', $permission->id) }}" class="button update-button">
            {{ __('Update Permission') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>{{ $permission->display_name }}</h2>
            <p>{{ $permission->name }}</p>
            <p>{{ $permission->description }}</p>
        </div>
    </div>
</x-app-layout>
