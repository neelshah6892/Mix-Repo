<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "section".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'section', 'section_settings_field' );
}

/**
 * Function Name:section_settings_field Function to handle new input type "section".
 *
 * @param  string $name     settings provided when using the input type "section".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function section_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$title      = isset( $settings['title'] ) ? $settings['title'] : '';
	$output     = '<div class="section-title">';
	$output    .= $title;
	$output    .= '</div>';
	return $output;
}
