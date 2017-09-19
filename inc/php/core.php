<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Register text domain
 */
function spacexchimp_p002_textdomain() {
    load_plugin_textdomain( SPACEXCHIMP_P002_TEXT, false, SPACEXCHIMP_P002_DIR . '/languages/' );
}
add_action( 'init', 'spacexchimp_p002_textdomain' );

/**
 * Print direct link to plugin admin page
 *
 * Fetches array of links generated by WP Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the plugin admin page
 */
function spacexchimp_p002_settings_link( $links ) {
    $page = '<a href="' . admin_url( 'admin.php?page=spacexchimp/' . SPACEXCHIMP_P002_SLUG ) .'">' . __( 'Settings', SPACEXCHIMP_P002_TEXT ) . '</a>';
    array_unshift( $links, $page );
    return $links;
}
add_filter( 'plugin_action_links_' . SPACEXCHIMP_P002_BASE, 'spacexchimp_p002_settings_link' );

/**
 * Print additional links to plugin meta row
 */
function spacexchimp_p002_plugin_row_meta( $links, $file ) {

    if ( strpos( $file, SPACEXCHIMP_P002_SLUG . '.php' ) !== false ) {

        $new_links = array(
                           'donate' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank"><span class="dashicons dashicons-heart"></span> ' . __( 'Donate', SPACEXCHIMP_P002_TEXT ) . '</a>'
                           );
        $links = array_merge( $links, $new_links );
    }

    return $links;
}
add_filter( 'plugin_row_meta', 'spacexchimp_p002_plugin_row_meta', 10, 2 );

/**
 * Register brand menu item in the Admin Menu
 */
function spacexchimp_p002_register_admin_menu() {

    // Return if the brand menu item is already existed
    if ( !empty ( $GLOBALS['admin_page_hooks']['spacexchimp'] ) ) return;

    $page_title = 'Space X-Chimp';
    $menu_title = 'Space X-Chimp';
    $capability = 'manage_options';
    $menu_slug  = 'spacexchimp';
    $function   = null;
    $icon_url   = 'dashicons-star-filled';
    $position   = 66;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}
add_action( 'admin_menu', 'spacexchimp_p002_register_admin_menu' );

/**
 * Register plugin's submenu item in the brand menu item
 */
function spacexchimp_p002_register_submenu_page() {

    $parent_slug = 'spacexchimp';
    $page_title  = SPACEXCHIMP_P002_NAME;
    $menu_title  = __( 'SpecificFeeds Icon', SPACEXCHIMP_P002_TEXT );
    $capability  = 'manage_options';
    $menu_slug   = 'spacexchimp/' . SPACEXCHIMP_P002_SLUG;
    $function    = 'spacexchimp_p002_render_submenu_page';

    add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
}
add_action( 'admin_menu', 'spacexchimp_p002_register_submenu_page' );

/**
 * Remove the 'Space X-Chimp' sub menu item in the brand menu item
 */
function spacexchimp_p002_remove_submenu_item() {

    // Read global variable
    global $submenu;

    if ( isset( $submenu['spacexchimp'] ) ) {
        unset( $submenu['spacexchimp'][0] );
    }
}
add_action( 'admin_menu', 'spacexchimp_p002_remove_submenu_item' );

/**
 * Register settings
 */
function spacexchimp_p002_register_settings() {
    register_setting( SPACEXCHIMP_P002_SETTINGS . '_settings_group', SPACEXCHIMP_P002_SETTINGS . '_settings' );
    register_setting( SPACEXCHIMP_P002_SETTINGS . '_settings_group_si', SPACEXCHIMP_P002_SETTINGS . '_service_info' );
}
add_action( 'admin_init', 'spacexchimp_p002_register_settings' );

/**
 * Branded footer text on the plugin's settings page
 */
function spacexchimp_p002_admin_footer_text() {

    // Get current screen data
    $current_screen = get_current_screen();

    // Return if the page is not a settings page of this plugin
    $settings_page = 'space-x-chimp_page_spacexchimp/' . SPACEXCHIMP_P002_SLUG;
    if ( $settings_page != $current_screen->id ) return;

    // Filter footer text
    function spacexchimp_p002_new_admin_footer_text() {
        $year = date('Y');
        return "Copyright &copy; " . $year . " <a href='https://www.spacexchimp.com' target='_blank'>Space X-Chimp</a> Studio | Click <a href='https://www.spacexchimp.com/store.html' target='_blank'>here</a> to see my other products.";
    }
    add_filter( 'admin_footer_text', 'spacexchimp_p002_new_admin_footer_text', 11 );
}
add_action( 'current_screen', 'spacexchimp_p002_admin_footer_text' );
