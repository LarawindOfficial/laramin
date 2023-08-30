# Table Component

## Index

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

## Header

```blade
<th class="px-6 py-4 border-b border-gray-900 text-left text-gray-800 dark:text-gray-100 text-sm uppercase tracking-wide font-semibold">
    {{ $slot }}
</th>
```

## Cell

```blade
<td class="px-6 py-3 text-gray-700 dark:text-gray-100">{{ $slot }}</td>
```
