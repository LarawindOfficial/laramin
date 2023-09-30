# Roles

## Index
-[ ] Add layout components
-[ ] Add partials folder
-[ ] Create the required partials

```blade
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <a href="{{ route('roles.create') }}" class="button create-button">
                {{ __('Create Role') }}
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
                @foreach ($roles as $role)
                    <x-table.row>
                        <x-table.cell>{{ $role->id }}</x-table.cell>
                        <x-table.cell>{{ $role->display_name }}</x-table.cell>
                        <x-table.cell>{{ $role->name }}</x-table.cell>
                        <x-table.cell>{{ $role->created_at }}</x-table.cell>
                        <x-table.cell>
                            <a href="{{ route('roles.show', $role->id) }}">View</a>
                            @role('superadministrator')
                                <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            @endrole
                        </x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table>
        </div>
    </div>
</x-app-layout>

```
