<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Create Role') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('roles.index')" />
    </x-slot>

    <x-page.content.container>
        @include('admin.roles.partials.create-new-role-form')
    </x-page.content.container>
</x-app-layout>
