<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Update User') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('users.index')" />
        <x-page.actions.show :route="route('users.show', $user->id)" />
    </x-slot>

    <x-page.content.container>
        @include('admin.users.partials.edit-user-form')
    </x-page.content.container>
</x-app-layout>
