<?php
/*
Plugin Name:  CadNative Test47
Description:  WordPress Plugin Boilerplate
Plugin URI:   https://cadnative.com
Author:       Akshay Nikhare
Version:      1.0
Text Domain:  CadNativeTest47
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}


if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}





// load text domain
function CadNativeTest47_load_textdomain() {
	
	load_plugin_textdomain( 'CadNativeTest47', false, plugin_dir_path( __FILE__ ) . 'languages/' );
	
}
add_action( 'plugins_loaded', 'CadNativeTest47_load_textdomain' );



// include plugin dependencies: admin only
if ( is_admin() ) {
	
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
	
	require_once plugin_dir_path( __FILE__ ) . 'admin/LogerEmployee-manage.php';

	require_once plugin_dir_path( __FILE__ ) . 'admin/Usertt.php';
	
}



// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';



// default plugin options
function CadNativeTest47_options_default() {
	
	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => esc_html__('Powered by WordPress', 'CadNativeTest47'),
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">'. esc_html__('My custom message', 'CadNativeTest47') .'</p>',
		'custom_footer'  => esc_html__('Special message for users', 'CadNativeTest47'),
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);
	
}


/**
 * Add a link to the settings page to the plugins list
 *
 * @param array $links array of links for the plugins, adapted when the current plugin is found.
 *
 * @return array $links
 */
function CadNativeTest47_add_action_links( $links ) {
    $docs = '<a title="'.esc_html__( 'Setting', 'CadNativeTest47' ) .'" href="'.'options-general.php'.'">' . esc_html__( 'Setting', 'CadNativeTest47' ) . '</a>';
    array_unshift( $links, $docs );


    return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( plugin_dir_path( __FILE__ ) . 'CadNativeTest47.php'), 'CadNativeTest47_add_action_links' );






