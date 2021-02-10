<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the button and make shortcode
 * @return string
 */
function spacexchimp_p002_shortcode() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p002_plugin();

    // Retrieve options from database and declare variables
    $options = get_option( $plugin['settings'] . '_settings' );
    $sf_link = !empty( $options['sf_link'] ) ? $options['sf_link'] : '';
    $tooltip = !empty( $options['tooltip'] ) ? 'data-toggle="tooltip"' : '';
    $tooltip_text = !empty( $options['tooltip_text'] ) ? $options['tooltip_text'] : 'RSS Feed';
    if ( ! empty( $options['sf_icon'] ) ) {
        $icon_src = $plugin['url'] . 'inc/img/icons/' . $options['sf_icon'] . '.png';
    } else {
        $icon_src = $plugin['url'] . 'inc/img/icons/1.png';
    }

    // Generate button
    return '<a
                href="' . $sf_link . '"
                ' . $tooltip . '
                title="' . $tooltip_text . '"
                target="_blank"
                rel="nofollow"
                class="RssFeedIconSF"
            >
            <img
                src="' . $icon_src . '"
                alt="' . $tooltip_text . '"
            />
            </a>';
}
add_shortcode( 'specificfeeds-icon', 'spacexchimp_p002_shortcode' );

/**
 * Allow shortcodes in the text widget
 */
add_filter( 'widget_text', 'do_shortcode' );
