<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Role') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a href="{{ route('roles.index') }}" class="button return-button">
            {{ __('Return') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('roles.store') }}" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @csrf
                <x-input type="text" name="name" value="{{ old('name') }}" label="{{ __('Slug') }}"></x-input>
                <x-input type="text" name="display_name" value="{{ old('display_name') }}" label="{{ __('Name') }}"></x-input>
                <x-input type="text" name="description" value="{{ old('description') }}" label="{{ __('Description') }}"></x-input>

                <div class="grid grid-cols-4 gap-4">
                    @foreach ($permissions as $permission)
                        <div class="">
                            <input type="checkbox" id="{{ $permission->name }}" name="permissions[]" value="{{ $permission->name }}">
                            <label class="text-white" for="permissions">{{ $permission->display_name }}</label>
                        </div>
                    @endforeach
                </div>

                <div>
                    <x-primary-button>
                        {{ __('Create') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
