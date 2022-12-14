<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "textarea".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'textarea', 'textarea_settings_field' );
}

/**
 * Function Name:textarea_settings_field Function to handle new input type "textarea".
 *
 * @param  string $name     settings provided when using the input type "textarea".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function textarea_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$type       = isset( $settings['type'] ) ? $settings['type'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	$output     = '<p><textarea id="smile_' . $input_name . '" class="form-control smile-input smile-' . $type . ' ' . $input_name . ' ' . $type . ' ' . $class . '" name="' . $input_name . '" rows="6" cols="6">' . stripslashes( $value ) . '</textarea></p>';
	return $output;
}
