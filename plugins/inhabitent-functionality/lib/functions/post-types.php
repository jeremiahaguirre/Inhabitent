<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function inhabitent_product_()
{

    $labels = array(
        'name' => 'Products',
        'singular_name' => 'Product',
        'menu_name' => 'Products',
        'name_admin_bar' => 'Product',
        'archives' => 'Product Archives',
        'attributes' => 'Product Attributes',
        'parent_item_colon' => 'Parent Item:',
        'all_items' => 'All Products',
        'add_new_item' => 'Add New Item',
        'add_new' => 'Add New Product',
        'new_item' => 'New Item Product',
        'edit_item' => 'Edit Item Product',
        'update_item' => 'Update Item Product',
        'view_item' => 'View Item Product',
        'view_items' => 'View Items Products',
        'search_items' => 'Search Item Product',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image' => 'Use as featured image',
        'insert_into_item' => 'Insert into item Product',
        'uploaded_to_this_item' => 'Uploaded to this Product',
        'items_list' => 'Products list',
        'items_list_navigation' => 'Products list navigation',
        'filter_items_list' => 'Filter Products list',
    );
    $args = array(
        'label' => 'Product',
        'description' => 'Inhabitent Products',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'show_in_rest' => true,
        'template_lock'=>'all',
        'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Description for the product',
            )),
        ),
    );
    register_post_type('product', $args);

}
add_action('init', 'inhabitent_product_', 0);
