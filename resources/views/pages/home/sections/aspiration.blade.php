<section class="public-section pt-8">
    <div class="public-container">
        <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
            <div class="max-w-xl">
                <x-public.section-heading
                    badge="Aspirasi"
                    title="Aspirasi kamu, langkah nyata kami"
                    description="Setiap masukan yang masuk menjadi bahan evaluasi pengurus dalam menyusun program kerja berikutnya."
                    align="left"
                />

                <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-3 text-sm font-medium text-slate-600">
                        <i class="ph ph-paper-plane-tilt text-lg text-primary-700"></i>
                        Diteruskan langsung ke divisi terkait
                    </div>
                    <div class="flex items-center gap-3 text-sm font-medium text-slate-600">
                        <i class="ph ph-shield-check text-lg text-primary-700"></i>
                        Identitas pengirim terjaga
                    </div>
                    <div class="flex items-center gap-3 text-sm font-medium text-slate-600">
                        <i class="ph ph-clock-countdown text-lg text-primary-700"></i>
                        Status penanganan bisa dipantau
                    </div>
                </div>
            </div>

            <div class="public-card p-6 sm:p-8" x-data="{ message: '', max: 225 }">
                <form action="#" method="POST" @submit.prevent="alert('Fitur pengiriman aspirasi akan diaktifkan pada tahap berikutnya.')">
                    <div class="grid gap-5">
                        <div>
                            <label for="home_name" class="mb-2 block text-sm font-medium text-slate-700">Nama Lengkap</label>
                            <input id="home_name" name="name" type="text" required class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-2 focus:ring-primary-100" />
                        </div>

                        <div>
                            <label for="home_contact" class="mb-2 block text-sm font-medium text-slate-700">Email / No. WhatsApp</label>
                            <input id="home_contact" name="contact" type="text" required class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-2 focus:ring-primary-100" />
                        </div>

                        <div>
                            <label for="home_message" class="mb-2 block text-sm font-medium text-slate-700">Aspirasi</label>
                            <textarea
                                id="home_message"
                                name="message"
                                rows="6"
                                maxlength="225"
                                required
                                x-model="message"
                                class="w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-primary-500 focus:ring-2 focus:ring-primary-100"
                            ></textarea>
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
