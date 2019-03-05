<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

        <header class="page-header">
            <?php
            $terms = get_terms(
                array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                )
            );
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>

        </header><!-- .page-header -->

        <?php  /* Start the Loop */?>
        <div class="product-group">
            <?php while (have_posts()) : the_post(); ?>
            <div>
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_post_thumbnail('medium_large', ['class' => 'shop-img']); ?></a>
                <dl>
                    <dt>
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </dt>
                    <dd><span>
                            <?php echo CFS()->get('product_price'); ?></span>
                    <dd>
                </dl>
            </div>


            <?php endwhile; ?>
        </div>
        <?php the_posts_navigation(); ?>

        <?php else : ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?> 