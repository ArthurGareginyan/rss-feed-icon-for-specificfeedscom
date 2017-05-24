<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Delete options on uninstall
 *
 * @since 4.2
 */
function specificfeedsicon_uninstall() {
    delete_option( RFIFS_SETTINGS . '_settings' );
}
register_uninstall_hook( __FILE__, RFIFS_PREFIX . '_uninstall' );
