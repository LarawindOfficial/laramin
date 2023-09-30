# Admin Views

## Blade Markup

`index.blade.php`
```blade
<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Resource') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        @role('superadministrator')
            <x-page.actions.create :route="route('resource.create')" />
        @endrole
    </x-slot>

    <x-page.content.container>
        @if ($resource->count() < 0)
            <x-card>
                <span class="text-white">Looks like there are no users to show at the moment.</span>
            </x-card>
        @else
            @include('admin.resource.partials.resource-table')
        @endif
    </x-page.content.container>
</x-app-layout>
```
`create.blade.php`
```blade
<x-app-layout>
    <x-slot name="header">
        <x-page.header.title>{{ __('Create User') }}</x-page.header.title>
    </x-slot>

    <x-slot name="actions">
        <x-page.actions.return :route="route('users.index')" />
    </x-slot>

    <x-page.content.container>
        @include('admin.users.partials.create-new-user-form')
    </x-page.content.container>
</x-app-layout>
```


