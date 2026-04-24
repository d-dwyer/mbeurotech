</main><!-- #primary -->

<footer class="site-footer bg-surface-dark text-on-primary py-section">
    <div class="container">
        <div class="footer__grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 mb-16">
            <div class="footer__brand">
                <div class="logo mb-4 text-white flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.png" alt="MB Euro Tech" style="height: 40px; width: auto;">
                    <span>MB <span class="text-gold">EURO TECH</span></span>
                </div>
                <p class="text-silver mb-8">
                    Luxury automotive care specialized for Mercedes-Benz. Experience the difference of direct technician access.
                </p>
                <div class="flex gap-4">
                    <!-- Social Icons (Placeholder) -->
                    <span class="material-symbols-outlined text-gold">share</span>
                </div>
            </div>

            <div class="footer__nav">
                <h4 class="text-white mb-6">Quick Links</h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer__menu',
                    'fallback_cb'    => 'mbeurotech_footer_menu',
                ) );
                ?>
                <style>
                    .footer__menu li { margin-bottom: 0.75rem; }
                    .footer__menu a { color: var(--silver); font-size: 0.875rem; }
                    .footer__menu a:hover { color: var(--accent); }
                </style>
            </div>

            <div class="footer__contact">
                <h4 class="text-white mb-6">Workshop</h4>
                <ul class="text-silver text-sm space-y-4">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-gold">location_on</span>
                        <span>Kingston, Jamaica</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-gold">schedule</span>
                        <span>Mon - Fri: 8am - 5pm</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-gold">phone</span>
                        <span>+1 (876) XXX-XXXX</span>
                    </li>
                </ul>
            </div>

            <div class="footer__cta">
                <h4 class="text-white mb-6">Direct Access</h4>
                <p class="text-silver text-sm mb-6">Speak directly with a specialist via WhatsApp for immediate support.</p>
                <a href="https://wa.me/yournumber" class="btn btn--outline btn--gold w-full" style="border-color: var(--accent); color: var(--accent);">
                    <span class="material-symbols-outlined mr-2">chat</span> WhatsApp Chat
                </a>
            </div>
        </div>

        <div class="footer__bottom border-t border-dark pt-8 flex flex-col-mobile justify-between items-center text-xs text-silver uppercase tracking-widest">
            <div class="mb-4 md:mb-0">
                &copy; <?php echo date('Y'); ?> MB EURO TECH. ALL RIGHTS RESERVED.
            </div>
            <div class="flex gap-8">
                <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>
                <a href="<?php echo esc_url( home_url( '/terms' ) ); ?>">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<button id="back-to-top" class="back-to-top" aria-label="Back to Top">
    <span class="material-symbols-outlined">expand_less</span>
</button>

<?php wp_footer(); ?>


<style>
    .bg-surface-dark { background-color: #121212; }
    .text-on-primary { color: #FFFFFF; }
    .border-dark { border-color: #222; }
    .space-y-4 > * + * { margin-top: 1rem; }
</style>

</body>
</html>
