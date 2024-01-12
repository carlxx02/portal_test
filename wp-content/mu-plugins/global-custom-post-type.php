<?php
// Register Custom Post Type
function custom_post_event() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'Events' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'Events' ),
		'menu_name'             => __( 'Events', 'Events' ),
		'name_admin_bar'        => __( 'Post Type', 'Events' ),
		'archives'              => __( 'Item Archives', 'Events' ),
		'attributes'            => __( 'Item Attributes', 'Events' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Events' ),
		'all_items'             => __( 'All Items', 'Events' ),
		'add_new_item'          => __( 'Add New Item', 'Events' ),
		'add_new'               => __( 'Add New', 'Events' ),
		'new_item'              => __( 'New Item', 'Events' ),
		'edit_item'             => __( 'Edit Item', 'Events' ),
		'update_item'           => __( 'Update Item', 'Events' ),
		'view_item'             => __( 'View Item', 'Events' ),
		'view_items'            => __( 'View Items', 'Events' ),
		'search_items'          => __( 'Search Item', 'Events' ),
		'not_found'             => __( 'Not found', 'Events' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Events' ),
		'featured_image'        => __( 'Featured Image', 'Events' ),
		'set_featured_image'    => __( 'Set featured image', 'Events' ),
		'remove_featured_image' => __( 'Remove featured image', 'Events' ),
		'use_featured_image'    => __( 'Use as featured image', 'Events' ),
		'insert_into_item'      => __( 'Insert into item', 'Events' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Events' ),
		'items_list'            => __( 'Items list', 'Events' ),
		'items_list_navigation' => __( 'Items list navigation', 'Events' ),
		'filter_items_list'     => __( 'Filter items list', 'Events' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'Events' ),
		'description'           => __( 'Add Events Here', 'Events' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'custom_post_event', 0 );

// Register Custom Post Type
function custom_post_award() {

	$labels = array(
		'name'                  => _x( 'Awards', 'Post Type General Name', 'Awards' ),
		'singular_name'         => _x( 'Award', 'Post Type Singular Name', 'Awards' ),
		'menu_name'             => __( 'Awards', 'Awards' ),
		'name_admin_bar'        => __( 'Post Type', 'Awards' ),
		'archives'              => __( 'Item Archives', 'Awards' ),
		'attributes'            => __( 'Item Attributes', 'Awards' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Awards' ),
		'all_items'             => __( 'All Items', 'Awards' ),
		'add_new_item'          => __( 'Add New Item', 'Awards' ),
		'add_new'               => __( 'Add New', 'Awards' ),
		'new_item'              => __( 'New Item', 'Awards' ),
		'edit_item'             => __( 'Edit Item', 'Awards' ),
		'update_item'           => __( 'Update Item', 'Awards' ),
		'view_item'             => __( 'View Item', 'Awards' ),
		'view_items'            => __( 'View Items', 'Awards' ),
		'search_items'          => __( 'Search Item', 'Awards' ),
		'not_found'             => __( 'Not found', 'Awards' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Awards' ),
		'featured_image'        => __( 'Featured Image', 'Awards' ),
		'set_featured_image'    => __( 'Set featured image', 'Awards' ),
		'remove_featured_image' => __( 'Remove featured image', 'Awards' ),
		'use_featured_image'    => __( 'Use as featured image', 'Awards' ),
		'insert_into_item'      => __( 'Insert into item', 'Awards' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Awards' ),
		'items_list'            => __( 'Items list', 'Awards' ),
		'items_list_navigation' => __( 'Items list navigation', 'Awards' ),
		'filter_items_list'     => __( 'Filter items list', 'Awards' ),
	);
	$args = array(
		'label'                 => __( 'Award', 'Awards' ),
		'description'           => __( 'Add Awards Here', 'Awards' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'awards', $args );

}
add_action( 'init', 'custom_post_award', 0 );
// Register Custom Post Type
function custom_post_forms() {

	$labels = array(
		'name'                  => _x( 'Forms', 'Post Type General Name', 'Forms' ),
		'singular_name'         => _x( 'Form', 'Post Type Singular Name', 'Forms' ),
		'menu_name'             => __( 'Forms', 'Forms' ),
		'name_admin_bar'        => __( 'Post Type', 'Forms' ),
		'archives'              => __( 'Item Archives', 'Forms' ),
		'attributes'            => __( 'Item Attributes', 'Forms' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Forms' ),
		'all_items'             => __( 'All Items', 'Forms' ),
		'add_new_item'          => __( 'Add New Item', 'Forms' ),
		'add_new'               => __( 'Add New', 'Forms' ),
		'new_item'              => __( 'New Item', 'Forms' ),
		'edit_item'             => __( 'Edit Item', 'Forms' ),
		'update_item'           => __( 'Update Item', 'Forms' ),
		'view_item'             => __( 'View Item', 'Forms' ),
		'view_items'            => __( 'View Items', 'Forms' ),
		'search_items'          => __( 'Search Item', 'Forms' ),
		'not_found'             => __( 'Not found', 'Forms' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Forms' ),
		'featured_image'        => __( 'Featured Image', 'Forms' ),
		'set_featured_image'    => __( 'Set featured image', 'Forms' ),
		'remove_featured_image' => __( 'Remove featured image', 'Forms' ),
		'use_featured_image'    => __( 'Use as featured image', 'Forms' ),
		'insert_into_item'      => __( 'Insert into item', 'Forms' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Forms' ),
		'items_list'            => __( 'Items list', 'Forms' ),
		'items_list_navigation' => __( 'Items list navigation', 'Forms' ),
		'filter_items_list'     => __( 'Filter items list', 'Forms' ),
	);
	$args = array(
		'label'                 => __( 'Form', 'Forms' ),
		'description'           => __( 'Add Forms Here', 'Forms' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-forms',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'forms', $args );

}
add_action( 'init', 'custom_post_forms', 0 );
// Register Custom Post Type
function custom_post_links() {

	$labels = array(
		'name'                  => _x( 'Links', 'Post Type General Name', 'Links' ),
		'singular_name'         => _x( 'Link', 'Post Type Singular Name', 'Links' ),
		'menu_name'             => __( 'Links', 'Links' ),
		'name_admin_bar'        => __( 'Post Type', 'Links' ),
		'archives'              => __( 'Item Archives', 'Links' ),
		'attributes'            => __( 'Item Attributes', 'Links' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Links' ),
		'all_items'             => __( 'All Items', 'Links' ),
		'add_new_item'          => __( 'Add New Item', 'Links' ),
		'add_new'               => __( 'Add New', 'Links' ),
		'new_item'              => __( 'New Item', 'Links' ),
		'edit_item'             => __( 'Edit Item', 'Links' ),
		'update_item'           => __( 'Update Item', 'Links' ),
		'view_item'             => __( 'View Item', 'Links' ),
		'view_items'            => __( 'View Items', 'Links' ),
		'search_items'          => __( 'Search Item', 'Links' ),
		'not_found'             => __( 'Not found', 'Links' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Links' ),
		'featured_image'        => __( 'Featured Image', 'Links' ),
		'set_featured_image'    => __( 'Set featured image', 'Links' ),
		'remove_featured_image' => __( 'Remove featured image', 'Links' ),
		'use_featured_image'    => __( 'Use as featured image', 'Links' ),
		'insert_into_item'      => __( 'Insert into item', 'Links' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Links' ),
		'items_list'            => __( 'Items list', 'Links' ),
		'items_list_navigation' => __( 'Items list navigation', 'Links' ),
		'filter_items_list'     => __( 'Filter items list', 'Links' ),
	);
	$args = array(
		'label'                 => __( 'Link', 'Links' ),
		'description'           => __( 'Add Links Here', 'Links' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-links',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'links', $args );

}
add_action( 'init', 'custom_post_links', 0 );
// Register Custom Post Type
function custom_post_reference() {

	$labels = array(
		'name'                  => _x( 'References', 'Post Type General Name', 'References' ),
		'singular_name'         => _x( 'Reference', 'Post Type Singular Name', 'References' ),
		'menu_name'             => __( 'References', 'References' ),
		'name_admin_bar'        => __( 'Post Type', 'References' ),
		'archives'              => __( 'Item Archives', 'References' ),
		'attributes'            => __( 'Item Attributes', 'References' ),
		'parent_item_colon'     => __( 'Parent Item:', 'References' ),
		'all_items'             => __( 'All Items', 'References' ),
		'add_new_item'          => __( 'Add New Item', 'References' ),
		'add_new'               => __( 'Add New', 'References' ),
		'new_item'              => __( 'New Item', 'References' ),
		'edit_item'             => __( 'Edit Item', 'References' ),
		'update_item'           => __( 'Update Item', 'References' ),
		'view_item'             => __( 'View Item', 'References' ),
		'view_items'            => __( 'View Items', 'References' ),
		'search_items'          => __( 'Search Item', 'References' ),
		'not_found'             => __( 'Not found', 'References' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'References' ),
		'featured_image'        => __( 'Featured Image', 'References' ),
		'set_featured_image'    => __( 'Set featured image', 'References' ),
		'remove_featured_image' => __( 'Remove featured image', 'References' ),
		'use_featured_image'    => __( 'Use as featured image', 'References' ),
		'insert_into_item'      => __( 'Insert into item', 'References' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'References' ),
		'items_list'            => __( 'Items list', 'References' ),
		'items_list_navigation' => __( 'Items list navigation', 'References' ),
		'filter_items_list'     => __( 'Filter items list', 'References' ),
	);
	$args = array(
		'label'                 => __( 'Reference', 'References' ),
		'description'           => __( 'Add References Here', 'References' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-database',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'references', $args );

}
add_action( 'init', 'custom_post_reference', 0 );