@php
    $members = [
        ['role' => 'Ketua IKA', 'name' => 'Rizki Pratama', 'description' => 'Mengkoordinasikan arah program, jejaring alumni, dan hubungan kelembagaan.'],
        ['role' => 'Sekretaris', 'name' => 'Nadia Ramadhani', 'description' => 'Mengelola administrasi, dokumentasi rapat, dan alur komunikasi organisasi.'],
        ['role' => 'Koordinator Program', 'name' => 'Fajar Nugraha', 'description' => 'Mengawal pelaksanaan program kerja, agenda, dan kolaborasi lintas divisi.'],
        ['role' => 'Koordinator Aspirasi', 'name' => 'Rina Maulida', 'description' => 'Menampung masukan anggota dan memastikan tindak lanjut berjalan terukur.'],
    ];
@endphp

@extends('layouts.public')

@section('title', 'Struktur Organisasi')
@section('meta_description', 'Struktur organisasi IKA SMAN 1 CIRUAS.')

@section('content')
    <section class="public-section">
        <div class="public-container">
            <p class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="transition hover:text-primary-700">Beranda</a>
                <span class="mx-2">/</span>
                <span>Struktur</span>
            </p>

            <div class="mt-5 max-w-3xl">
                <h1 class="text-4xl font-semibold tracking-tight text-slate-900">Struktur Organisasi</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Susunan pengurus sementara ditampilkan sebagai placeholder yang rapi hingga data resmi organisasi dilengkapi.
                </p>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($members as $member)
                    <article class="public-card p-6">
                        <div class="flex size-14 items-center justify-center rounded-2xl bg-primary-50 text-primary-700">
                            <i class="ph ph-user-circle text-3xl"></i>
                        </div>
                        <p class="mt-5 text-sm font-semibold text-primary-700">{{ $member['role'] }}</p>
                        <h2 class="mt-2 text-xl font-semibold text-slate-900">{{ $member['name'] }}</h2>
                        <p class="mt-3 text-sm leading-6 text-slate-500">{{ $member['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
