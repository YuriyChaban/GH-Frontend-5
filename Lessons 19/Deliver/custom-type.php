<?php
// Register Custom Post Type
function portfolio() {
$labels = array(
'name'                => _x( 'works', 'Post Type General Name', 'portfolio' ),
'singular_name'       => _x( 'work', 'Post Type Singular Name', 'portfolio' ),
'menu_name'           => __( 'Portfolio', 'portfolio' ),
'parent_item_colon'   => __( 'Parent work:', 'portfolio' ),
'all_items'           => __( 'All works', 'portfolio' ),
'view_item'           => __( 'View work', 'portfolio' ),
'add_new_item'        => __( 'Add New work', 'portfolio' ),
'add_new'             => __( 'Add New', 'portfolio' ),
'edit_item'           => __( 'Edit work', 'portfolio' ),
'search_items'        => __( 'Search work', 'portfolio' ),
'not_found'           => __( 'Not found', 'portfolio' ),
'not_found_in_trash'  => __( 'Not found in Trash', 'portfolio' ),
);
$rewrite = array(
'slug'                => 'Portfolio',
'with_front'          => true,
'pages'               => true,
'feeds'               => true,
);
$args = array(
'label'               => __( 'portfolio', 'portfolio' ),
'description'         => __( 'Works for site', 'portfolio' ),
'labels'              => $labels,
'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields', ),
'hierarchical'        => false,
'public'              => true,
'show_ui'             => true,
'show_in_menu'        => true,
'show_in_admin_bar'   => true,
'menu_position'       => 5,
'menu_icon'           => 'dashicons-wordpress-alt',
'can_export'          => true,
'has_archive'         => true,
'exclude_from_search' => false,
'publicly_queryable'  => true,
'query_var'           => 'my_portfolio',
'rewrite'             => $rewrite,
'capability_type'     => 'post',
);
register_post_type( 'portfolio', $args );
}
// Hook into the 'init' action
add_action( 'init', 'portfolio', 0 );
