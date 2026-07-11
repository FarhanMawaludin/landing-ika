<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm">
                <div class="p-8">
                    <div class="flex items-center gap-4 rounded-2xl border border-gray-200 bg-white p-6">
                        <div class="flex size-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                            <i class="ph-duotone ph-newspaper text-2xl"></i>
                        </div>

                        <div>
                            <h1 class="text-xl font-semibold text-gray-900">
                                Dashboard Berita
                            </h1>

                            <p class="text-sm text-gray-500">
                                Kelola berita dan konten landing page.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-4 md:grid-cols-3">
                        <div class="rounded-2xl bg-gray-50 p-5">
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-500">
                                <i class="ph-regular ph-article text-lg text-gray-700"></i>
                                Status konten
                            </div>
                            <p class="mt-3 text-2xl font-semibold text-gray-900">Siap edit</p>
                        </div>

                        <div class="rounded-2xl bg-gray-50 p-5">
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-500">
                                <i class="ph-bold ph-lightning text-lg text-amber-500"></i>
                                Frontend
                            </div>
                            <p class="mt-3 text-2xl font-semibold text-gray-900">Tailwind v4 aktif</p>
                        </div>

                        <div class="rounded-2xl bg-gray-50 p-5">
                            <div class="flex items-center gap-3 text-sm font-medium text-gray-500">
                                <i class="ph-regular ph-user-circle text-lg text-emerald-600"></i>
                                Auth Breeze
                            </div>
                            <p class="mt-3 text-2xl font-semibold text-gray-900">Tetap berjalan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
