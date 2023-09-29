{{-- TODO: Add authorization conditions --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <a href="{{ route('users.create') }}" class="button create-button">
                {{ __('Create User') }}
            </a>
        @endrole
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-table>
                <x-slot name="header">
                    <x-table.header>ID</x-table.header>
                    <x-table.header>Username</x-table.header>
                    <x-table.header>Email Address</x-table.header>
                    <x-table.header>Created At</x-table.header>
                    <x-table.header>Actions</x-table.header>
                </x-slot>
                @foreach ($users as $user)
                    <x-table.row>
                        <x-table.cell>{{ $user->id }}</x-table.cell>
                        <x-table.cell>{{ $user->name }}</x-table.cell>
                        <x-table.cell>{{ $user->email }}</x-table.cell>
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
        </div>
    </div>
</x-app-layout>
