<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback function that returns an array with the value of the plugin options
 * @return array
 */
function spacexchimp_p002_options() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p002_plugin();

    // Retrieve options from database
    $options = get_option( $plugin['settings'] . '_settings' );

    // Make the "$options" array if the plugin options data in the database is not exist
    if ( ! is_array( $options ) ) {
        $options = array();
    }

    // Create an array with options
    $array = $options;
    $list = array(
        'hidden_scrollto' => (integer) '0', // _control_hidden
        'icon_size' => (integer) '60', // _control_number
        'sf_icon' => (integer) '1', // custom
        'sf_link' => (string) '', // _control_field
        'tooltip_text' => (string) 'RSS Feed', // _control_field
        'tooltip' => (boolean) '', // _control_switch
    );
    foreach ( $list as $name => $default ) {

        // Set default value if option is empty
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;

        // Sanitize and modify by type of option
        if ( is_bool( $default ) === true ) {
            $array[$name] = ( $array[$name] == 'on' || $array[$name] == '1' || $array[$name] == 'true' ) ? true : false;
        }
    }

    // Sanitize data
    //$array['hidden_scrollto'] = esc_textarea( $array['hidden_scrollto'] );
    //$array['icon_size'] = esc_textarea( $array['icon_size'] );
    //$array['sf_icon'] = esc_textarea( $array['sf_icon'] );
    //$array['sf_link'] = esc_textarea( $array['sf_link'] );
    //$array['tooltip_text'] = esc_textarea( $array['tooltip_text'] );
    //$array['tooltip'] = esc_textarea( $array['tooltip'] );

    // Modify data


    // Return the processed data
    return $array;
}
