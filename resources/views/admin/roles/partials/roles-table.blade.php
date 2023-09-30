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
