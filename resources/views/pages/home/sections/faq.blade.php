@php
    $faqItems = [
        [
            'question' => 'Apa itu IKA SMAN 1 Ciruas?',
            'answer' => 'IKA SMAN 1 Ciruas adalah wadah bersama seluruh alumni untuk menjaga silaturahmi, menyebarkan informasi, dan membangun kolaborasi nyata bagi almamater.',
        ],
        [
            'question' => 'Siapa saja yang dapat bergabung menjadi anggota?',
            'answer' => 'Seluruh alumni SMAN 1 Ciruas lintas angkatan dapat terlibat dalam kegiatan, publikasi, dan forum komunikasi yang dibuka oleh organisasi.',
        ],
        [
            'question' => 'Bagaimana cara mengikuti kegiatan alumni?',
            'answer' => 'Informasi kegiatan akan dipublikasikan melalui halaman berita, agenda, dan kanal komunikasi organisasi sehingga alumni dapat mengikuti sesuai jadwal yang tersedia.',
        ],
        [
            'question' => 'Bagaimana cara menyampaikan aspirasi?',
            'answer' => 'Aspirasi dapat dikirim melalui formulir pada halaman ini atau halaman aspirasi, lalu akan diteruskan ke divisi terkait untuk tindak lanjut berikutnya.',
        ],
        [
            'question' => 'Bagaimana cara berkontribusi dalam program alumni?',
            'answer' => 'Kontribusi dapat dimulai dari mengikuti kegiatan, berbagi informasi, menjadi relawan, atau mendukung program sosial dan pendidikan yang sedang berjalan.',
        ],
    ];
@endphp

<section class="public-section">
    <div class="public-container">
        <x-public.section-heading
            title="Masih ada yang ingin ditanyakan?"
            align="center"
        />

        <div class="mx-auto mt-12 max-w-4xl space-y-4" x-data="{ active: 0 }">
            @foreach ($faqItems as $item)
                <x-public.faq-item
                    :index="$loop->index"
                    :question="$item['question']"
                    :answer="$item['answer']"
                />
            @endforeach
        </div>
    </div>
</section>
