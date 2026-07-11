@php
    $features = [
        [
            'icon' => 'ph ph-users-three',
            'title' => 'Silaturahmi Berkelanjutan',
            'description' => 'Membangun komunikasi dan silaturahmi antar alumni lintas angkatan secara berkelanjutan.',
        ],
        [
            'icon' => 'ph ph-notepad',
            'title' => 'Program Transparan',
            'description' => 'Menyelenggarakan program kerja yang transparan, terdokumentasi, dan dapat dipertanggungjawabkan.',
        ],
        [
            'icon' => 'ph ph-handshake',
            'title' => 'Kolaborasi Strategis',
            'description' => 'Menjembatani kolaborasi antara alumni, kampus, dan mitra strategis.',
        ],
        [
            'icon' => 'ph ph-chat-circle-dots',
            'title' => 'Aspirasi Terbuka',
            'description' => 'Menampung dan menindaklanjuti aspirasi anggota secara terbuka dan bertanggung jawab.',
        ],
    ];
@endphp

<section class="public-section">
    <div class="public-container">
        <x-public.section-heading
            badge="Visi & Misi"
            title="Menjadi jejaring alumni yang solid, kontributif, dan berdampak nyata bagi almamater serta masyarakat luas."
            align="center"
        />

        <div class="mt-12 grid gap-5 md:grid-cols-2">
            @foreach ($features as $feature)
                <x-public.feature-item
                    :icon="$feature['icon']"
                    :title="$feature['title']"
                    :description="$feature['description']"
                />
            @endforeach
        </div>
    </div>
</section>
