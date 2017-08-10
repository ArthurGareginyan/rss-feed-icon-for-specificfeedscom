<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 *
 * @since 4.7
 */
?>
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

                    <div class="postbox" id="settings">
                        <h3 class="title"><?php _e( 'Main Settings', $text ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'There you can configure this plugin.', $text ); ?></p>

                            <table class="form-table">

                                <?php specificfeedsicon_setting( 'sf_link',
                                                                 __( 'Your SpecificFeeds link', $text ),
                                                                 __( 'Enter your personal SpecificFeeds link that you get from the <a href="https://www.specificfeeds.com" target="_blank" rel="nofollow" >SpecificFeeds.com</a> website.', $text ),
                                                                 'field',
                                                                 'https://',
                                                                 '50'
                                                                );
                                ?>

                                <tr>
                                    <th scope='row'>
                                        <?php _e( 'SpecificFeeds icon', $text ); ?>
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
                                        <?php _e( 'Note: Two from above icons are white color with transparent background.', $text ); ?>
                                    </td>
                                </tr>

                                <?php specificfeedsicon_setting( 'icon_size',
                                                                 __( 'Icon size', $text ),
                                                                 __( 'You can set the height of icon (in px).', $text ),
                                                                 'field',
                                                                 '48',
                                                                 '2'
                                                                );
                                ?>

                                <?php specificfeedsicon_setting( 'tooltip',
                                                                 __( 'Tooltip', $text ),
                                                                 __( 'Enable a tooltip above button.', $text ),
                                                                 'check'
                                                                );
                                ?>

                                <?php specificfeedsicon_setting( 'tooltip_text',
                                                                 __( 'Text of tooltip', $text ),
                                                                 __( 'You can set a custom text of tooltip. Leave blank to use the default text.', $text ),
                                                                 'field',
                                                                 'RSS Feed',
                                                                 '50'
                                                                );
                                ?>

                            </table>

                            <?php submit_button( __( 'Save changes', $text ), 'primary', 'submit', true ); ?>

                        </div>
                    </div>

                    <div class="postbox" id="preview">
                        <h3 class="title"><?php _e( 'Live Preview', $text ); ?></h3>
                        <div class="inside">
                            <div class="preview-icon">
                                <?php echo specificfeedsicon_shortcode(); ?>
                            </div>
                        </div>
                    </div>

                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $text ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', $text ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default btn-labeled">
                                                        <span class="btn-label">
                                                            <img src="<?php echo RFIFS_URL . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                                        </span>
                                                        <?php _e( 'Donate with PayPal', $text ); ?>
                                                </a>
                            <p><?php _e( 'Thanks for your support!', $text ); ?></p>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
<?php