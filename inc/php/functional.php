<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the button
 * @return string
 */
function spacexchimp_p002_generator() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p002_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p002_options();

    // Declare variables
    $icon_src = $plugin['url'] . 'inc/img/icons/' . $options['sf_icon'] . '.png';

    // Generate tolltips
    if ( $options['tooltip'] === true ) {
        $tooltip = 'data-toggle="tooltip"';
    } else {
        $tooltip = ''; // Empty value
    }

    // Generate button
    return '<a
                href="' . $options['sf_link'] . '"
                ' . $tooltip . '
                title="' . $options['tooltip_text'] . '"
                target="_blank"
                rel="nofollow"
                class="RssFeedIconSF"
            >
            <img
                src="' . $icon_src . '"
                alt="' . $options['tooltip_text'] . '"
            />
            </a>';
}

/**
 * Create the shortcode "[specificfeeds-icon]"
 */
add_shortcode( 'specificfeeds-icon', 'spacexchimp_p002_generator' );

/**
 * Allow shortcodes in the text widget
 */
add_filter( 'widget_text', 'do_shortcode' );
