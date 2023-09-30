@props(['name', 'label', 'type', 'value'])
<div class="mb-3">
    <x-input-label for="{{$name}}" value="{{$label}}" />
    <x-text-input id="{{$name}}" class="block mt-1 w-full" type="{{$type}}" name="{{$name}}" value="{{$value}}" />
    {{ $slot }}
</div>
