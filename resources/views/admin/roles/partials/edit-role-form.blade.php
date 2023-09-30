
            <form action="{{ route('roles.update', $role->id) }}" method="PATCH" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                @csrf
                <x-input type="text" name="name" value="{{ old('name') }}" label="{{ __('Slug') }}"></x-input>
                <x-input type="text" name="display_name" value="{{ old('display_name') }}" label="{{ __('Name') }}"></x-input>
                <x-input type="text" name="description" value="{{ old('description') }}" label="{{ __('Description') }}"></x-input>

                <div class="grid grid-cols-4 gap-4">
                    @foreach ($permissions as $permission)
                        <div class="">
                            <input type="checkbox" id="{{ $permission->name }}" name="permissions[]" value="{{ old('name') }}">
                            <label class="text-white" for="permissions">{{ $permission->display_name }}</label>
                        </div>
                    @endforeach
                </div>

                <div>
                    <x-primary-button>
                        {{ __('Update Permission') }}
                    </x-primary-button>
                </div>
            </form>

