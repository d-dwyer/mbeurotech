<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<!-- Page Hero -->
<section class="page-hero bg-surface-dark py-24">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">The Workshop</span>
                <h1 class="text-white">Precision is our DNA</h1>
                <p class="text-silver mt-6 text-lg">
                    MB EURO TECH was founded on a single principle: providing a level of expertise and care that equals the engineering of the vehicles we service.
                </p>
            </div>
            <div class="relative">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeZ0n8G2vzMhrWkShB8sx7_pUJ3YK8OatIshBX5ZH8l9mBvftNk97VGuFwqQXWYCY4fjmjpgmRkKHJ6oo46J3K44kvf080QMMM2klTg-0Esrvyo7CLsYQoNGHh-X9AGzmZkIVugcqmeWLzwqcqcQHf2QDKKgcP0FuI7ddNMF_xsmrQwvONNl-KhNZU9tnSa65q6CBaMyxwqilNJ9AhyUo_87SgVcRYBX2IUQvqzv-4blgFPiULWMuhiLmeks_yFgQAraxnAg_LUXk" alt="Workshop" class="rounded-xl shadow-2xl">
                <div class="absolute -bottom-8 -left-8 bg-gold p-8 rounded-lg hidden md:block">
                    <p class="text-4xl font-black text-white">15+</p>
                    <p class="text-xs text-white uppercase font-bold">Years Expert Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="text-center mb-24">
            <h2 class="mb-4">The Specialist Advantage</h2>
            <div style="width: 80px; height: 3px; background: var(--accent); margin: 0 auto;"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
            <div class="value-card">
                <h3 class="mb-6 text-2xl">Direct Access</h3>
                <p class="text-secondary">
                    No service advisors, no gatekeepers. You communicate directly with the technician responsible for your vehicle, ensuring complete technical transparency.
                </p>
            </div>
            <div class="value-card">
                <h3 class="mb-6 text-2xl">Clinical Environment</h3>
                <p class="text-secondary">
                    A clean workshop is a precise workshop. Our facilities are maintained to the highest standards to prevent contamination and ensure mechanical integrity.
                </p>
            </div>
            <div class="value-card">
                <h3 class="mb-6 text-2xl">Genuine Integrity</h3>
                <p class="text-secondary">
                    We exclusively use genuine parts and manufacturer-approved fluids. We never compromise on the components that keep your vehicle performing at its peak.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team/Expertise Section -->
<section class="py-section bg-surface-soft">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4qBGKy1NBWSOLnDaYkT1sJ_ukpr2ex9mji_omPQJT7fOpaj8s6qUHLXeZdv6g5O5fxMkxKWBHHURpGtVw3iW6a6VaHRevUl5pPIk2wt5LfuVsDpgcLMKf6Iwje9KPU-vaQW-E1uSNUY1Fq2-iu1PmiU11eVgS19KYDZsqxeGGpg6Z0jtIz7qsyv7UptrIPvo_1oK6qpLrOj3DJcbjgdaNDvykEGBiz-ZyW9hWPUEAMQ8_D6-Jr0K5sTMVY4PgdPb0fTV5KXPsg4Q" alt="Technician" class="rounded-xl grayscale-[50%]">
            <div>
                <h2 class="mb-8">Mastering the Star</h2>
                <p class="text-secondary mb-6">
                    Our lead technicians are specialized exclusively in the Mercedes-Benz ecosystem. This focus allows us to understand the nuances and common failure points that general mechanics often overlook.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">verified</span>
                        <span class="font-bold">Star Diagnosis Certified</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">verified</span>
                        <span class="font-bold">AMG High-Performance Specialist</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">verified</span>
                        <span class="font-bold">Vintage Mercedes Restoration Expert</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
