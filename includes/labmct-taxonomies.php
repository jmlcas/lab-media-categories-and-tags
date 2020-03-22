<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

 /* Add categories and tags in media */

function labmct_thematics_taxonomies() {
    $labels = array(
        'name'              => _x( 'Thematics', 'Taxonomy General Name','labmct' ),
        'singular_name'     => _x( 'Thematic', 'Taxonomy Singular Name','labmct' ),
		'menu_name'         => __( 'Thematics', 'labmct' ),        
        'search_items'      => __( 'Search_Thematics', 'labmct' ),
        'all_items'         => __( 'All Thematics', 'labmct' ),
        'parent_item'       => __( 'Parent Thematic', 'labmct' ),
        'parent_item_colon' => __( 'Parent Thematic:', 'labmct' ),
        'edit_item'         => __( 'Edit Thematic', 'labmct' ),
        'update_item'       => __( 'Update Thematic', 'labmct' ),
        'add_new_item'      => __( 'Add New Thematic', 'labmct' ),
        'new_item_name'     => __( 'New Thematic Name', 'labmct'  ),		
		'view_item'                  => __( 'View Thematic', 'labmct' ),
		'separate_items_with_commas' => __( 'Separate thematics with commas', 'labmct' ),
		'add_or_remove_items'        => __( 'Add or remove thematics', 'labmct' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'labmct' ),
		'popular_items'              => __( 'Popular thematics', 'labmct' ),
		'not_found'                  => __( 'Not Found', 'labmct' ),
		'no_terms'                   => __( 'No thematics', 'labmct' ),
		'items_list'                 => __( 'Thematics list', 'labmct' ),
		'items_list_navigation'      => __( 'Thematics list navigation', 'labmct' ),		  
    );
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,		
		'show_in_nav_menus'          => true,
		'show_in_rest'               => true,
		'show_tagcloud'              => true,
		'query_var'                  => true,
		'rewrite'                    => array( 'slug' => 'thematics' ),
	);
  
register_taxonomy( 'thematics', array( 'attachment' ), $args );
}

add_action( 'init', 'labmct_thematics_taxonomies', 0 );


function labmct_mytags_taxonomies() {

    $labels = array(
        'name'              => _x( 'Types', 'Taxonomy General Name','labmct' ),
        'singular_name'     => _x( 'Type', 'Taxonomy Singular Name','labmct' ),
		'menu_name'         => __( 'Types', 'labmct' ),        
        'search_items'      => __( 'Search_Types', 'labmct' ),
        'all_items'         => __( 'All Types', 'labmct' ),
        'parent_item'       => null,
        'parent_item_colon' => null,
        'edit_item'         => __( 'Edit Type', 'labmct' ),
        'update_item'       => __( 'Update Type', 'labmct' ),
        'add_new_item'      => __( 'Add New Type', 'labmct' ),
        'new_item_name'     => __( 'New Type Name', 'labmct'  ),		
		'view_item'                  => __( 'View Type', 'labmct' ),
		'separate_items_with_commas' => __( 'Separate types with commas', 'labmct' ),
		'add_or_remove_items'        => __( 'Add or remove types', 'labmct' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'labmct' ),
		'popular_items'              => __( 'Popular types', 'labmct' ),
		'not_found'                  => __( 'Not Found', 'labmct' ),
		'no_terms'                   => __( 'No terms', 'labmct' ),
		'items_list'                 => __( 'Types list', 'labmct' ),
		'items_list_navigation'      => __( 'Types list navigation', 'labmct' ),		  
    );
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'mytags' ),
    ); 
      
register_taxonomy( 'mytags', array( 'attachment' ), $args );
}

add_action( 'init', 'labmct_mytags_taxonomies', 0 );
