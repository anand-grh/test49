<?php // CadNative Test47 - Settings Callbacks



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {
	
	exit;
	
}



// callback: login section
function CadNativeTest47_callback_section_login() {
	
	echo '<p>'. esc_html__('These settings enable you to customize the WP Login screen.', 'CadNativeTest47') .'</p>';
	
}



// callback: admin section
function CadNativeTest47_callback_section_admin() {
	
	echo '<p>'. esc_html__('These settings enable you to customize the WP Admin Area.', 'CadNativeTest47') .'</p>';
	
}



// callback: text field
function CadNativeTest47_callback_field_text( $args ) {
	
	$options = get_option( 'CadNativeTest47_options', CadNativeTest47_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$value = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	echo '<input id="CadNativeTest47_options_'. $id .'" name="CadNativeTest47_options['. $id .']" type="text" size="40" value="'. $value .'"><br />';
	echo '<label for="CadNativeTest47_options_'. $id .'">'. $label .'</label>';
	
}



// radio field options
function CadNativeTest47_options_radio() {
	
	return array(
		
		'enable'  => esc_html__('Enable custom styles', 'CadNativeTest47'),
		'disable' => esc_html__('Disable custom styles', 'CadNativeTest47')
		
	);
	
}



// callback: radio field
function CadNativeTest47_callback_field_radio( $args ) {
	
	$options = get_option( 'CadNativeTest47_options', CadNativeTest47_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$radio_options = CadNativeTest47_options_radio();
	
	foreach ( $radio_options as $value => $label ) {
		
		$checked = checked( $selected_option === $value, true, false );
		
		echo '<label><input name="CadNativeTest47_options['. $id .']" type="radio" value="'. $value .'"'. $checked .'> ';
		echo '<span>'. $label .'</span></label><br />';
		
	}
	
}



// callback: textarea field
function CadNativeTest47_callback_field_textarea( $args ) {
	
	$options = get_option( 'CadNativeTest47_options', CadNativeTest47_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$allowed_tags = wp_kses_allowed_html( 'post' );
	
	$value = isset( $options[$id] ) ? wp_kses( stripslashes_deep( $options[$id] ), $allowed_tags ) : '';
	
	echo '<textarea id="CadNativeTest47_options_'. $id .'" name="CadNativeTest47_options['. $id .']" rows="5" cols="50">'. $value .'</textarea><br />';
	echo '<label for="CadNativeTest47_options_'. $id .'">'. $label .'</label>';
	
}



// callback: checkbox field
function CadNativeTest47_callback_field_checkbox( $args ) {
	
	$options = get_option( 'CadNativeTest47_options', CadNativeTest47_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$checked = isset( $options[$id] ) ? checked( $options[$id], 1, false ) : '';
	
	echo '<input id="CadNativeTest47_options_'. $id .'" name="CadNativeTest47_options['. $id .']" type="checkbox" value="1"'. $checked .'> ';
	echo '<label for="CadNativeTest47_options_'. $id .'">'. $label .'</label>';
	
}



// select field options
function CadNativeTest47_options_select() {
	
	return array(
		
		'default'   => esc_html__('Default',   'CadNativeTest47'),
		'light'     => esc_html__('Light',     'CadNativeTest47'),
		'blue'      => esc_html__('Blue',      'CadNativeTest47'),
		'coffee'    => esc_html__('Coffee',    'CadNativeTest47'),
		'ectoplasm' => esc_html__('Ectoplasm', 'CadNativeTest47'),
		'midnight'  => esc_html__('Midnight',  'CadNativeTest47'),
		'ocean'     => esc_html__('Ocean',     'CadNativeTest47'),
		'sunrise'   => esc_html__('Sunrise',   'CadNativeTest47'),
		
	);
	
}



// callback: select field
function CadNativeTest47_callback_field_select( $args ) {
	
	$options = get_option( 'CadNativeTest47_options', CadNativeTest47_options_default() );
	
	$id    = isset( $args['id'] )    ? $args['id']    : '';
	$label = isset( $args['label'] ) ? $args['label'] : '';
	
	$selected_option = isset( $options[$id] ) ? sanitize_text_field( $options[$id] ) : '';
	
	$select_options = CadNativeTest47_options_select();
	
	echo '<select id="CadNativeTest47_options_'. $id .'" name="CadNativeTest47_options['. $id .']">';
	
	foreach ( $select_options as $value => $option ) {
		
		$selected = selected( $selected_option === $value, true, false );
		
		echo '<option value="'. $value .'"'. $selected .'>'. $option .'</option>';
		
	}
	
	echo '</select> <label for="CadNativeTest47_options_'. $id .'">'. $label .'</label>';
	
}


