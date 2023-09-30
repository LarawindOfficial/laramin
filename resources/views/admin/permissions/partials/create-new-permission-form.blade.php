<form action="{{ route('permissions.store') }}" method="POST" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
    @csrf
    <x-input type="text" name="name" value="{{ old('name') }}" label="{{ __('Slug') }}"></x-input>
    <x-input type="text" name="display_name" value="{{ old('display_name') }}" label="{{ __('Name') }}"></x-input>
    <x-input type="text" name="description" value="{{ old('description') }}" label="{{ __('Description') }}"></x-input>
    <div>
        <x-primary-button>
            {{ __('Create') }}
        </x-primary-button>
    </div>
</form>
