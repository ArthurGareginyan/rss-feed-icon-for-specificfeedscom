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

    // Set default value if option is empty
    $list = array(
        'hidden_scrollto' => '0',
        'icon_size' => '60',
        'sf_icon' => '1',
        'sf_link' => '',
        'tooltip_text' => 'RSS Feed',
        'tooltip' => '',
    );
    foreach ( $list as $name => $default ) {
        $array[$name] = !empty( $options[$name] ) ? $options[$name] : $default;
    }

    // Sanitize data


    // Modify data
    $array['tooltip'] = ( $array['tooltip'] == 'on' || $array['tooltip'] == '1' || $array['tooltip'] == 'true' ) ? true : false;

    // Return the processed data
    return $array;
}
