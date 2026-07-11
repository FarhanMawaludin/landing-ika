<section class="pt-8 pb-12 sm:pt-10 sm:pb-16">
    <div class="public-container">
        <div class="relative overflow-hidden rounded-[10px] border border-slate-200 bg-slate-900">
            <div
                class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('{{ asset('assets/images/hero/hero-main.svg') }}');"
                aria-hidden="true"
            ></div>
            <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/45 to-slate-950/20"></div>

            <div class="relative grid min-h-[620px] items-end gap-8 p-6 sm:p-8 lg:grid-cols-[minmax(0,1fr)_352px] lg:p-10">
                <div class="max-w-2xl">
                    <span class="inline-flex items-center gap-2 rounded-[10px] bg-white/14 px-4 py-2 text-xs font-semibold tracking-[0.16em] text-white uppercase backdrop-blur-sm">
                        <i class="ph ph-users-three text-sm" aria-hidden="true"></i>
                        SATU ALMAMATER, SATU KELUARGA
                    </span>

                    <h1 class="mt-6 text-3xl font-semibold tracking-tight text-white sm:text-4xl lg:text-[48px] lg:leading-[1.12]">
                        Langkah Kecil Setiap Alumni,<br>
                        Dampak Besar untuk Almamater
                    </h1>

                    <p class="mt-5 max-w-xl text-base leading-7 text-blue-50/90 sm:text-lg">
                        Menyambungkan setiap alumni dalam jejaring silaturahmi, kolaborasi, dan pengabdian yang berkelanjutan.
                    </p>

                    <div class="mt-8">
                        <x-public.primary-button href="#tentang-kami" icon="ph ph-arrow-right">
                            Tentang IKA
                        </x-public.primary-button>
                    </div>
                </div>

                <aside class="h-auto rounded-[10px] bg-white p-5 sm:p-6 lg:w-[352px] lg:p-[16px]">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <x-application-logo class="h-9 w-auto shrink-0" />
                            <div>
                                <p class="text-[13px] font-semibold leading-4 text-slate-900">IKA SMAN 1 CIRUAS</p>
                                <p class="mt-1 text-[11px] leading-4 text-slate-500">Ikatan Keluarga Alumni</p>
                            </div>
                        </div>
                        <span class="inline-flex items-center gap-2 text-[14px] font-semibold leading-4 text-primary-700">
                            <i class="ph ph-circle-fill text-[8px]" aria-hidden="true"></i>
                            2026
                        </span>
                    </div>

                    <h2 class="mt-[12px] text-[14px] font-medium uppercase leading-4 tracking-[0.02em] text-slate-700">
                        Program Kerja
                    </h2>

                    <div class="mt-[10px] grid grid-cols-2 gap-[8px]">
                        <div class="rounded-[10px] bg-slate-100 p-[10px]">
                            <p class="text-[20px] font-semibold leading-5 text-primary-700">126</p>
                            <p class="mt-[2px] text-[13px] leading-4 text-slate-600">Kegiatan<br>Terlaksana</p>
                        </div>
                        <div class="rounded-[10px] bg-slate-100 p-[10px]">
                            <p class="text-[20px] font-semibold leading-5 text-primary-700">18</p>
                            <p class="mt-[2px] text-[13px] leading-4 text-slate-600">Angkatan<br>Aktif</p>
                        </div>
                    </div>

                    <p class="mt-[10px] text-[12px] leading-[16px] text-slate-600">
                        Setiap program terdokumentasi terbuka sebagai bentuk pertanggungjawaban.
                    </p>

                    <x-public.primary-button href="{{ route('agenda.index') }}" class="mt-[10px] w-full justify-center bg-primary-600 text-[13px] hover:bg-primary-700 lg:py-[8px]" icon="ph ph-arrow-right">
                        Lihat Program Kerja
                    </x-public.primary-button>
                </aside>
            </div>
        </div>
    </div>
</section>
