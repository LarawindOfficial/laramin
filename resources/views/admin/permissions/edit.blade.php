<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Update Permission') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('permissions.index')" />
        <x-page.actions.show :route="route('permissions.show', $permission->id)" />
    </x-slot>

    <x-page.content.container>
        @include('admin.permissions.partials.edit-permission-form')
    </x-page.content.container>
</x-app-layout>
