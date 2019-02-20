<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header();?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="banner">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" />
		</div>
			
		<div class="home-blog-posts">
			<h2>Inhabitent Journal</h2>
				<ul>
					<?php $product_posts = get_home_blog_post();?>
					<?php foreach ($product_posts as $post): setup_postdata($post);?>
					<li><div class="home-post-thumbnail"><?php if (has_post_thumbnail()): ?>	
						<?php the_post_thumbnail('medium_large', ['class' => 'home-blog-img']);?></div>
						<div class="home-blog-text"><span><?php the_date();?>&nbsp;&nbsp;/&nbsp;</span>
						<span><?php echo comments_number();?></span>
						<span><?php the_title(); ?></span></li>
						<a href="<?php the_permalink()?>">Read Entry</a></div>
					<?php endif;?>
					<?php endforeach;
					wp_reset_postdata();?>
				</ul>
		</div>
		<div class="adventure-posts">
		</div> 

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer();?>
