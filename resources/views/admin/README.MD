# Admin Views

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
