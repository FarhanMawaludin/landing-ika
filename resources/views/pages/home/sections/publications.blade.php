@php
    $newsItems = [
        [
            'image' => 'assets/images/news/news-1.svg',
            'title' => 'Reuni Akbar 2026 Resmi Dibuka',
            'category' => 'Berita Alumni',
            'date' => '20 Juni 2026',
            'excerpt' => 'Reuni akbar lintas angkatan resmi dibuka dengan agenda silaturahmi, penghargaan alumni, dan forum kolaborasi.',
        ],
        [
            'image' => 'assets/images/news/news-2.svg',
            'title' => 'IKA Buka Pendaftaran Beasiswa Alumni Peduli',
            'category' => 'Program Alumni',
            'date' => '24 Juni 2026',
            'excerpt' => 'Program dukungan pendidikan kembali dibuka untuk menghimpun partisipasi alumni dalam penguatan akses belajar.',
        ],
        [
            'image' => 'assets/images/news/news-3.svg',
            'title' => 'Alumni Angkatan 2014 Raih Penghargaan Nasional',
            'category' => 'Prestasi',
            'date' => '1 Juli 2026',
            'excerpt' => 'Pencapaian alumni menjadi inspirasi bersama dan memperkuat jejaring kolaborasi dengan almamater.',
        ],
    ];
@endphp

<section class="public-section">
    <div class="public-container">
        <x-public.section-heading
            title="Ruang Publikasi"
            description="Berita, pengumuman resmi, dan sorotan prestasi alumni."
        />

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

        <div class="mt-10 flex justify-center">
            <x-public.primary-button href="{{ route('news.index') }}" icon="ph ph-arrow-right">
                Lihat Lainnya
            </x-public.primary-button>
        </div>
    </div>
</section>
