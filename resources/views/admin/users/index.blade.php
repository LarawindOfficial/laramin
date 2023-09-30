<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Users') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <x-page.actions.create :route="route('users.create')" />
        @endrole
    </x-slot>

    <x-page.content.container>
        @if ($users->count() < 0)
            <x-card>
                <span class="text-white">Looks like there are no users to show at the moment.</span>
            </x-card>
        @else
            @include('admin.users.partials.users-table')
        @endif
    </x-page.content.container>
</x-app-layout>
