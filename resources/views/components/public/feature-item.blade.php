@props([
    'icon',
    'title',
    'description',
])

<div class="flex gap-4 rounded-[10px] border border-slate-200 bg-white p-5">
    <div class="flex size-11 shrink-0 items-center justify-center rounded-[10px] bg-primary-50 text-primary-700">
        <i class="{{ $icon }} text-xl" aria-hidden="true"></i>
    </div>

    <div>
        <h3 class="text-base font-semibold text-slate-900">{{ $title }}</h3>
        <p class="mt-2 text-sm leading-6 text-slate-500">{{ $description }}</p>
    </div>
</div>
