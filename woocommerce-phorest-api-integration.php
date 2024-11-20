<?php

/**
 * Plugin Name:       Primary Plugin Boiler Plate
 * Plugin URI:        https://themuzammil.com/
 * Description:       Connects with the SolarEdge scrape
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      7.2
 * Author:            Muzammil Ahmed
 * Author URI:        https://themuzammil.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Direct access protection
 */
defined('ABSPATH') or die('This path is not accessable');
/**
 * Include js and css files
 */
function BPP_includes_resources(){
    $plugin_url = plugin_dir_url( __FILE__ );
    //plugin styles
    wp_enqueue_style( 'BPP-styles', plugins_url( 'assets/css/styles.css', __FILE__ ));
    
    //plugin scripts
    wp_enqueue_script( 'BPP-script', plugins_url( 'assets/js/script.js', __FILE__ ), array(),'1.1.0',true);
    

 }
 add_action( 'wp_enqueue_scripts', 'BPP_includes_resources' );

function BPP_includes_admin_resources(){
    //plugin admin script
    wp_enqueue_script( 'BPP-admin-js', plugins_url( 'assets/js/admin.js', __FILE__ ), array(),'1.0.0',true);

    // //include ajax vars
	// $nonce_val = wp_create_nonce('ajax_check');
	// $js_object = array(
	// 	'ajax_url' 		=> admin_url( 'admin-ajax.php' ),
	// 	'nonce'    		=> $nonce_val,
	// );

	// wp_localize_script( 'BPP-admin-js', 'BPP_ajax_obj', $js_object);
}

 add_action( 'admin_enqueue_scripts', 'BPP_includes_admin_resources' );

 
/**
 * Global Variables
 */
// $GLOBALS['json_file_path'] = ABSPATH . 'wp-content/plugins/pollen-forcast-chart-ambee/data/data.json';
// $GLOBALS['api_key']  = '{KEY}';



?>