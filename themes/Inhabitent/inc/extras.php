<?php

/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');


function my_admin_logo()
{
	echo '<style type="text/css" >
	.login h1 a {background-image:url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg) !important; 
	background-repeat:no-repeat; 
	background-size: 300px 54px;
	padding-left:230px;}

	.login .button.button-primary{
		background-color:#248A83;
	}
	</style>';
}
add_filter('login_head', 'my_admin_logo');

function my_admin_logo_url()
{
	return get_site_url();
}
add_filter("login_headerurl", "my_admin_logo_url");


function product_post( $query ) {
	if (( is_post_type_archive( 'product' ) ||$query->is_tax('product_type')) && $query->is_main_query() ){
        // Display 16 posts for a custom post type called 'shop_items'
		$query->set( 'posts_per_page', 16 );
		$query->set( 'order', 'ASC' );
        return;
    }
}
add_action( 'pre_get_posts', 'product_post', 1 );

?>