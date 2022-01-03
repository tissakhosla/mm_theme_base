<?php 

function create_instrument_taxonomies() {
  
    $labels = array(
        'name' => _x( 'Instruments', 'taxonomy general name' ),
        'singular_name' => _x( 'Instrument', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Instruments' ),
        'popular_items' => __( 'Popular Instruments' ),
        'all_items' => __( 'All Instruments' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Instrument' ), 
        'update_item' => __( 'Update Instrument' ),
        'add_new_item' => __( 'Add New Instrument' ),
        'new_item_name' => __( 'New Instrument Name' ),
        'separate_items_with_commas' => __( 'Separate instruments with commas' ),
        'add_or_remove_items' => __( 'Add or remove instruments' ),
        'choose_from_most_used' => __( 'Choose from the most used instruments' ),
        'menu_name' => __( 'Instruments' ),
    ); 

    register_taxonomy(
        'instrument', 
        'personnel', 
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'instrument' ),
    ));
}

add_action( 'init', 'create_instrument_taxonomies' );

function create_role_taxonomies() {
  
    $labels = array(
        'name' => _x( 'Roles', 'taxonomy general name' ),
        'singular_name' => _x( 'Role', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Roles' ),
        'popular_items' => __( 'Popular Roles' ),
        'all_items' => __( 'All Roles' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Role' ), 
        'update_item' => __( 'Update Role' ),
        'add_new_item' => __( 'Add New Role' ),
        'new_item_name' => __( 'New Role Name' ),
        'separate_items_with_commas' => __( 'Separate roles with commas' ),
        'add_or_remove_items' => __( 'Add or remove roles' ),
        'choose_from_most_used' => __( 'Choose from the most used roles' ),
        'menu_name' => __( 'Roles' ),
    ); 

    register_taxonomy(
        'role', 
        'personnel', 
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'role' ),
    ));
}

add_action( 'init', 'create_role_taxonomies' );

function create_programType_taxonomies() {
  
    $labels = array(
        'name' => _x( 'Program Types', 'taxonomy general name' ),
        'singular_name' => _x( 'Program Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Program Types' ),
        'popular_items' => __( 'Popular Program Types' ),
        'all_items' => __( 'All Program Types' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Edit Program Type' ), 
        'update_item' => __( 'Update Program Type' ),
        'add_new_item' => __( 'Add New Program Type' ),
        'new_item_name' => __( 'New Program Type Name' ),
        'separate_items_with_commas' => __( 'Separate program types with commas' ),
        'add_or_remove_items' => __( 'Add or remove program types' ),
        'choose_from_most_used' => __( 'Choose from the most used program types' ),
        'menu_name' => __( 'Program Types' ),
    ); 

    register_taxonomy(
        'program-type', 
        'sets', 
        array(
            'hierarchical' => false,
            'labels' => $labels,
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'program-types' ),
    ));
}

add_action( 'init', 'create_programType_taxonomies' );

?>
