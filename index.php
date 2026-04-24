<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="container py-section">
    <?php if ( have_posts() ) : ?>
        <header class="page-header mb-16">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description text-secondary">', '</div>' );
            ?>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card mb-12' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail mb-6 overflow-hidden">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto hover:scale-105 transition-all duration-700' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <header class="entry-header">
                        <span class="text-gold text-xs font-bold uppercase mb-2 block"><?php the_category(', '); ?></span>
                        <h2 class="entry-title text-2xl mb-4">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </header>

                    <div class="entry-content text-secondary text-sm mb-6">
                        <?php the_excerpt(); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="text-primary font-bold uppercase tracking-widest text-xs border-b-2 border-primary pb-1">Read More</a>
                </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_navigation(); ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
