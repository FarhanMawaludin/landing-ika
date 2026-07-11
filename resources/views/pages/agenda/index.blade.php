@php
    $agendas = [
        ['date' => '12 Agustus 2026', 'title' => 'Rapat Koordinasi Alumni', 'location' => 'Aula SMAN 1 Ciruas', 'description' => 'Sinkronisasi agenda semester dan pembagian tanggung jawab program kerja.'],
        ['date' => '28 Agustus 2026', 'title' => 'Bakti Sosial Alumni', 'location' => 'Desa Mitra Ciruas', 'description' => 'Program kolaboratif lintas angkatan untuk kegiatan sosial dan pengabdian masyarakat.'],
        ['date' => '18 September 2026', 'title' => 'Temu Karier & Jejaring', 'location' => 'Gedung Serbaguna Alumni', 'description' => 'Forum berbagi pengalaman profesi dan membuka peluang kolaborasi antar alumni muda dan senior.'],
    ];
@endphp

@extends('layouts.public')

@section('title', 'Agenda')
@section('meta_description', 'Agenda kegiatan IKA SMAN 1 CIRUAS.')

@section('content')
    <section class="public-section">
        <div class="public-container">
            <p class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="transition hover:text-primary-700">Beranda</a>
                <span class="mx-2">/</span>
                <span>Agenda</span>
            </p>

            <div class="mt-5 max-w-3xl">
                <h1 class="text-4xl font-semibold tracking-tight text-slate-900">Agenda Kegiatan</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Jadwal kegiatan yang sedang disiapkan dan dilaksanakan bersama oleh IKA SMAN 1 CIRUAS.
                </p>
            </div>

            <div class="mt-12 space-y-5">
                @foreach ($agendas as $agenda)
                    <article class="public-card p-6 sm:p-7">
                        <div class="grid gap-5 md:grid-cols-[220px_minmax(0,1fr)] md:items-start">
                            <div class="rounded-[10px] border border-slate-200 bg-primary-50 p-5">
                                <p class="text-sm font-semibold text-primary-700">{{ $agenda['date'] }}</p>
                                <p class="mt-2 inline-flex items-center gap-2 text-sm text-slate-500">
                                    <i class="ph ph-map-pin text-base text-primary-700"></i>
                                    {{ $agenda['location'] }}
                                </p>
                            </div>
                            <div>
                                <h2 class="text-2xl font-semibold text-slate-900">{{ $agenda['title'] }}</h2>
                                <p class="mt-3 text-base leading-7 text-slate-500">{{ $agenda['description'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
