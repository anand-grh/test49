<?php // CadNative Test47 - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// register plugin settings
function CadNativeTest47_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback = ''
	);
	
	*/
	
	register_setting( 
		'CadNativeTest47_options', 
		'CadNativeTest47_options', 
		'CadNativeTest47_callback_validate_options' 
	); 
	
	/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'CadNativeTest47_section_login', 
		esc_html__('Customize Login Page', 'CadNativeTest47'), 
		'CadNativeTest47_callback_section_login', 
		'CadNativeTest47'
	);
	
	add_settings_section( 
		'CadNativeTest47_section_admin', 
		esc_html__('Customize Admin Area', 'CadNativeTest47'), 
		'CadNativeTest47_callback_section_admin', 
		'CadNativeTest47'
	);
	
	/*
	
	add_settings_field(
    	string   $id, 
		string   $title, 
		callable $callback, 
		string   $page, 
		string   $section = 'default', 
		array    $args = []
	);
	
	*/
	
	add_settings_field(
		'custom_url',
		esc_html__('Custom URL', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_text',
		'CadNativeTest47', 
		'CadNativeTest47_section_login', 
		[ 'id' => 'custom_url', 'label' => esc_html__('Custom URL for the login logo link', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_title',
		esc_html__('Custom Title', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_text',
		'CadNativeTest47', 
		'CadNativeTest47_section_login', 
		[ 'id' => 'custom_title', 'label' => esc_html__('Custom title attribute for the logo link', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_style',
		esc_html__('Custom Style', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_radio',
		'CadNativeTest47', 
		'CadNativeTest47_section_login', 
		[ 'id' => 'custom_style', 'label' => esc_html__('Custom CSS for the Login screen', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_message',
		esc_html__('Custom Message', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_textarea',
		'CadNativeTest47', 
		'CadNativeTest47_section_login', 
		[ 'id' => 'custom_message', 'label' => esc_html__('Custom text and/or markup', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_footer',
		esc_html__('Custom Footer', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_text',
		'CadNativeTest47', 
		'CadNativeTest47_section_admin', 
		[ 'id' => 'custom_footer', 'label' => esc_html__('Custom footer text', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_toolbar',
		esc_html__('Custom Toolbar', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_checkbox',
		'CadNativeTest47', 
		'CadNativeTest47_section_admin', 
		[ 'id' => 'custom_toolbar', 'label' => esc_html__('Remove new post and comment links from the Toolbar', 'CadNativeTest47') ]
	);
	
	add_settings_field(
		'custom_scheme',
		esc_html__('Custom Scheme', 'CadNativeTest47'),
		'CadNativeTest47_callback_field_select',
		'CadNativeTest47', 
		'CadNativeTest47_section_admin', 
		[ 'id' => 'custom_scheme', 'label' => esc_html__('Default color scheme for new users', 'CadNativeTest47') ]
	);
    
} 
add_action( 'admin_init', 'CadNativeTest47_register_settings' );


