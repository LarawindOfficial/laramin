<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Permission') }}
        </h2>
    </x-slot>

    <x-slot name="actions">
        <a href="{{ route('permissions.index') }}" class="return-button">
            {{ __('Return') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('permissions.store') }}" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @csrf
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Slug')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <x-input-label for="display_name" :value="__('Name')" />
                    <x-text-input id="display_name" class="block mt-1 w-full" type="text" name="display_name" :value="old('display_name')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('display_name')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
