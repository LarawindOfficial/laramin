<x-table>
    <x-slot name="header">
        <x-table.header>ID</x-table.header>
        <x-table.header>Username</x-table.header>
        <x-table.header>Email Address</x-table.header>
        <x-table.header>Role</x-table.header>
        <x-table.header>Created At</x-table.header>
        <x-table.header>Actions</x-table.header>
    </x-slot>
    @foreach ($users as $user)
        <x-table.row>
            <x-table.cell>{{ $user->id }}</x-table.cell>
            <x-table.cell>{{ $user->name }}</x-table.cell>
            <x-table.cell>{{ $user->email }}</x-table.cell>
            <x-table.cell>
                @foreach ($user->roles as $role)
                    {{ $role->name }}
                @endforeach
            </x-table.cell>
            <x-table.cell>{{ $user->created_at }}</x-table.cell>
            <x-table.cell>
                <a href="{{ route('users.show', $user->id) }}">View</a>
                @role('superadministrator')
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                @endrole
            </x-table.cell>
        </x-table.row>
    @endforeach
</x-table>
