<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
?>
    <div class="has-sidebar sm-padded">
        <div id="post-body-content" class="has-sidebar-content">
            <div class="meta-box-sortabless">

                <form action="options.php" method="post" enctype="multipart/form-data">
                    <?php settings_fields( $plugin['settings'] . '_settings_group' ); ?>

                    <?php
                        // Put the value of the plugin options into an array for easier access
                        $options = spacexchimp_p002_options();

                        // Set default value if option is empty
                        $sf_icon = !empty( $options['sf_icon'] ) ? $options['sf_icon'] : '1';
                    ?>

                    <!-- SUBMIT -->
                    <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg button-save-top">
                        <i class="fa fa-save" aria-hidden="true"></i>
                        <span><?php _e( 'Save changes', $plugin['text'] ); ?></span>
                    </button>
                    <!-- END SUBMIT -->

                    <div class="postbox" id="options-group-button">
                        <h3 class="title"><?php _e( 'Button', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can customize the button.', $plugin['text'] ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p002_control_field( 'sf_link',
                                                                    __( 'Your SpecificFeeds URL', $plugin['text'] ),
                                                                    __( 'Enter your personal SpecificFeeds URL that you get from the <a href="https://www.specificfeeds.com" target="_blank" rel="nofollow" >SpecificFeeds.com</a> website.', $plugin['text'] ),
                                                                    'https://'
                                                                  );
                                    spacexchimp_p002_control_separator();
                                ?>
                                <tr>
                                    <th scope='row'>
                                        <?php _e( 'SpecificFeeds icon', $plugin['text'] ); ?>
                                    </th>
                                    <td>
                                        <div class="integrated-icons">
                                            <table width="300" border="0" cellspacing="15" cellpadding="0">
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="1" <?php checked( '1', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/1.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="4" <?php checked( '4', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/4.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="2" <?php checked( '2', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/2.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="5" <?php checked( '5', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/5.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="3" <?php checked( '3', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/3.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="6" <?php checked( '6', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/6.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="7" <?php checked( '7', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/7.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="8" <?php checked( '8', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/8.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="9" <?php checked( '9', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/9.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="10" <?php checked( '10', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/10.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="11" <?php checked( '11', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/11.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="12" <?php checked( '12', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/12.png'; ?>" width='48' height='48' align='absmiddle'/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="radio" name="spacexchimp_p002_settings[sf_icon]" value="13" <?php checked( '13', $sf_icon ); ?>>
                                                        <img src="<?php echo $plugin['url'] . 'inc/img/icons/13.png'; ?>" width='48' height='48' align='absmiddle'/>
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
                                        <?php _e( 'You can choose the one of the thirteen icons above.', $plugin['text'] ); ?>
                                        <?php _e( 'They are all official SpecificFeeds icons.', $plugin['text'] ); ?>
                                        <br>
                                        <?php _e( 'Note:', $plugin['text'] ); ?>
                                        <?php _e( 'Two from above icons are white color with transparent background.', $plugin['text'] ); ?>
                                    </td>
                                </tr>
                                <?php
                                    spacexchimp_p002_control_separator();
                                    spacexchimp_p002_control_number( 'icon_size',
                                                                     __( 'Button size', $plugin['text'] ),
                                                                     __( 'You can set the height of icon (in pixels).', $plugin['text'] ),
                                                                     '48'
                                                                   );
                                ?>
                            </table>
                        </div>
                    </div>

                    <div class="postbox" id="options-group-tooltip">
                        <h3 class="title"><?php _e( 'Tooltip', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p class="note"><?php _e( 'Here you can customize the tooltip that will be displayed next to button.', $plugin['text'] ); ?></p>
                            <table class="form-table">
                                <?php
                                    spacexchimp_p002_control_switch( 'tooltip',
                                                                     __( 'Tooltip', $plugin['text'] ),
                                                                     __( 'Enable a tooltip above button.', $plugin['text'] )
                                                                   );
                                    spacexchimp_p002_control_field( 'tooltip_text',
                                                                    __( 'Text of tooltip', $plugin['text'] ),
                                                                    __( 'You can set a custom text of tooltip. Leave blank to use the default text.', $plugin['text'] ),
                                                                    'RSS Feed'
                                                                  );
                                ?>
                            </table>
                        </div>
                    </div>

                    <!-- HIDDEN -->
                    <?php
                        spacexchimp_p002_control_hidden( 'hidden_scrollto',
                                                         '0'
                                                       );
                    ?>
                    <!-- END HIDDEN -->

                    <!-- SUBMIT -->
                    <input type="submit" name="submit" id="submit" class="btn btn-default btn-lg button-save-main" value="<?php _e( 'Save changes', $plugin['text'] ); ?>">
                    <!-- END SUBMIT -->

                    <!-- PREVIEW -->
                    <div class="postbox" id="preview">
                        <h3 class="title"><?php _e( 'Live preview', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <div class="preview-icon">
                                <?php echo spacexchimp_p002_generator(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- END PREVIEW -->

                    <!-- SUPPORT -->
                    <div class="postbox" id="support-addition">
                        <h3 class="title"><?php _e( 'Support', $plugin['text'] ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Every little contribution helps to cover our costs and allows us to spend more time creating things for awesome people like you to enjoy.', $plugin['text'] ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" class="btn btn-default button-labeled">
                                <span class="btn-label">
                                    <img src="<?php echo $plugin['url'] . 'inc/img/paypal.svg'; ?>" alt="PayPal">
                                </span>
                                <?php _e( 'Donate with PayPal', $plugin['text'] ); ?>
                            </a>
                            <p><?php _e( 'Thanks for your support!', $plugin['text'] ); ?></p>
                        </div>
                    </div>
                    <!-- END SUPPORT -->

                </form>

            </div>
        </div>
    </div>
<?php
