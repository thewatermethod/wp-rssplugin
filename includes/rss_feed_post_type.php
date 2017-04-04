<?php

// Register Custom Post Type
function tg_rss_custom_post_Type() {

	$labels = array(
		'name'                  => 'RSS Feeds',
		'singular_name'         => 'RSS Feed',
		'menu_name'             => 'RSS Feeds',
		'name_admin_bar'        => 'RSS Feed',
		'archives'              => 'RSS Feed Archives',
		'attributes'            => 'RSS Feed Attributes',
		'parent_item_colon'     => 'Parent RSS Feed:',
		'all_items'             => 'All RSS Feeds',
		'add_new_item'          => 'Add New RSS Feed',
		'add_new'               => 'Add RSS Feed',
		'new_item'              => 'New RSS Feed',
		'edit_item'             => 'Edit RSS Feed',
		'update_item'           => 'Update RSS Feed',
		'view_item'             => 'View RSS Feed',
		'view_items'            => 'View RSS Feeds',
		'search_items'          => 'Search RSS Feed',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into RSS Feed',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'RSS Feeds list',
		'items_list_navigation' => 'RSS Feeds list navigation',
		'filter_items_list'     => 'Filter RSS Feeds list',
	);
	$args = array(
		'label'                 => 'RSS Feed',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 5,
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'tg_rss', $args );

}
add_action( 'init', 'tg_rss_custom_post_Type', 0 );