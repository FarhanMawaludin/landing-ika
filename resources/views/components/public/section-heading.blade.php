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

    <h2 class="mt-4 text-[28px] leading-[1.15] font-semibold tracking-tight text-slate-900 sm:text-[34px] lg:text-[40px]">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-[15px] leading-7 text-slate-500 sm:text-base lg:text-lg">
            {{ $description }}
        </p>
    @endif
</div>
