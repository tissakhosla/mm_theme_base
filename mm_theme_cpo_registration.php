<?php

// /*
//     ===================================
//     Register Tune Custom Post Type
//     ===================================
// */

function tk2021_tunes_init()

{
    $labels = array(
        'name' => _x('Tunes', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Tune', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Tunes', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Tune', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'tune', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Tune', 'tk2021-textdomain') ,
        'new_item' => __('New Tune', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Tune', 'tk2021-textdomain') ,
        'view_item' => __('View Tune', 'tk2021-textdomain') ,
        'all_items' => __('All Tunes', 'tk2021-textdomain') ,
        'search_items' => __('Search Tunes', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent Tune:', 'tk2021-textdomain') ,
        'not_found' => __('No tunes found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No tunes found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'music-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-media-audio',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        )
    );

    register_post_type('tunes', $args);
}
add_action('init', 'tk2021_tunes_init');

// /*
//     ===================================
//     Register Set Custom Post Type
//     ===================================
// */

function tk2021_sets_init()

{
    $labels = array(
        'name' => _x('Sets', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Set', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Sets', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Set', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'set', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Set', 'tk2021-textdomain') ,
        'new_item' => __('New Set', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Set', 'tk2021-textdomain') ,
        'view_item' => __('View Set', 'tk2021-textdomain') ,
        'all_items' => __('All Sets', 'tk2021-textdomain') ,
        'search_items' => __('Search Set', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent Set:', 'tk2021-textdomain') ,
        'not_found' => __('No sets found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No sets found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'music-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-album',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        )
    );

    register_post_type('sets', $args);
}
add_action('init', 'tk2021_sets_init');

// /*
//     ===================================
//     Register Code Custom Post Type
//     ===================================
// */

function tk2021_code_init()

{
    $labels = array(
        'name' => _x('Code', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Code', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Code', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Code', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'resource', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Code Project', 'tk2021-textdomain') ,
        'new_item' => __('New Code', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Code', 'tk2021-textdomain') ,
        'view_item' => __('View Code', 'tk2021-textdomain') ,
        'all_items' => __('All Code', 'tk2021-textdomain') ,
        'search_items' => __('Search Code', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent Code:', 'tk2021-textdomain') ,
        'not_found' => __('No code found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No code found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'code-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-editor-code',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('code', $args);
}
add_action('init', 'tk2021_code_init');

// /*
//     ===================================
//     Register Personnel Custom Post Type
//     ===================================
// */

function tk2021_personnel_init()

{
    $labels = array(
        'name' => _x('Personnel', 'post type general name', 'tk2021-textdomain') ,
        'singular_name' => _x('Person', 'post type singular name', 'tk2021-textdomain') ,
        'menu_name' => _x('Personnel', 'admin menu', 'tk2021-textdomain') ,
        'name_admin_bar' => _x('Person', 'add new on admin bar', 'tk2021-textdomain') ,
        'add_new' => __('Add New', 'resource', 'tk2021-textdomain') ,
        'add_new_item' => __('Add New Person', 'tk2021-textdomain') ,
        'new_item' => __('New Person', 'tk2021-textdomain') ,
        'edit_item' => __('Edit Person', 'tk2021-textdomain') ,
        'view_item' => __('View Person', 'tk2021-textdomain') ,
        'all_items' => __('All People', 'tk2021-textdomain') ,
        'search_items' => __('Search People', 'tk2021-textdomain') ,
        'parent_item_colon' => __('Parent People:', 'tk2021-textdomain') ,
        'not_found' => __('No personnel found.', 'tk2021-textdomain') ,
        'not_found_in_trash' => __('No personnel found in Trash.', 'tk2021-textdomain')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'personnel-list',
            'with_front' => false
        ) ,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        )
    );

    /******** Icon reference for $args['menu_position'] --> https://developer.wordpress.org/resource/dashicons/ *********/

    register_post_type('personnel', $args);
}
add_action('init', 'tk2021_personnel_init');