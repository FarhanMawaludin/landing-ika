@props([
    'value',
    'label',
    'border' => false,
])

<div @class([
    'flex flex-col gap-2 px-4 py-2 text-center md:text-left',
    'md:border-l md:border-white/20' => $border,
])>
    <span class="text-3xl font-semibold tracking-tight text-white">{{ $value }}</span>
    <span class="text-sm text-blue-100">{{ $label }}</span>
</div>
