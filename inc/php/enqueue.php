<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Load scripts and style sheet for settings page
 *
 * @since 4.0
 */
function specificfeedsicon_load_scripts_admin($hook) {

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

}
add_action( 'admin_enqueue_scripts', 'specificfeedsicon_load_scripts_admin' );
