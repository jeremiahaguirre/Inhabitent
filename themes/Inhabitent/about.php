<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * Template Name: about
 */

get_header();?>

<main id="main" class="about-main" role="main">	

<?php while (have_posts()): the_post();?>

<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
		
			
		<?php endwhile; // End of the loop. ?>

		</main>



<?php get_footer();?>
<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>




