@props([
    'image',
    'alt',
    'title' => null,
    'meta' => null,
    'featured' => false,
])

<figure @class([
    'group relative overflow-hidden rounded-[10px] border border-slate-200 bg-slate-200',
    'aspect-[3/5]' => $featured,
    'aspect-[4/5]' => ! $featured,
])>
    <img src="{{ asset($image) }}" alt="{{ $alt }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]" />

    @if ($title || $meta)
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/80 via-slate-950/35 to-transparent p-4 text-white">
            @if ($meta)
                <p class="text-xs font-medium text-blue-100">{{ $meta }}</p>
            @endif
            @if ($title)
                <p class="mt-1 text-sm font-semibold leading-6">{{ $title }}</p>
            @endif
        </div>
    @endif
</figure>
