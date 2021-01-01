<?php // CadNative Test47 - Admin Menu



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// add sub-level administrative menu
function CadNativeTest47_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug, 
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
		esc_html__('CadNative Test47 Settings', 'CadNativeTest47'),
		esc_html__('CadNative Test47', 'CadNativeTest47'),
		'manage_options',
		'CadNativeTest47',
		'CadNativeTest47_display_settings_page'
	);
	
}
add_action( 'admin_menu', 'CadNativeTest47_add_sublevel_menu' );



// add top-level administrative menu
function CadNativeTest47_add_toplevel_menu() {
	
	/* 
	
	add_menu_page(
		string   $page_title, 
		string   $menu_title, 
		string   $capability, 
		string   $menu_slug, 
		callable $function = '', 
		string   $icon_url = '', 
		int      $position = null 
	)
	
	*/
	
	add_menu_page(
		esc_html__('CadNative Test47 Settings', 'CadNativeTest47'),
		esc_html__('CadNative Test47', 'CadNativeTest47'),
		'manage_options',
		'CadNativeTest47_LogerEmployee_manage',
		'CadNativeTest47_LogerEmployee_manage',
		'dashicons-admin-generic',
		null
	);
	
}
add_action( 'admin_menu', 'CadNativeTest47_add_toplevel_menu' );
