<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render checkboxes and fields for saving settings data to database
 *
 * @since 4.2
 */
function specificfeedsicon_setting( $name, $label, $help=null, $field=null, $placeholder=null, $size=null ) {

    // Read options from BD
    $options = get_option( RFIFS_SETTINGS . '_settings' );

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
        $input = "<input type='checkbox' name='" . RFIFS_SETTINGS . "_settings[$name]' id='" . RFIFS_SETTINGS . "_settings[$name]' $checked >";
    } elseif ( $field == "field" ) {
        $input = "<input type='text' name='" . RFIFS_SETTINGS . "_settings[$name]' id='" . RFIFS_SETTINGS . "_settings[$name]' size='$size' value='$value' placeholder='$placeholder' >";
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
 * @since 4.2
 */
function specificfeedsicon_shortcode() {

    // Read options from BD
    $options = get_option( RFIFS_SETTINGS . '_settings' );

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
add_shortcode( 'specificfeeds-icon', RFIFS_PREFIX . '_shortcode' );

/**
 * Allow shortcodes in the text widget
 *
 * @since 1.5
 */
add_filter( 'widget_text', 'do_shortcode' );
