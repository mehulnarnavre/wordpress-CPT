<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

 
//Init Hook for the custom post type

add_action('init', 'create_custom_post_type');

function create_custom_post_type() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('books', 'plural'),
'singular_name' => _x('books', 'singular'),
'menu_name' => _x('books', 'admin menu'),
'name_admin_bar' => _x('books', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New books'),
'new_item' => __('New books'),
'edit_item' => __('Edit books'),
'view_item' => __('View books'),
'all_items' => __('All books'),
'search_items' => __('Search books'),
'not_found' => __('No books found.'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'description' => 'Holds our books and specific data',
'public' => true,
'taxonomies' => array( 'category', 'post_tag' ),
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'show_in_admin_bar' => true,
'can_export' => true,
'capability_type' => 'post',
 'show_in_rest' => true,
'query_var' => true,
'rewrite' => array('slug' => 'books'),
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 6,
'menu_icon' => 'dashicons-book',
);
  
register_post_type('books', $args); // Register Post type
}

register_sidebar(
array(
    'name'=>"books sidebar",
    'id'=>'sidebar'
)

);

//breadcrumb code
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

//regiser sidebar
register_sidebar( 
    array(
    'name'=> "Sidebar Location",
    'id'=>'sidebar'
    )
);