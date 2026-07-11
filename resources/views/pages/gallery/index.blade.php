@php
    $gallery = [
        'assets/images/gallery/gallery-1.svg',
        'assets/images/gallery/gallery-2.svg',
        'assets/images/gallery/gallery-3.svg',
        'assets/images/gallery/gallery-4.svg',
        'assets/images/gallery/gallery-5.svg',
        'assets/images/about/about-1.svg',
    ];
@endphp

@extends('layouts.public')

@section('title', 'Galeri')
@section('meta_description', 'Galeri dokumentasi IKA SMAN 1 CIRUAS.')

@section('content')
    <section class="public-section">
        <div class="public-container">
            <p class="text-sm text-slate-500">
                <a href="{{ route('home') }}" class="transition hover:text-primary-700">Beranda</a>
                <span class="mx-2">/</span>
                <span>Galeri</span>
            </p>

            <div class="mt-5 max-w-3xl">
                <h1 class="text-4xl font-semibold tracking-tight text-slate-900">Galeri Kegiatan</h1>
                <p class="mt-4 text-lg leading-8 text-slate-500">
                    Kumpulan dokumentasi visual kegiatan alumni. Seluruh gambar saat ini masih menggunakan placeholder lokal.
                </p>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($gallery as $image)
                    <figure class="overflow-hidden rounded-[10px] border border-slate-200 bg-white">
                        <img src="{{ asset($image) }}" alt="Dokumentasi galeri alumni" class="aspect-[5/4] w-full object-cover" />
                    </figure>
                @endforeach
            </div>
        </div>
    </section>
@endsection
