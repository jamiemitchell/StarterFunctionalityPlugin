<?php

/*
  Plugin Name: Functionality Plugin
  Plugin URI: 
  Description: Functionality Plugin for the Genesis Starter theme.
  Author: Jamie Mitchell Design
  Author URI:  https://jamiemitchelldesign.com.au
	
  Version: 1.0.0
	
  License: GPL-2.0+
  License URI: http://www.gnu.org/licenses/gpl-2.0.txt
	
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/** -------------------------------- *
 * Constants
 *
 * 
 *  -------------------------------- */
 
if ( ! defined( 'FUNC_PLUGIN_DIR' ) ) {
	define( 'FUNC_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'FUNC_PLUGIN_URL' ) ) {
	define( 'FUNC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'FUNC_PLUGIN_VERSION' ) ) {
	define( 'FUNC_PLUGIN_VERSION', '1.0.0' );
}



/** -------------------------------- *
 * Includes
 *
 * 
 * ---------------------------------- */
 
include( FUNC_PLUGIN_DIR . 'lib/plugin-name.php' );



/** -------------------------------- *
 * Include required scripts
 *
 * 
 * ---------------------------------- */
 
//add_action( 'wp_enqueue_scripts', 'plugin_name_scripts' );
function plugin_name_scripts() {

	
    wp_enqueue_style( 'plugin-name-styles', plugins_url( '/css/style.css' , __FILE__ ), array(), CHILD_THEME_VERSION );


}