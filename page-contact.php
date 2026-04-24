<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="py-section bg-surface-pure">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24">
            <!-- Contact Info -->
            <div>
                <span class="text-gold font-bold uppercase tracking-widest text-xs mb-4 block">Connect</span>
                <h1 class="mb-8">Speak with an Expert</h1>
                <p class="text-secondary text-lg mb-12">
                    Have a technical question or need a quote? Reach out directly to our workshop specialists.
                </p>

                <div class="space-y-12">
                    <div class="flex items-start gap-6">
                        <span class="material-symbols-outlined text-4xl text-gold">chat</span>
                        <div>
                            <h4 class="mb-2">WhatsApp Chat</h4>
                            <p class="text-secondary text-sm mb-4">Fastest way to get a technical consultation or send photos of your vehicle's issue.</p>
                            <a href="https://wa.me/yournumber" class="text-gold font-bold uppercase tracking-widest text-xs border-b border-gold pb-1">Start Chat</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-6">
                        <span class="material-symbols-outlined text-4xl text-gold">location_on</span>
                        <div>
                            <h4 class="mb-2">Visit Workshop</h4>
                            <p class="text-secondary text-sm mb-4">Kingston, Jamaica (By Appointment Only)</p>
                            <a href="#" class="text-gold font-bold uppercase tracking-widest text-xs border-b border-gold pb-1">View on Map</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-6">
                        <span class="material-symbols-outlined text-4xl text-gold">phone</span>
                        <div>
                            <h4 class="mb-2">Direct Phone</h4>
                            <p class="text-secondary text-sm mb-4">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="font-bold">+1 (876) XXX-XXXX</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-surface-soft p-12 rounded-xl border border-light">
                <h3 class="mb-8">Send an Inquiry</h3>
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs uppercase font-bold text-silver mb-2 block">Full Name</label>
                            <input type="text" placeholder="John Doe" class="w-full p-4 border border-light rounded bg-white text-sm focus:border-gold outline-none">
                        </div>
                        <div>
                            <label class="text-xs uppercase font-bold text-silver mb-2 block">Email Address</label>
                            <input type="email" placeholder="john@example.com" class="w-full p-4 border border-light rounded bg-white text-sm focus:border-gold outline-none">
                        </div>
                    </div>
                    <div>
                        <label class="text-xs uppercase font-bold text-silver mb-2 block">Vehicle Model</label>
                        <input type="text" placeholder="e.g. 2021 Mercedes-Benz E63 AMG" class="w-full p-4 border border-light rounded bg-white text-sm focus:border-gold outline-none">
                    </div>
                    <div>
                        <label class="text-xs uppercase font-bold text-silver mb-2 block">Message</label>
                        <textarea placeholder="Describe the service or issue..." rows="5" class="w-full p-4 border border-light rounded bg-white text-sm focus:border-gold outline-none"></textarea>
                    </div>
                    <button type="submit" class="btn btn--primary w-full py-5">Submit Inquiry</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
