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
			<div  class="main-shop">
			<?php while (have_posts()): the_post();?>
					<div>
							<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('medium_large', ['class' => 'shop-img']); ?></a>
						
							<h2><?php the_title(); ?></h2>
							<span><?php echo CFS()->get('product_price'); ?></span></div>
					<?php endwhile;?>
					</div>
			<?php else: ?>

			<?php get_template_part('template-parts/content', 'none');?>

			<?php endif;?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();?>