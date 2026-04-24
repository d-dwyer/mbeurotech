<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border-light);
            transition: all var(--dur-base) var(--ease-out);
        }
        
        .site-header.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        .header__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 900;
            letter-spacing: -0.05em;
            text-transform: uppercase;
        }

        .nav__list {
            display: flex;
            gap: 2rem;
        }

        .nav__link {
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--primary);
            opacity: 0.7;
        }

        .nav__link:hover, .nav__link.active {
            opacity: 1;
            color: var(--accent);
        }

        .header__actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
        }

        @media (max-width: 992px) {
            .nav__list { display: none; }
            .mobile-toggle { display: block; }
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="masthead">
    <div class="container">
        <div class="header__inner">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        MB <span class="text-gold">EURO TECH</span>
                    <?php endif; ?>
                </a>
            </div>

            <nav class="main-navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav__list',
                    'container'      => false,
                    'fallback_cb'    => 'mbeurotech_default_menu',
                ) );
                ?>
            </nav>

            <div class="header__actions">
                <a href="https://wa.me/yournumber" class="items-center gap-2 hidden md:flex">
                    <span class="material-symbols-outlined text-gold">chat</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/booking' ) ); ?>" class="btn btn--primary btn--sm">Book Now</a>
                <button class="mobile-toggle">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>
</header>

<main id="primary" class="site-main">
