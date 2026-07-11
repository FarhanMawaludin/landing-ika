@extends('layouts.public')

@section('title', 'Aspirasi')
@section('meta_description', 'Halaman aspirasi IKA SMAN 1 CIRUAS.')

@section('content')
    <section class="public-section">
        <div class="public-container">
            <p class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="transition hover:text-primary-700">Beranda</a>
                <span class="mx-2">/</span>
                <span>Aspirasi</span>
            </p>

            <div class="mt-5 max-w-3xl">
                <h1 class="text-4xl font-semibold tracking-tight text-slate-900">Ruang Aspirasi Alumni</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Kanal khusus untuk menampung saran, masukan, dan kebutuhan alumni secara tertib dan bertanggung jawab.
                </p>
            </div>

            <div class="mt-12 grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
                <div class="public-card p-6 sm:p-8">
                    <h2 class="text-xl font-semibold text-slate-900">Yang akan kami jaga</h2>
                    <div class="mt-6 space-y-4 text-sm leading-6 text-slate-500">
                        <p class="flex gap-3"><i class="ph ph-check-circle text-lg text-primary-700"></i><span>Aspirasi diteruskan langsung ke divisi yang relevan.</span></p>
                        <p class="flex gap-3"><i class="ph ph-check-circle text-lg text-primary-700"></i><span>Identitas pengirim dijaga selama proses evaluasi.</span></p>
                        <p class="flex gap-3"><i class="ph ph-check-circle text-lg text-primary-700"></i><span>Perkembangan tindak lanjut dapat diinformasikan pada tahap berikutnya.</span></p>
                    </div>
                </div>

                <div class="public-card p-6 sm:p-8" x-data="{ message: '', max: 225 }">
                    <form action="#" method="POST" @submit.prevent="alert('Fitur pengiriman aspirasi akan diaktifkan pada tahap berikutnya.')">
                        <div class="grid gap-5">
                            <div>
                                <label for="asp_name" class="mb-2 block text-sm font-medium text-slate-700">Nama Lengkap</label>
                                <input id="asp_name" name="name" type="text" required class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-100 focus:outline-none" />
                            </div>
                            <div>
                                <label for="asp_contact" class="mb-2 block text-sm font-medium text-slate-700">Email / No. WhatsApp</label>
                                <input id="asp_contact" name="contact" type="text" required class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-100 focus:outline-none" />
                            </div>
                            <div>
                                <label for="asp_message" class="mb-2 block text-sm font-medium text-slate-700">Aspirasi</label>
                                <textarea id="asp_message" name="message" rows="7" maxlength="225" required x-model="message" class="w-full rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:border-primary-500 focus:ring-2 focus:ring-primary-100 focus:outline-none"></textarea>
                                <div class="mt-2 text-right text-xs text-slate-400">
                                    <span x-text="message.length"></span> / <span x-text="max"></span>
                                </div>
                            </div>

                            <x-public.primary-button type="submit" class="w-full justify-center" icon="ph ph-paper-plane-tilt">
                                Kirim Aspirasi
                            </x-public.primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
