<?php
/**
 * Template Name: Services Page
 */

get_header(); ?>

<!-- Page Hero -->
<section class="page-hero bg-surface-dark py-24 text-center">
    <div class="container">
        <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">Our Expertise</span>
        <h1 class="text-white">Workshop Services</h1>
        <p class="text-silver max-w-2xl mx-auto mt-6">
            Factory-grade precision and technical mastery for every component of your Mercedes-Benz.
        </p>
    </div>
</section>

<!-- Detailed Services -->
<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
            <!-- Service 1 -->
            <div class="service-detail flex gap-8 flex-col md:flex-row items-start">
                <span class="material-symbols-outlined text-5xl text-gold">settings_suggest</span>
                <div>
                    <h3 class="mb-4">Computer Diagnostics</h3>
                    <p class="text-secondary mb-6">
                        We utilize factory-original Mercedes-Benz diagnostic software (Star Diagnosis System) to interface directly with your vehicle's control modules.
                    </p>
                    <ul class="text-sm space-y-2 mb-6">
                        <li class="flex gap-2"><span class="text-gold">✓</span> Electronic Control Unit (ECU) Mapping</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Transmission Control Module (TCM) Diagnosis</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Air Suspension (Airmatic/ABC) Calibration</li>
                    </ul>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="service-detail flex gap-8 flex-col md:flex-row items-start">
                <span class="material-symbols-outlined text-5xl text-gold">build</span>
                <div>
                    <h3 class="mb-4">Scheduled Maintenance</h3>
                    <p class="text-secondary mb-6">
                        Adhering strictly to Mercedes-Benz maintenance intervals (Service A & B) to ensure longevity and peak performance.
                    </p>
                    <ul class="text-sm space-y-2 mb-6">
                        <li class="flex gap-2"><span class="text-gold">✓</span> Synthetic Motor Oil Replacement</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Brake Fluid Flush & Replacement</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Cabin & Engine Air Filter Replacement</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-detail flex gap-8 flex-col md:flex-row items-start">
                <span class="material-symbols-outlined text-5xl text-gold">engineering</span>
                <div>
                    <h3 class="mb-4">Engine & Transmission</h3>
                    <p class="text-secondary mb-6">
                        From minor leaks to full rebuilds, our specialist technicians handle the most complex mechanical systems.
                    </p>
                    <ul class="text-sm space-y-2 mb-6">
                        <li class="flex gap-2"><span class="text-gold">✓</span> AMG Performance Engine Tuning</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> 7G/9G-Tronic Transmission Repair</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Cooling System Overhauls</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-detail flex gap-8 flex-col md:flex-row items-start">
                <span class="material-symbols-outlined text-5xl text-gold">auto_awesome</span>
                <div>
                    <h3 class="mb-4">Heritage Restoration</h3>
                    <p class="text-secondary mb-6">
                        Preserving the legacy of classic Mercedes-Benz models with meticulous attention to period-correct details.
                    </p>
                    <ul class="text-sm space-y-2 mb-6">
                        <li class="flex gap-2"><span class="text-gold">✓</span> Classic Fuel Injection Restoration</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Suspension & Steering Refresh</li>
                        <li class="flex gap-2"><span class="text-gold">✓</span> Period-Correct Cosmetic Updates</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-24 bg-surface-soft border-t border-light">
    <div class="container text-center">
        <h2 class="mb-8">Ready for a Specialist Inspection?</h2>
        <div class="flex justify-center gap-4 flex-col md:flex-row">
            <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn--gold">Schedule Service</a>
            <a href="https://wa.me/yournumber" class="btn btn--outline">WhatsApp Consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
