<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="single-blog-post">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content'); ?>
        <button type="button"><i class="fab fa-facebook-f"></i> Like</button>
        <button type="button"><i class="fab fa-twitter"></i> Tweet</button>
        <button type="button"><i class="fab fa-pinterest"></i> Pin</button>

        <?php
                // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()): comments_template();
        endif;
        ?>

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?> 