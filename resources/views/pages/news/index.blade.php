@php
    $newsItems = [
        [
            'image' => 'assets/images/news/news-1.svg',
            'title' => 'Reuni Akbar 2026 Resmi Dibuka',
            'category' => 'Berita Alumni',
            'date' => '20 Juni 2026',
            'excerpt' => 'Reuni akbar lintas angkatan resmi dibuka untuk mempererat silaturahmi dan memperluas jejaring antar alumni.',
        ],
        [
            'image' => 'assets/images/news/news-2.svg',
            'title' => 'IKA Buka Pendaftaran Beasiswa Alumni Peduli',
            'category' => 'Program Alumni',
            'date' => '24 Juni 2026',
            'excerpt' => 'Program beasiswa menghimpun dukungan alumni untuk membantu siswa dan lulusan yang membutuhkan akses pendidikan lanjutan.',
        ],
        [
            'image' => 'assets/images/news/news-3.svg',
            'title' => 'Alumni Angkatan 2014 Raih Penghargaan Nasional',
            'category' => 'Prestasi',
            'date' => '1 Juli 2026',
            'excerpt' => 'Penghargaan ini menjadi kebanggaan bersama sekaligus bukti bahwa jejaring alumni terus melahirkan dampak positif.',
        ],
    ];
@endphp

@extends('layouts.public')

@section('title', 'Berita Alumni')
@section('meta_description', 'Kumpulan berita dan publikasi IKA SMAN 1 CIRUAS.')

@section('content')
    <section class="public-section">
        <div class="public-container">
            <p class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="transition hover:text-primary-700">Beranda</a>
                <span class="mx-2">/</span>
                <span>Berita</span>
            </p>

            <div class="mt-5 max-w-3xl">
                <h1 class="text-4xl font-semibold tracking-tight text-slate-900">Ruang Publikasi Alumni</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Berita, pengumuman resmi, dan sorotan kegiatan alumni yang disusun rapi untuk memudahkan akses informasi.
                </p>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                @foreach ($newsItems as $item)
                    <x-public.news-card
                        :image="$item['image']"
                        :title="$item['title']"
                        :category="$item['category']"
                        :date="$item['date']"
                        :excerpt="$item['excerpt']"
                    />
                @endforeach
            </div>
        </div>
    </section>
@endsection
