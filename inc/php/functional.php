<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Upgrade settings
 *
 * @since 3.3
 */
function specificfeedsicon_upgrade_settings() {

    $array = array();

    if ( !empty( get_option( 'specificfeedsicon_link' ) ) ) {

        // Get value from old setting and set it in array
        $array['sf_link'] = get_option( 'specificfeedsicon_link' );

        // Update new setting with value from old setting
        update_option( 'RssFeedIconSF_settings', $array );

        // Delete old setting
        delete_option( 'specificfeedsicon_link' );

    }
    if ( !empty( get_option( 'specificfeedsicon_icon' ) ) ) {

        // Get value from old setting and set it in array
        $array['sf_icon'] = get_option( 'specificfeedsicon_icon' );

        // Make array with numbers
        $array_number = array(
                              
                              'first'    => '1',
                              'second'   => '2',
                              'third'    => '3',
                              'four'     => '4',
                              'five'     => '5',
                              'six'      => '6',
                              'seven'    => '7',
                              'eight'    => '8',
                              'nine'     => '9',
                              'ten'      => '10',
                              'eleven'   => '11',
                              'twelve'   => '12',
                              'thirteen' => '13'
                              
                              );
        $array['sf_icon'] = $array_number[ $array['sf_icon'] ];

        // Update new setting with value from old setting
        update_option( 'RssFeedIconSF_settings', $array );

        // Delete old setting
        delete_option( 'specificfeedsicon_icon' );

    }

}
specificfeedsicon_upgrade_settings();

/**
 * ShortCode SpecificFeeds
 *
 * @since 3.3
 */
function specificfeedsicon_shortcode() {

    // Set variables
    $options = get_option( 'RssFeedIconSF_settings' );

    if ( !empty( $options['sf_link'] ) ) {
        $sf_link = $options['sf_link'];
    } else {
        $sf_link = '';
    }

    if ( !empty( $options['sf_icon'] ) ) {
        $icon_src = RFIFS_URL . 'inc/img/icons/' . $options['sf_icon'] . '.png';
    } else {
        $icon_src = RFIFS_URL . 'inc/img/icons/1.png';
    }

    if ( !empty( $options['icon_size'] ) ) {
        $icon_size = $options['icon_size'];
    } else {
        $icon_size = '48';
    }

    // Generating output code
    return '<a
                href="' . $sf_link . '"
                target="_blank"
                rel="nofollow"
            >
            <img
                src="' . $icon_src . '"
                width="' . $icon_size . '"
                height="' . $icon_size . '"
                title="RSS Feed"
                style="border: none;"
            />
            </a>';
}
add_shortcode( 'specificfeeds-icon', 'specificfeedsicon_shortcode' );

/**
 * Allow shortcodes in the text widget
 *
 * @since 1.5
 */
add_filter( 'widget_text', 'do_shortcode' );
