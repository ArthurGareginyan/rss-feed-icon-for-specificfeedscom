<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Base for the _load_scripts hook
 *
 * @since 4.5
 */
function specificfeedsicon_load_scripts_base( $options ) {

    // Put value of constants to variables for easier access
    $slug = RFIFS_SLUG;
    $prefix = RFIFS_PREFIX;
    $url = RFIFS_URL;

    // Load jQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( $prefix . '-frontend-css', $url . 'inc/css/frontend.css' );

    // JavaScript
    wp_enqueue_script( $prefix . '-frontend-js', $url . 'inc/js/frontend.js' );

    // Size of icon
    if ( !empty( $options['icon_size'] ) ) {
        $icon_size = $options['icon_size'];
    } else {
        $icon_size = '60';
    }

    // Dynamic CSS. Create CSS and injected it into the stylesheet
    $custom_css = "
                    .RssFeedIconSF {
                        
                    }
                    .RssFeedIconSF img {
                        width: " . $icon_size . "px !important;
                        height: " . $icon_size . "px !important;
                    }
                  ";
    wp_add_inline_style( $prefix . '-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.5
 */
function specificfeedsicon_load_scripts_admin( $hook ) {

    // Put value of constants to variables for easier access
    $slug = RFIFS_SLUG;
    $prefix = RFIFS_PREFIX;
    $url = RFIFS_URL;
    $settings = RFIFS_SETTINGS;

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $slug;
    if ( $settings_page != $hook ) {
        return;
    }

    // Read options from BD
    $options = get_option( $settings . '_settings' );

    // Style sheet
    wp_enqueue_style( $prefix . '-admin-css', $url . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( $prefix . '-admin-js', $url . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( $prefix . '-bootstrap-css', $url . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( $prefix . '-bootstrap-theme-css', $url . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( $prefix . '-bootstrap-js', $url . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( $prefix . '-bootstrap-checkbox-js', $url . 'inc/lib/bootstrap-checkbox.js' );

    // Call the function that contain a basis of scripts
    specificfeedsicon_load_scripts_base( $options );

}
add_action( 'admin_enqueue_scripts', RFIFS_PREFIX . '_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end of website
 *
 * @since 4.5
 */
function specificfeedsicon_load_scripts_frontend() {

    // Put value of constants to variables for easier access
    $slug = RFIFS_SLUG;
    $prefix = RFIFS_PREFIX;
    $url = RFIFS_URL;
    $settings = RFIFS_SETTINGS;

    // Read options from BD
    $options = get_option( $settings . '_settings' );

    // Call the function that contain a basis of scripts
    specificfeedsicon_load_scripts_base( $options );

    // Other libraries
    wp_enqueue_style( $prefix . '-bootstrap-tooltip-css', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( $prefix . '-bootstrap-tooltip-js', $url . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', RFIFS_PREFIX . '_load_scripts_frontend' );
