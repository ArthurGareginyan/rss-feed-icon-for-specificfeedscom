<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Generate the button and make shortcode
 */
function spacexchimp_p002_shortcode() {

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P002_SETTINGS . '_settings' );
    $sf_link = !empty( $options['sf_link'] ) ? $options['sf_link'] : '';
    $tooltip = !empty( $options['tooltip'] ) ? 'data-toggle="tooltip"' : '';
    $tooltip_text = !empty( $options['tooltip_text'] ) ? $options['tooltip_text'] : 'RSS Feed';
    if ( !empty( $options['sf_icon'] ) ) {
        $icon_src = SPACEXCHIMP_P002_URL . 'inc/img/icons/' . $options['sf_icon'] . '.png';
    } else {
        $icon_src = SPACEXCHIMP_P002_URL . 'inc/img/icons/1.png';
    }

    // Generating output code
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
