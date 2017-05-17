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
 * Render checkboxes and fields for saving settings data to BD
 *
 * @since 4.1
 */
function specificfeedsicon_setting( $name, $label, $help=null, $field=null, $placeholder=null, $size=null ) {

    // Declare variables
    $options = get_option( 'RssFeedIconSF_settings' );

    if ( !empty( $options[$name] ) ) {
        $value = esc_textarea( $options[$name] );
    } else {
        $value = "";
    }

    // Generate the table
    if ( !empty( $options[$name] ) ) {
        $checked = "checked='checked'";
    } else {
        $checked = "";
    }

    if ( $field == "check" ) {
        $input = "<input
                        type='checkbox'
                        name='RssFeedIconSF_settings[$name]'
                        id='RssFeedIconSF_settings[$name]'
                        $checked
                  >";
    } elseif ( $field == "field" ) {
        $input = "<input
                        type='text'
                        name='RssFeedIconSF_settings[$name]'
                        id='RssFeedIconSF_settings[$name]'
                        size='$size'
                        value='$value'
                        placeholder='$placeholder'
                  >";
    }

    // Put table to the variables $out and $help_out
    $out = "<tr>
                <th scope='row'>
                    $label
                </th>
                <td>
                    $input
                </td>
            </tr>";
    if ( !empty( $help ) ) {
        $help_out = "<tr>
                        <td></td>
                        <td class='help-text'>
                            $help
                        </td>
                     </tr>";
    } else {
        $help_out = "";
    }

    // Print the generated table
    echo $out . $help_out;
}

/**
 * Generate the button and make shortcode
 *
 * @since 4.1
 */
function specificfeedsicon_shortcode() {

    // Read options from BD, sanitiz data and declare variables
    $options = get_option( 'RssFeedIconSF_settings' );

    // Set link to SpecificFeeds.com link
    if ( !empty( $options['sf_link'] ) ) {
        $sf_link = $options['sf_link'];
    } else {
        $sf_link = '';
    }

    // Set icon
    if ( !empty( $options['sf_icon'] ) ) {
        $icon_src = RFIFS_URL . 'inc/img/icons/' . $options['sf_icon'] . '.png';
    } else {
        $icon_src = RFIFS_URL . 'inc/img/icons/1.png';
    }

    // Enable Tolltips
    if ( !empty( $options['tooltip'] ) ) {
        $tooltip = 'data-toggle="tooltip"';
    } else {
        $tooltip = '';
    }

    // Set text of tooltip
    if ( !empty( $options['tooltip_text'] ) ) {
        $tooltip_text = $options['tooltip_text'];
    } else {
        $tooltip_text = 'RSS Feed';
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
add_shortcode( 'specificfeeds-icon', 'specificfeedsicon_shortcode' );

/**
 * Allow shortcodes in the text widget
 *
 * @since 1.5
 */
add_filter( 'widget_text', 'do_shortcode' );
