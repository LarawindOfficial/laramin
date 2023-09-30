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

