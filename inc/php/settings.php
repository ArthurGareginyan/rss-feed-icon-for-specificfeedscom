<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab
 *
 * @since 4.4
 */
?>
    <!-- SIDEBAR -->
    <div class="inner-sidebar">
        <div id="side-sortables" class="meta-box-sortabless ui-sortable">

            <div id="about" class="postbox">
                <h3 class="title"><?php _e( 'About', RFIFS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'This plugin allows you to easily add the RSS feed icon by SpecificFeeds.com in any place on your website.', RFIFS_TEXT ); ?></p>
                    <p><a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow">SpecificFeeds.com</a><?php _e( ' allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', RFIFS_TEXT ); ?></p>
                    <p class="version"><?php _e( 'Version', RFIFS_TEXT ); ?> <?php echo RFIFS_VERSION; ?></p>
                </div>
            </div>

            <div id="support" class="postbox">
                <h3 class="title"><?php _e( 'Support', RFIFS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', RFIFS_TEXT ); ?></p>
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', RFIFS_TEXT ); ?></a>
                    <p><?php _e( 'Thanks for your support!', RFIFS_TEXT ); ?></p>
                </div>
            </div>

            <div id="help" class="postbox">
                <h3 class="title"><?php _e( 'Help', RFIFS_TEXT ); ?></h3>
                <div class="inside">
                    <p><?php _e( 'Got something to say? Need help?', RFIFS_TEXT ); ?></p>
                    <p><a href="mailto:arthurgareginyan@gmail.com?subject=<?php echo RFIFS_NAME; ?>">arthurgareginyan@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>
    <!-- END-SIDEBAR -->

    <!-- FORM -->
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( RFIFS_SETTINGS . '_settings_group' ); ?>

                    <?php
                        // Get options from the database
                        $options = get_option( RFIFS_SETTINGS . '_settings' );

                        // Set default value if option is empty
                        $sf_icon = !empty( $options['sf_icon'] ) ? $options['sf_icon'] : '1';
                    ?>

                    <div class="postbox" id="Settings">
                        <h3 class="title"><?php _e( 'Main Settings', RFIFS_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', RFIFS_TEXT ); ?></p>

                            <table class="form-table">

                                <?php specificfeedsicon_setting( 'sf_link',
                                                                 __( 'Your SpecificFeeds link', RFIFS_TEXT ),
                                                                 __( 'Enter your personal SpecificFeeds link that you get from the <a href="https://www.specificfeeds.com" target="_blank" rel="nofollow" >SpecificFeeds.com</a> website.', RFIFS_TEXT ),
                                                                 'field',
                                                                 'http://',
                                                                 '50'
                                                                );
                                ?>

                                <tr>
                                    <th scope='row'>
                                        <?php _e( 'SpecificFeeds icon', RFIFS_TEXT ); ?>
                                    </th>
                                    <td>
                                        <div class="integrated-icons">
                                            <table width="300" border="0" cellspacing="15" cellpadding="0">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="1" <?php checked( '1', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/1.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="4" <?php checked( '4', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/4.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="2" <?php checked( '2', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/2.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="5" <?php checked( '5', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/5.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="3" <?php checked( '3', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/3.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="6" <?php checked( '6', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/6.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="7" <?php checked( '7', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/7.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="8" <?php checked( '8', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/8.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="9" <?php checked( '9', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/9.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="10" <?php checked( '10', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/10.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="11" <?php checked( '11', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/11.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="12" <?php checked( '12', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/12.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="13" <?php checked( '13', $sf_icon ); ?>>
                                                        <img src="<?php echo RFIFS_URL . 'inc/img/icons/13.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td class='help-text upload-help-text'>
                                        <?php _e( 'Note: Two from above icons are white color with transparent background.', RFIFS_TEXT ); ?>
                                    </td>
                                </tr>

                                <?php specificfeedsicon_setting( 'icon_size',
                                                                 __( 'Icon size', RFIFS_TEXT ),
                                                                 __( 'You can set the height of icon (in px).', RFIFS_TEXT ),
                                                                 'field',
                                                                 '48',
                                                                 '2'
                                                                );
                                ?>

                                <?php specificfeedsicon_setting( 'tooltip',
                                                                 __( 'Tooltip', RFIFS_TEXT ),
                                                                 __( 'Enable/disable a tooltip above button.', RFIFS_TEXT ),
                                                                 'check'
                                                                );
                                ?>

                                <?php specificfeedsicon_setting( 'tooltip_text',
                                                                 __( 'Text of tooltip', RFIFS_TEXT ),
                                                                 __( 'You can set a custom text of tooltip. Leave blank to use the default text.', RFIFS_TEXT ),
                                                                 'field',
                                                                 'RSS Feed',
                                                                 '50'
                                                                );
                                ?>

                            </table>

                            <?php submit_button( __( 'Save Changes', RFIFS_TEXT ), 'primary', 'submit', true ); ?>

                        </div>
                    </div>

                    <div class="postbox" id="Preview">
                        <h3 class="title"><?php _e( 'Preview', RFIFS_TEXT ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Click the "Save Changes" button to update this preview.', RFIFS_TEXT ); ?></p>
                            <br>
                            <div class="preview-icon">
                                <?php echo specificfeedsicon_shortcode(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', RFIFS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', RFIFS_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="additional-button paypal"><?php _e( 'Donate with PayPal', RFIFS_TEXT ); ?></a>
                            <p><?php _e( 'Thanks for your support!', RFIFS_TEXT ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- END-FORM -->
<?php
