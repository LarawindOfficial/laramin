# Table Component

1. Index
```blade
<table class="w-full bg-gray-800 table-auto rounded-md">
    <thead>
        <tr>
            {{ $header }}
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
```

