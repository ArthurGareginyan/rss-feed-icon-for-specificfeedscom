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
 * @since 4.2
 */
function specificfeedsicon_load_scripts_base( $options ) {

    // Load JQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( RFIFS_PREFIX . '-frontend-css', RFIFS_URL . 'inc/css/frontend.css' );

    // JavaScript
    wp_enqueue_script( RFIFS_PREFIX . '-frontend-js', RFIFS_URL . 'inc/js/frontend.js' );

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
    wp_add_inline_style( RFIFS_PREFIX . '-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.2
 */
function specificfeedsicon_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . RFIFS_SLUG;
    if ( $settings_page != $hook ) {
        return;
    }

    // Read options from BD
    $options = get_option( RFIFS_SETTINGS . '_settings' );

    // Style sheet
    wp_enqueue_style( RFIFS_PREFIX . '-admin-css', RFIFS_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( RFIFS_PREFIX . '-admin-js', RFIFS_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( RFIFS_PREFIX . '-bootstrap-css', RFIFS_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( RFIFS_PREFIX . '-bootstrap-theme-css', RFIFS_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( RFIFS_PREFIX . '-bootstrap-js', RFIFS_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( RFIFS_PREFIX . '-bootstrap-checkbox-js', RFIFS_URL . 'inc/lib/bootstrap-checkbox.js' );

    // Call the function that contain a basis of scripts
    specificfeedsicon_load_scripts_base( $options );

}
add_action( 'admin_enqueue_scripts', RFIFS_PREFIX . '_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end of website
 *
 * @since 4.2
 */
function specificfeedsicon_load_scripts_frontend() {

    // Read options from BD
    $options = get_option( RFIFS_SETTINGS . '_settings' );

    // Call the function that contain a basis of scripts
    specificfeedsicon_load_scripts_base( $options );

    // Other libraries
    wp_enqueue_style( RFIFS_PREFIX . '-bootstrap-tooltip-css', RFIFS_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( RFIFS_PREFIX . '-bootstrap-tooltip-js', RFIFS_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', RFIFS_PREFIX . '_load_scripts_frontend' );
