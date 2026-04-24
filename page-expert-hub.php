<?php
/**
 * Template Name: Expert Hub
 */

get_header(); ?>

<!-- Page Hero -->
<section class="page-hero bg-surface-dark py-24 text-center">
    <div class="container">
        <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">Knowledge Base</span>
        <h1 class="text-white">Expert Hub</h1>
        <p class="text-silver max-w-2xl mx-auto mt-6">
            Technical insights, maintenance guides, and expert advice directly from our master technicians.
        </p>
    </div>
</section>

<!-- Hub Content -->
<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Article 1 -->
            <article class="hub-card bg-surface-soft p-8 border border-light transition-all hover:-translate-y-2 hover:shadow-xl">
                <span class="material-symbols-outlined text-gold mb-6 text-4xl">tips_and_updates</span>
                <h3 class="mb-4 text-xl">Top 5 Maintenance Tips for Modern Mercedes</h3>
                <p class="text-secondary text-sm mb-6">
                    Learn how to extend the life of your engine and transmission with these specialist-recommended habits.
                </p>
                <a href="#" class="text-gold uppercase text-xs font-bold tracking-widest hover:underline">Read Article →</a>
            </article>

            <!-- Article 2 -->
            <article class="hub-card bg-surface-soft p-8 border border-light transition-all hover:-translate-y-2 hover:shadow-xl">
                <span class="material-symbols-outlined text-gold mb-6 text-4xl">history_edu</span>
                <h3 class="mb-4 text-xl">Understanding the Service A & B Intervals</h3>
                <p class="text-secondary text-sm mb-6">
                    A deep dive into what actually happens during your scheduled maintenance visits.
                </p>
                <a href="#" class="text-gold uppercase text-xs font-bold tracking-widest hover:underline">Read Article →</a>
            </article>

            <!-- Article 3 -->
            <article class="hub-card bg-surface-soft p-8 border border-light transition-all hover:-translate-y-2 hover:shadow-xl">
                <span class="material-symbols-outlined text-gold mb-6 text-4xl">precision_manufacturing</span>
                <h3 class="mb-4 text-xl">The Science of AMG Performance</h3>
                <p class="text-secondary text-sm mb-6">
                    Exploring the engineering behind the world's most powerful hand-built engines.
                </p>
                <a href="#" class="text-gold uppercase text-xs font-bold tracking-widest hover:underline">Read Article →</a>
            </article>
        </div>
    </div>
</section>

<!-- Resource Section -->
<section class="py-section bg-surface-dark text-white" style="background-color: var(--primary);">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
            <div>
                <h2 class="text-white mb-6">Owner Resources</h2>
                <p class="text-silver mb-8">
                    Download our specialized guides and checklists to keep your vehicle in peak condition between workshop visits.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">download</span>
                        <span>2024 Maintenance Checklist (PDF)</span>
                    </li>
                    <li class="flex items-center gap-4">
                        <span class="material-symbols-outlined text-gold">download</span>
                        <span>Seasonal Care Guide (PDF)</span>
                    </li>
                </ul>
            </div>
            <div class="p-12 border border-border-dark" style="background-color: #1a1a1a;">
                <h4 class="text-gold mb-4">Ask a Technician</h4>
                <p class="text-sm text-silver mb-8">Have a specific technical question? Our experts are here to help.</p>
                <form action="#" class="space-y-4">
                    <input type="text" placeholder="Your Name" class="w-full bg-primary border border-border-dark p-4 text-white text-sm" style="background: transparent; border: 1px solid #333;">
                    <textarea placeholder="Your Question" rows="4" class="w-full bg-primary border border-border-dark p-4 text-white text-sm" style="background: transparent; border: 1px solid #333;"></textarea>
                    <button class="btn btn--gold w-full">Submit Question</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
