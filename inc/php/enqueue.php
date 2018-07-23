<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Callback for the dynamic JavaScript
 */
function spacexchimp_p002_load_scripts_dynamic_js( $options, $prefix ) {

    // Get settings and put them in variables
    $plugin_url = SPACEXCHIMP_P002_URL;

    // Create an array (JS object) with all the settings
    $script_params = array(
                           'plugin_url' => $plugin_url
                           );

    // Inject the array into the JavaScript file
    wp_localize_script( $prefix . '-admin-js', $prefix . '_scriptParams', $script_params );
}

/**
 * Callback for the dynamic CSS
 */
function spacexchimp_p002_load_scripts_dynamic_css( $options, $prefix ) {

    // Get settings and put them in variables
    $icon_size = !empty( $options['icon_size'] ) ? $options['icon_size'] : '60';

    // Create an array with all the settings (CSS code)
    $custom_css = "
                    .RssFeedIconSF {

                    }
                    .RssFeedIconSF img {
                        width: " . $icon_size . "px !important;
                        height: " . $icon_size . "px !important;
                    }
                  ";

    // Inject the array into the stylesheet
    wp_add_inline_style( $prefix . '-frontend-css', $custom_css );
}

/**
 * Load scripts and style sheet for settings page
 */
function spacexchimp_p002_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = SPACEXCHIMP_P002_SLUG;
    $prefix = SPACEXCHIMP_P002_PREFIX;
    $url = SPACEXCHIMP_P002_URL;
    $settings = SPACEXCHIMP_P002_SETTINGS;
    $version = SPACEXCHIMP_P002_VERSION;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) return;

    // Read options from database
    $options = get_option( $settings . '_settings' );

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css', array(), $version, 'all' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css', array(), $version, 'all' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js', array(), $version, false );

    // Font Awesome library
    wp_enqueue_style( $prefix . '-font-awesome-css', $url . 'inc/lib/font-awesome/css/font-awesome.css', array(), $version, 'screen' );

    // Other libraries
    wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js', array(), $version, false );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css', array(), $version, 'all' );
    wp_enqueue_style( $prefix . '-frontend-css', $url . 'inc/css/frontend.css', array(), $version, 'all' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), $version, true );
    wp_enqueue_script( $prefix . '-frontend-js', $url . 'inc/js/frontend.js', array(), $version, false );

    // Call the function that contains the dynamic JavaScript
    spacexchimp_p002_load_scripts_dynamic_js( $options, $prefix );

    // Call the function that contains the dynamic CSS
    spacexchimp_p002_load_scripts_dynamic_css( $options, $prefix );

}
add_action( 'admin_enqueue_scripts', 'spacexchimp_p002_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end of website
 */
function spacexchimp_p002_load_scripts_frontend() {

    // Put value of constants to variables for easier access
    $prefix = SPACEXCHIMP_P002_PREFIX;
    $url = SPACEXCHIMP_P002_URL;
    $settings = SPACEXCHIMP_P002_SETTINGS;
    $version = SPACEXCHIMP_P002_VERSION;

    // Read options from database
    $options = get_option( $settings . '_settings' );

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Other libraries
    wp_enqueue_style( $prefix . '-bootstrap-tooltip-css', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css', array(), $version, 'all' );
    wp_enqueue_script( $prefix . '-bootstrap-tooltip-js', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js', array(), $version, false );

    // Style sheet
    wp_enqueue_style( $prefix . '-frontend-css', $url . 'inc/css/frontend.css', array(), $version, 'all' );

    // JavaScript
    wp_enqueue_script( $prefix . '-frontend-js', $url . 'inc/js/frontend.js', array(), $version, false );

    // Call the function that contains the dynamic CSS
    spacexchimp_p002_load_scripts_dynamic_css( $options, $prefix );

}
add_action( 'wp_enqueue_scripts', 'spacexchimp_p002_load_scripts_frontend' );
