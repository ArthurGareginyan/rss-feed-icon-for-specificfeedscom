<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Upgrade plugin data in the database to version 3.3
 *
 * @since 4.3
 */
function specificfeedsicon_upgrade_3_3() {

    $link = get_option( 'specificfeedsicon_link' );
    $icon = get_option( 'specificfeedsicon_icon' );

    if ( !empty( $link ) ) {

        // Get value from old setting and set it in array
        $array = array();
        $array['sf_link'] = $link;

        // Update new setting with value from old setting
        update_option( 'RssFeedIconSF_settings', $array );

        // Delete old setting
        delete_option( 'specificfeedsicon_link' );

    }
    if ( !empty( $icon ) ) {

        // Get value from old setting and set it in array
        $array = array();
        $array['sf_icon'] = $icon;

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
specificfeedsicon_upgrade_3_3();
