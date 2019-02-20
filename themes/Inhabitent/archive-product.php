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
					<ul>
						<li><a href="http://localhost:8888/project-4/product_type/do/">Do</a></li>
						<li><a href="http://localhost:8888/project-4/product_type/eat/">Eat</a></li>
						<li><a href="http://localhost:8888/project-4/product_type/sleep/">Sleep</a></li>
						<li><a href="http://localhost:8888/project-4/product_type/wear/">Wear</a></li>
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