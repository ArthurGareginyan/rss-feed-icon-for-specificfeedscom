<?php

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
    $array['hidden_scrollto'] = !empty( $options['hidden_scrollto'] ) ? $options['hidden_scrollto'] : '0';
    $array['icon_size'] = !empty( $options['icon_size'] ) ? $options['icon_size'] : '60';
    $array['sf_link'] = !empty( $options['sf_link'] ) ? $options['sf_link'] : '';
    $array['tooltip_text'] = !empty( $options['tooltip_text'] ) ? $options['tooltip_text'] : 'RSS Feed';

    // Sanitize data


    // Modify data


    // Return the processed data
    return $array;
}
