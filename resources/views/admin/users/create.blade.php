<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Create User') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('users.index')" />
    </x-slot>

    <x-page.content.container>
        @include('admin.users.partials.create-new-user-form')
    </x-page.content.container>
</x-app-layout>
