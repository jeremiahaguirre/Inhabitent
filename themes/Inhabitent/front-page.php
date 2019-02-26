<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="banner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" />
        </div>
        <h2>Shop Stuff</h2>
        <section class='home-product-sections'>

            <?php $terms = get_terms(
                array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                )
            ) ?>
            <?php foreach ($terms as $term): ?>
            <ul>
                <li>
                    <img class="taxonomy-img" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $term->slug; ?>.svg">
                    <p>
                        <?php echo $term->description; ?>
                    </p>
                    <button type="button"><a href="<?php get_term_link($term); ?>">
                            <?php echo $term->name; ?></a></button>
                </li>
            </ul>

            <?php endforeach; ?>
        </section>
        <section class="home-blog-posts">
            <h2>Inhabitent Journal</h2>
            <ul>
                <?php $product_posts = get_home_blog_post(); ?>
                <?php foreach ($product_posts as $post): setup_postdata($post); ?>
                <li>
                    <div class="home-post-thumbnail">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium_large', ['class' => 'home-blog-img']); ?>
                    </div>
                    <div class="home-blog-text"><span>
                            <?php the_date(); ?>&nbsp;&nbsp;/&nbsp;
                            <?php echo comments_number(); ?></span>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <form><a href="<?php the_permalink() ?>"><button type="button">Read Entry</button></a></form>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach;
            wp_reset_postdata(); ?>
            </ul>
        </section>
        <section class="adventure-posts">
            <h2>Getting Back to Nature in a Canoe</h2>
            <h2>A Night with Friends at the Beach</h2>
            <h2>Taking in the View at Big Mountain</h2>
            <h2>Star-Gazing at the Night Sky</h2>
                </section>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 