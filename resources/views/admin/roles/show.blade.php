<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Show Role') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('roles.index')" />
        <x-page.actions.edit :route="route('roles.edit', $role->id)" />
    </x-slot>

    <x-page.content.container>
        <x-card>
            <h2 class="text-2xl text-white">{{ $role->name }}</h2>
            @foreach ($role->permissions as $permission)
                <span class="text-white">{{ $permission->display_name }}</span>
            @endforeach
        </x-card>
    </x-page.content.container>
</x-app-layout>
