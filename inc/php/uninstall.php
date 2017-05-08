<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Delete options on uninstall
 *
 * @since 3.3
 */
function specificfeedsicon_uninstall() {
    delete_option( 'RssFeedIconSF_settings' );
}
register_uninstall_hook( __FILE__, 'specificfeedsicon_uninstall' );
