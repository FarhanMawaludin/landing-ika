@props([
    'href' => null,
    'icon' => 'ph ph-arrow-right',
])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class('inline-flex items-center justify-center gap-2 rounded-[8px] bg-primary-500 px-[12px] py-[10px] text-sm font-semibold text-white transition hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2') }}>
        <span>{{ $slot }}</span>
        <i class="{{ $icon }} text-base" aria-hidden="true"></i>
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button'])->class('inline-flex items-center justify-center gap-2 rounded-[8px] bg-primary-500 px-[12px] py-[10px] text-sm font-semibold text-white transition hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2') }}>
        <span>{{ $slot }}</span>
        <i class="{{ $icon }} text-base" aria-hidden="true"></i>
    </button>
@endif
