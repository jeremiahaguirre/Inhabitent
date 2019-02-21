<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if (have_posts()): ?>

			<header class="page-header">
			<nav class="product-categories">
					<h2>Shop Stuff</h2>
					<?php $terms = get_terms(
						array(
							'taxonomy'=>'product_type',
							'hide_empty'=>0,
					))?>
				
					<ul>
					<?php foreach ($terms as $term): ?>
						<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name ;?></a></li>
						<?php endforeach ?>
					</ul>
				</nav>
			</header><!-- .page-header -->

			<?php /* Start the Loop */?>
			<?php while (have_posts()): the_post();?>

						<?php
    get_template_part('template-parts/content');
    ?>

					<?php endwhile;?>

			<?php the_posts_navigation();?>

		<?php else: ?>

			<?php get_template_part('template-parts/content', 'none');?>

		<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>