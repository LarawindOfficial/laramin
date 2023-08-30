# Administration Views

## Users
<ol>
  <li>Users</li>
    <ol>
  <li>index.blade.php</li>
  <li>create.blade.php</li>
  <li>show.blade.php</li>
  <li>edit.blade.php</li>
  </ol>
2. Roles
3. Permissions
</ol>
## View Layout Guide

```blade
<x-app-layout>
    {{-- Header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Title') }}
        </h2>
    </x-slot>

    {{-- Actions --}}
    <x-slot name="actions">
        <a href="{{ route('hello.world') }}" class="create-button">
            {{ __('Action Button') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Content --}}
        </div>
    </div>
</x-app-layout>
```
