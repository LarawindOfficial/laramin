<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Roles') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <x-page.actions.create :route="route('roles.create')" />
        @endrole
    </x-slot>

    <x-page.content.container>
        @if ($roles->count() < 0)
            <x-card>
                <span class="text-white">Looks like there are no roles to show at the moment.</span>
            </x-card>
        @else
            @include('admin.roles.partials.roles-table')
        @endif
    </x-page.content.container>
</x-app-layout>
