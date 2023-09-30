<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Update Role') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('roles.index')" />
        <x-page.actions.show :route="route('roles.show', $role->id)" />
    </x-slot>

    <x-page.content.container>
        @include('admin.roles.partials.edit-role-form')
    </x-page.content.container>
</x-app-layout>
