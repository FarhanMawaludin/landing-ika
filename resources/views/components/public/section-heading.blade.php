@props([
    'badge' => null,
    'title',
    'description' => null,
    'align' => 'center',
])

<div @class([
    'max-w-3xl',
    'mx-auto text-center' => $align === 'center',
    'text-left' => $align === 'left',
])>
    @if ($badge)
        <span class="public-eyebrow">
            <i class="ph ph-seal-check text-sm" aria-hidden="true"></i>
            {{ $badge }}
        </span>
    @endif

    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900 sm:text-4xl">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 text-slate-500 sm:text-lg">
            {{ $description }}
        </p>
    @endif
</div>
