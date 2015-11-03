<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function le_red_bakery_products_post_type() {

	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Products', 'text_domain' ),
		'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
		'parent_item_colon'   => __( 'product', 'text_domain' ),
		'all_items'           => __( 'All Products', 'text_domain' ),
		'add_new_item'        => __( 'Add New product', 'text_domain' ),
		'add_new'             => __( 'New Product', 'text_domain' ),
		'new_item'            => __( 'product', 'text_domain' ),
		'edit_item'           => __( 'Edit product', 'text_domain' ),
		'update_item'         => __( 'Update product', 'text_domain' ),
		'view_item'           => __( 'View product', 'text_domain' ),
		'search_items'        => __( 'Search product', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'description'         => 'Products are delicious items that Le Red Bread sells.',
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'author', 'thumbnail', 'revisions',),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_incon'          => 'dashicons-cart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'products',		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'le_red_bakery_products_post_type', 0 );
