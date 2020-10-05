<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//family custom post type

// Register Custom Post Type family
// Post Type Key: family

function create_family_cpt() {

  $labels = array(
    'name' => __( 'Families', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Family', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Family', 'textdomain' ),
    'name_admin_bar' => __( 'Family', 'textdomain' ),
    'archives' => __( 'Family Archives', 'textdomain' ),
    'attributes' => __( 'Family Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Family:', 'textdomain' ),
    'all_items' => __( 'All Families', 'textdomain' ),
    'add_new_item' => __( 'Add New Family', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Family', 'textdomain' ),
    'edit_item' => __( 'Edit Family', 'textdomain' ),
    'update_item' => __( 'Update Family', 'textdomain' ),
    'view_item' => __( 'View Family', 'textdomain' ),
    'view_items' => __( 'View Families', 'textdomain' ),
    'search_items' => __( 'Search Families', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into family', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this family', 'textdomain' ),
    'items_list' => __( 'Family list', 'textdomain' ),
    'items_list_navigation' => __( 'Family list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Family list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'family', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-groups',
  );
  register_post_type( 'family', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_family_cpt', 0 );



//event custom post type

// Register Custom Post Type event
// Post Type Key: event

function create_event_cpt() {

  $labels = array(
    'name' => __( 'Events', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Event', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Event', 'textdomain' ),
    'name_admin_bar' => __( 'Event', 'textdomain' ),
    'archives' => __( 'Event Archives', 'textdomain' ),
    'attributes' => __( 'Event Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Event:', 'textdomain' ),
    'all_items' => __( 'All Events', 'textdomain' ),
    'add_new_item' => __( 'Add New Event', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Event', 'textdomain' ),
    'edit_item' => __( 'Edit Event', 'textdomain' ),
    'update_item' => __( 'Update Event', 'textdomain' ),
    'view_item' => __( 'View Event', 'textdomain' ),
    'view_items' => __( 'View Events', 'textdomain' ),
    'search_items' => __( 'Search Events', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into event', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this event', 'textdomain' ),
    'items_list' => __( 'Event list', 'textdomain' ),
    'items_list_navigation' => __( 'Event list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Event list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'event', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array(),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'page',
    'menu_icon' => 'dashicons-calendar-alt',
  );
  register_post_type( 'event', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_event_cpt', 0 );


//ACF SAVE and LOAD JSON
add_filter('acf/settings/save_json', 'alt_family_json_save_point');
 
function alt_family_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;
    
}


add_filter('acf/settings/load_json', 'alt_family_json_load_point');

function alt_family_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_stylesheet_directory()  . '/acf-json';
    
    
    // return
    return $paths;
    
}

