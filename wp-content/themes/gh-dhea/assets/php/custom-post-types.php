<?php
/**
 * Custom Post Type for Landing Pages | CPT type: lp
 * --------------------------------------------------------------------
 */

function articles()
{
  register_post_type('articles',
    array('labels' => array(
      'name' => __('Articles'),
      'singular_name' => __('Article'),
      'all_items' => __('All Articles'),
      'add_new' => __('Add Article'),
      'add_new_item' => __('Add Article'),
      'edit' => __('Edit'),
      'edit_item' => __('Edit Article'),
      'new_item' => __('New Article'),
      'view_item' => __('View Article'),
      'search_items' => __('Search for Article'),
      'not_found' => __('Nothing found in the Database.'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
    ),
      'description' => __('Articles'),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-welcome-learn-more',
      'rewrite' => array('slug' => 'articles', 'with_front' => false),
      'has_archive' => 'articles',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array('title', 'revisions')
    )
  );
}

function download_modals() {
  register_post_type( 'download_modals',
    array( 'labels' => array(
      'name' => __( 'Downloads' ),
      'singular_name' => __( 'Download' ),
      'all_items' => __( 'All Downloads' ),
      'add_new' => __( 'Add Download' ),
      'add_new_item' => __( 'Add Download' ),
      'edit' => __( 'Edit' ),
      'edit_item' => __( 'Edit Download' ),
      'new_item' => __( 'New Download' ),
      'view_item' => __( 'View Download' ),
      'search_items' => __( 'Search for Download' ),
      'not_found' =>  __( 'Nothing found in the Database.' ),
      'not_found_in_trash' => __( 'Nothing found in Trash' ),
      'parent_item_colon' => ''
    ),
      'description' => __( 'Downloads' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-slides',
      'rewrite'   => array( 'slug' => 'download_modals', 'with_front' => false ),
      'has_archive' => 'download_modals',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'revisions')
    )
  );
}

function video_module_videos() {
  register_post_type( 'video_module_video',
    array( 'labels' => array(
      'name' => __( 'Videos' ),
      'singular_name' => __( 'Video' ),
      'all_items' => __( 'All Videos' ),
      'add_new' => __( 'Add Video' ),
      'add_new_item' => __( 'Add Video' ),
      'edit' => __( 'Edit' ),
      'edit_item' => __( 'Edit Video' ),
      'new_item' => __( 'New Video' ),
      'view_item' => __( 'View Video' ),
      'search_items' => __( 'Search for Video' ),
      'not_found' =>  __( 'Nothing found in the Database.' ),
      'not_found_in_trash' => __( 'Nothing found in Trash' ),
      'parent_item_colon' => ''
    ),
      'description' => __( 'Videos' ),
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8,
      'menu_icon' => 'dashicons-video-alt3',
      'rewrite'   => array( 'slug' => 'video_module_video', 'with_front' => false ),
      'has_archive' => 'video_module_video',
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array( 'title', 'revisions')
    )
  );
}

// Add actions

add_action( 'init', 'articles');
add_action( 'init', 'download_modals');
add_action( 'init', 'video_module_videos');

?>
