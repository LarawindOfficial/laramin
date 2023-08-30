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

2. Header

```blade
<th class="px-6 py-4 border-b border-gray-900 text-left text-gray-800 dark:text-gray-100 text-sm uppercase tracking-wide font-semibold">
    {{ $slot }}
</th>
```

