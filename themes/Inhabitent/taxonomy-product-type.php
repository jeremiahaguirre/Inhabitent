<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 *
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()): ?>

			<header class="page-header">
				<?php
        the_archive_title('<h1 class="page-title">', '</h1>');
        the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
			</header><!-- .page-header -->

            <?php /* Start the Loop */?>
            <?php $blog_posts = get_blog_post();?>
			<?php foreach($blog_posts as $post):?>
	                    <?php the_post_thumbnail('medium_large', ['class' => 'blog-img']);?>
                        <h2><?php the_title();?></h2>
                        

            <?php endforeach;?>

			<?php the_posts_navigation();?>

		<?php else: ?>

			<?php get_template_part('template-parts/content', 'none');?>

		<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>