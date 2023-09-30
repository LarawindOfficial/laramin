<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Create Permission') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('permissions.index')" />
    </x-slot>

    <x-page.content.container>
        @include('admin.permissions.partials.create-new-permission-form')
    </x-page.content.container>
</x-app-layout>
