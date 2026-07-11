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

<footer class="border-t border-slate-200 bg-white">
    <div class="public-container py-10">
        <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">
            <div class="max-w-md">
                <div class="flex items-center gap-3">
                    <x-application-logo class="h-10 w-auto shrink-0" />
                    <div>
                        <p class="text-sm font-semibold text-slate-900">IKA SMAN 1 CIRUAS</p>
                        <p class="text-xs text-slate-500">Ikatan Keluarga Alumni</p>
                    </div>
                </div>

                <p class="mt-4 text-sm leading-6 text-slate-500">
                    Ruang bersama alumni untuk menjaga silaturahmi, menyebarkan informasi, dan menghimpun aspirasi secara terbuka.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-[auto_auto] lg:items-end">
                <div>
                    <p class="text-sm font-semibold text-slate-900">Navigasi</p>
                    <div class="mt-4 flex flex-wrap gap-x-5 gap-y-3">
                        @foreach ($items as $item)
                            <a href="{{ route($item['route']) }}" class="text-sm text-slate-500 transition hover:text-primary-700">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center gap-3 text-slate-500">
                        <a href="#" class="rounded-full border border-slate-200 p-2 transition hover:border-primary-200 hover:text-primary-700" aria-label="Instagram">
                            <i class="ph ph-instagram-logo text-lg"></i>
                        </a>
                        <a href="#" class="rounded-full border border-slate-200 p-2 transition hover:border-primary-200 hover:text-primary-700" aria-label="Facebook">
                            <i class="ph ph-facebook-logo text-lg"></i>
                        </a>
                        <a href="#" class="rounded-full border border-slate-200 p-2 transition hover:border-primary-200 hover:text-primary-700" aria-label="YouTube">
                            <i class="ph ph-youtube-logo text-lg"></i>
                        </a>
                    </div>

                    <a href="mailto:Digital@gmail.com" class="inline-flex items-center gap-2 text-sm text-slate-500 transition hover:text-primary-700">
                        <i class="ph ph-envelope-simple text-base"></i>
                        <span>Digital@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-slate-200 pt-6 text-sm text-slate-500">
            &copy; {{ now()->year }} IKA SMAN 1 CIRUAS. Seluruh hak cipta dilindungi.
        </div>
    </div>
</footer>
