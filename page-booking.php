<?php
/**
 * Template Name: Booking Page
 */

get_header(); ?>

<section class="py-section bg-surface-soft min-h-[80vh]">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">Reservation</span>
            <h1 class="mb-6">Book Your Appointment</h1>
            <p class="text-secondary">
                Select your service and preferred date. Our lead technician will confirm via WhatsApp within 2 hours.
            </p>
        </div>

        <div class="max-w-2xl mx-auto bg-white p-12 rounded-xl shadow-xl border border-light">
            <div class="booking-steps flex justify-between mb-12">
                <div class="step active text-center">
                    <div class="w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center mx-auto mb-2 font-bold">1</div>
                    <span class="text-[10px] uppercase font-bold tracking-widest">Details</span>
                </div>
                <div class="step text-center opacity-30">
                    <div class="w-10 h-10 rounded-full bg-silver text-white flex items-center justify-center mx-auto mb-2 font-bold">2</div>
                    <span class="text-[10px] uppercase font-bold tracking-widest">Service</span>
                </div>
                <div class="step text-center opacity-30">
                    <div class="w-10 h-10 rounded-full bg-silver text-white flex items-center justify-center mx-auto mb-2 font-bold">3</div>
                    <span class="text-[10px] uppercase font-bold tracking-widest">Confirm</span>
                </div>
            </div>

            <form action="#" method="POST" class="space-y-8">
                <!-- Vehicle Info -->
                <div class="space-y-4">
                    <h4 class="uppercase tracking-widest text-xs text-gold font-black">Vehicle Information</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <input type="text" placeholder="Make (e.g. Mercedes-Benz)" class="w-full p-4 border border-light rounded bg-surface-soft text-sm outline-none focus:border-gold">
                        <input type="text" placeholder="Model (e.g. S-Class)" class="w-full p-4 border border-light rounded bg-surface-soft text-sm outline-none focus:border-gold">
                    </div>
                    <input type="text" placeholder="Year" class="w-full p-4 border border-light rounded bg-surface-soft text-sm outline-none focus:border-gold">
                </div>

                <!-- Service Choice -->
                <div class="space-y-4">
                    <h4 class="uppercase tracking-widest text-xs text-gold font-black">Service Category</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="service-option p-4 border border-light rounded text-center cursor-pointer hover:border-gold transition-all">
                            <span class="material-symbols-outlined mb-2">settings_suggest</span>
                            <p class="text-[10px] font-bold uppercase">Diagnostics</p>
                        </div>
                        <div class="service-option p-4 border border-light rounded text-center cursor-pointer hover:border-gold transition-all">
                            <span class="material-symbols-outlined mb-2">build</span>
                            <p class="text-[10px] font-bold uppercase">Maintenance</p>
                        </div>
                        <div class="service-option p-4 border border-light rounded text-center cursor-pointer hover:border-gold transition-all">
                            <span class="material-symbols-outlined mb-2">engineering</span>
                            <p class="text-[10px] font-bold uppercase">Repair</p>
                        </div>
                    </div>
                </div>

                <!-- Date/Time -->
                <div class="space-y-4">
                    <h4 class="uppercase tracking-widest text-xs text-gold font-black">Preferred Schedule</h4>
                    <input type="date" class="w-full p-4 border border-light rounded bg-surface-soft text-sm outline-none focus:border-gold">
                </div>

                <button type="submit" class="btn btn--primary w-full py-5">Proceed to Confirmation</button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
