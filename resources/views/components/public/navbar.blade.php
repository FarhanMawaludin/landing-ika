@php
    $items = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Berita', 'route' => 'news.index'],
        ['label' => 'Agenda', 'route' => 'agenda.index'],
        ['label' => 'Struktur', 'route' => 'organization.index'],
        ['label' => 'Galeri', 'route' => 'gallery.index'],
        ['label' => 'Aspirasi', 'route' => 'aspiration.index'],
    ];
@endphp

<nav x-data="{ open: false }" class="sticky top-0 z-50 border-b border-slate-200/90 bg-white/95 backdrop-blur-sm">
    <div class="public-container">
        <div class="flex h-[72px] items-center justify-between gap-4 sm:h-20 sm:gap-6">
            <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="IKA SMAN 1 CIRUAS">
                <x-application-logo class="h-9 w-auto shrink-0 sm:h-10" />

                <span class="min-w-0">
                    <span class="block truncate text-[13px] font-semibold tracking-[0.02em] text-slate-900 sm:text-base">
                        IKA SMAN 1 CIRUAS
                    </span>
                    <span class="block truncate text-[11px] text-slate-500 sm:text-xs">
                        Ikatan Keluarga Alumni
                    </span>
                </span>
            </a>

            <div class="hidden items-center gap-2 lg:flex">
                @foreach ($items as $item)
                    <a
                        href="{{ route($item['route']) }}"
                        @class([
                            'inline-flex items-center gap-2 rounded-full px-4 py-2 text-sm font-medium transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2',
                            'border border-primary-500 bg-white text-primary-700' => request()->routeIs($item['route']),
                            'text-slate-500 hover:text-slate-900' => ! request()->routeIs($item['route']),
                        ])
                    >
                        @if (request()->routeIs($item['route']))
                            <span class="relative flex size-2.5 items-center justify-center" aria-hidden="true">
                                <span class="absolute inline-flex size-2.5 animate-ping rounded-full bg-primary-500/40"></span>
                                <span class="relative inline-flex size-2 rounded-full bg-primary-500"></span>
                            </span>
                        @endif
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <button
                type="button"
                @click="open = !open"
                class="inline-flex size-11 items-center justify-center rounded-2xl border border-slate-200 text-slate-700 transition hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 lg:hidden"
                :aria-expanded="open.toString()"
                aria-label="Buka menu navigasi"
            >
                <i class="ph ph-list text-xl" x-show="!open" aria-hidden="true"></i>
                <i class="ph ph-x text-xl" x-show="open" x-cloak aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <div x-show="open" x-transition.origin.top class="border-t border-slate-200 bg-white lg:hidden" x-cloak>
        <div class="public-container py-4">
            <div class="space-y-2">
                @foreach ($items as $item)
                    <a
                        href="{{ route($item['route']) }}"
                        @click="open = false"
                        @class([
                            'flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-medium transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-primary-500 focus-visible:ring-offset-2',
                            'rounded-[10px] border border-primary-500 bg-white text-primary-700' => request()->routeIs($item['route']),
                            'text-slate-600 hover:text-slate-900' => ! request()->routeIs($item['route']),
                        ])
                    >
                        <span class="inline-flex items-center gap-2">
                            @if (request()->routeIs($item['route']))
                                <span class="relative flex size-2.5 items-center justify-center" aria-hidden="true">
                                    <span class="absolute inline-flex size-2.5 animate-ping rounded-full bg-primary-500/40"></span>
                                    <span class="relative inline-flex size-2 rounded-full bg-primary-500"></span>
                                </span>
                            @endif
                            <span>{{ $item['label'] }}</span>
                        </span>
                        <i class="ph ph-arrow-right text-base" aria-hidden="true"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</nav>
