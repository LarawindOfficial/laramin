<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Show Permission') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('permissions.index')" />
        <x-page.actions.edit :route="route('permissions.edit', $permission->id)" />
    </x-slot>

    <x-page.content.container>
        <x-card>
            <h2 class="text-2xl text-white">{{ $permission->name }}</h2>
        </x-card>
    </x-page.content.container>
</x-app-layout>
