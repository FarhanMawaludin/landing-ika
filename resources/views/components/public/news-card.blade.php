@props([
    'image',
    'title',
    'category',
    'date',
    'excerpt',
])

<article class="public-card overflow-hidden">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="aspect-[16/11] w-full object-cover" />

    <div class="p-5">
        <div class="flex flex-wrap items-center gap-3 text-xs font-medium text-slate-500">
            <span class="rounded-[10px] bg-primary-50 px-2.5 py-1 text-primary-700">{{ $category }}</span>
            <span>{{ $date }}</span>
        </div>

        <h3 class="mt-4 text-lg font-semibold leading-7 text-slate-900">
            {{ $title }}
        </h3>

        <p class="mt-3 text-sm leading-6 text-slate-500">
            {{ $excerpt }}
        </p>

        <a href="{{ route('news.index') }}" class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-primary-700 transition hover:text-primary-600">
            <span>Baca Selengkapnya</span>
            <i class="ph ph-arrow-right text-base" aria-hidden="true"></i>
        </a>
    </div>
</article>
