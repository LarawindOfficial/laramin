<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Show User') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('users.index')" />
        <x-page.actions.edit :route="route('users.edit', $user->id)" />
    </x-slot>

    <x-page.content.container>
        <x-card>
            <h2 class="text-2xl text-white">{{ $user->name }}</h2>
        </x-card>
    </x-page.content.container>
</x-app-layout>
