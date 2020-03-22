<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

 /* Sortable Thematics in columns */

function labmct_sortable_thematics_columns( $columns ) {
    $columns['taxonomy-thematics'] = 'Thematics';
 
    return $columns;
}

add_filter( 'manage_upload_sortable_columns', 'labmct_sortable_thematics_columns' );

/* Sortable MyTags in columns */

function labmct_sortable_mytags_columns( $columns ) {
    $columns['taxonomy-mytags'] = 'Tags'; 
    return $columns;
}
add_filter( 'manage_upload_sortable_columns', 'labmct_sortable_mytags_columns' );