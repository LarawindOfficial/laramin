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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <a href="{{ route('permissions.create') }}" class="button create-button">
                {{ __('Create Permission') }}
            </a>
        @endrole
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-table>
                <x-slot name="header">
                    <x-table.header>ID</x-table.header>
                    <x-table.header>Name</x-table.header>
                    <x-table.header>Slug</x-table.header>
                    <x-table.header>Created At</x-table.header>
                    <x-table.header>Actions</x-table.header>
                </x-slot>
                @foreach ($permissions as $permission)
                    <x-table.row>
                        <x-table.cell>{{ $permission->id }}</x-table.cell>
                        <x-table.cell>{{ $permission->display_name }}</x-table.cell>
                        <x-table.cell>{{ $permission->name }}</x-table.cell>
                        <x-table.cell>{{ $permission->created_at }}</x-table.cell>
                        <x-table.cell>
                            <a href="{{ route('permissions.show', $permission->id) }}">View</a>
                            @role('superadministrator')
                                <a href="{{ route('permissions.edit', $permission->id) }}">Edit</a>
                            @endrole
                        </x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>
