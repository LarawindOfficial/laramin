<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Permissions') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <x-page.actions.create :route="route('permissions.create')" />
        @endrole
    </x-slot>

    <x-page.content.container>
        @if ($permissions->count() < 0)
            <x-card>
                <span class="text-white">Looks like there are no permissions to show at the moment.</span>
            </x-card>
        @else
            @include('admin.permissions.partials.permissions-table')
        @endif
    </x-page.content.container>
</x-app-layout>
