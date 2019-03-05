<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        
    </header><!-- .entry-header -->

    <div class="entry-content">
	<div class="price">
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            <span>
                <?php echo CFS()->get('product_price'); ?><span>
        </div>
        <?php the_content(); ?>
        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html('Pages:'),
            'after'  => '</div>',
        ));
        ?>
        <button type="button"><i class="fab fa-facebook-f"></i> Like</button>
        <button type="button"><i class="fab fa-twitter"></i> Tweet</button>
        <button type="button"><i class="fab fa-pinterest"></i> Pin</button>
    </div><!-- .entry-content -->

    <div class="entry-footer">
        <?php red_starter_entry_footer(); ?>
    </div><!-- .entry-footer -->
</article><!-- #post-## --> 