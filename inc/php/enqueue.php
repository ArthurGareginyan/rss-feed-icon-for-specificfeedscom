<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Base for the _load_scripts hook & Dymamic CSS for the _load_scripts hook
 *
 * @since 4.1
 */
function specificfeedsicon_load_scripts_base() {

    // Load JQuery library
    wp_enqueue_script( 'jquery' );

    // Style sheet
    wp_enqueue_style( 'specificfeedsicon-frontend-css', RFIFS_URL . 'inc/css/frontend.css' );

    // JavaScript
    wp_enqueue_script( 'specificfeedsicon-frontend-js', RFIFS_URL . 'inc/js/frontend.js' );

    // Read options from BD, sanitiz data and declare variables
    $options = get_option( 'RssFeedIconSF_settings' );

    // Size of icon
    if ( !empty( $options['icon_size'] ) ) {
        $icon_size = $options['icon_size'];
    } else {
        $icon_size = '60';
    }

    // Dynamic CSS
    $custom_css = "
                    .RssFeedIconSF {
                        
                    }
                    .RssFeedIconSF img {
                        width: " . $icon_size . "px !important;
                        height: " . $icon_size . "px !important;
                    }
                  ";

    // Inject dynamic CSS
    wp_add_inline_style( 'specificfeedsicon-frontend-css', $custom_css );

}

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.1
 */
function specificfeedsicon_load_scripts_admin( $hook ) {

    // Return if the page is not a settings page of this plugin
    if ( 'settings_page_rss-feed-icon-for-specificfeedscom' != $hook ) {
        return;
    }

    // Style sheet
    wp_enqueue_style( 'specificfeedsicon-admin-css', RFIFS_URL . 'inc/css/admin.css' );

    // JavaScript
    wp_enqueue_script( 'specificfeedsicon-admin-js', RFIFS_URL . 'inc/js/admin.js', array(), false, true );

    // Bootstrap library
    wp_enqueue_style( 'specificfeedsicon-bootstrap-css', RFIFS_URL . 'inc/lib/bootstrap/bootstrap.css' );
    wp_enqueue_style( 'specificfeedsicon-bootstrap-theme-css', RFIFS_URL . 'inc/lib/bootstrap/bootstrap-theme.css' );
    wp_enqueue_script( 'specificfeedsicon-bootstrap-js', RFIFS_URL . 'inc/lib/bootstrap/bootstrap.js' );

    // Other libraries
    wp_enqueue_script( 'specificfeedsicon-bootstrap-checkbox-js', RFIFS_URL . 'inc/lib/bootstrap-checkbox.js' );

    // Call the function with a basis of scripts
    specificfeedsicon_load_scripts_base();

}
add_action( 'admin_enqueue_scripts', 'specificfeedsicon_load_scripts_admin' );

/**
 * Load scripts and style sheet for front end
 *
 * @since 4.1
 */
function specificfeedsicon_load_scripts_frontend() {

    // Call the function with a basis of scripts
    specificfeedsicon_load_scripts_base();

    // Other libraries
    wp_enqueue_style( 'specificfeedsicon-bootstrap-tooltip-css', RFIFS_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.css' );
    wp_enqueue_script( 'specificfeedsicon-bootstrap-tooltip-js', RFIFS_URL . 'inc/lib/bootstrap-tooltip/bootstrap-tooltip.js' );

}
add_action( 'wp_enqueue_scripts', 'specificfeedsicon_load_scripts_frontend' );
