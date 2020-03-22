<?php

/**
* Plugin Name: Lab Media Categories and Tags
* Description: Very simple plugin only add news Categories, news Tags and trash to WordPress Media Library. 
* Version:     1.1
* Plugin URI:  https://labarta.es/lab-media-categories-and-tags
* Author:      Labarta
* Author URI:  https://labarta.es/
* License:     GPL-2.0+
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: labmct
* Domain Path: /languages
**/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


require_once plugin_dir_path(__FILE__) . '/includes/labmct-sortables.php';
require_once plugin_dir_path(__FILE__) . '/includes/labmct-taxonomies.php';
require_once plugin_dir_path(__FILE__) . '/includes/labmct-media-trash.php';


/* Languages */

add_action( 'plugins_loaded', 'labmct_plugin_load_textdomain' );

function labmct_plugin_load_textdomain() {
load_plugin_textdomain( 'labmct', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}