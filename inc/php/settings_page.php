<?php

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 3.3
 */
function specificfeedsicon_render_submenu_page() {

	// Declare variables
	$options = get_option( 'RssFeedIconSF_settings' );

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'RSS Feed Icon for SpecificFeeds.com', RFIFS_TEXT ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur Gareginyan</a>', RFIFS_TEXT ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', RFIFS_TEXT ); ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add the RSS feed icon by SpecificFeeds.com in any place on your website.', RFIFS_TEXT ); ?></p>
                            <p><a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow">SpecificFeeds.com</a><?php _e( ' allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', RFIFS_TEXT ); ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', RFIFS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'Got something to say? Need help?', RFIFS_TEXT ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com?subject=RSS Feed Icon for SpecificFeeds.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', RFIFS_TEXT ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'I\'m an independent developer, without a regular income, so every little contribution helps cover my costs and lets me spend more time building things for people like you to enjoy.', RFIFS_TEXT ); ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('../img/donate.png', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', RFIFS_TEXT ); ?></p>
                        </div>
                    </div>

                    <a href="//www.iconfinder.com/?ref=ArthurGareginyan" target="_blank" rel="nofollow">
                        <img style="border:0px" src="<?php echo plugins_url('../img/banner.png', __FILE__); ?>" width="280" height="180" alt="">
                    </a>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="specificfeedsicon-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'specificfeedsicon_settings_group' ); ?>

                            <div class="postbox" id="Settings">
                                <h3 class="title"><?php _e( 'Settings', RFIFS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p class="description"></p>

                                    <table class="form-table">

                                        <tr valign='top'>
                                            <th scope='row'>
                                                <?php _e('Your SpecificFeeds link', RFIFS_TEXT ); ?>
                                            </th>
                                            <td>
                                                <?php
                                                    if ( !empty( $options['sf_link'] ) ) {
                                                        $sf_link = $options['sf_link'];
                                                    } else {
                                                        $sf_link = '';
                                                    }
                                                ?>
                                                <input type="text" name="RssFeedIconSF_settings[sf_link]" id="RssFeedIconSF_settings[sf_link]" placeholder="http://" value="<?php echo $sf_link; ?>" size="50" >
                                            </td>
                                        </tr>
                                        <tr valign='top'>
                                            <td>
                                            </td>
                                            <td class='help-text'>
                                                <?php _e( 'Enter your personal SpecificFeeds link that you get from the <a href="https://www.specificfeeds.com" target="_blank" rel="nofollow" >SpecificFeeds.com</a> website.', RFIFS_TEXT ); ?>
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th scope='row'>
                                                <?php _e( 'SpecificFeeds icon', RFIFS_TEXT ); ?>
                                            </th>
                                            <td>

                                                <?php
                                                    if ( !empty( $options['sf_icon'] ) ) {
                                                        $sf_icon = $options['sf_icon'];
                                                    } else {
                                                        $sf_icon = '1';
                                                    }
                                                ?>

                                                <div class="integrated-icons">
                                                    <table width="50%" border="0" cellspacing="15" cellpadding="0">
                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="1" <?php checked( '1', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/1.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="4" <?php checked( '4', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/4.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="2" <?php checked( '2', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/2.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="5" <?php checked( '5', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/5.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="3" <?php checked( '3', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/3.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="6" <?php checked( '6', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/6.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="7" <?php checked( '7', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/7.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="8" <?php checked( '8', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/8.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="9" <?php checked( '9', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/9.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="10" <?php checked( '10', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/10.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="11" <?php checked( '11', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/11.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="12" <?php checked( '12', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/12.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <input type="radio" name="RssFeedIconSF_settings[sf_icon]" value="13" <?php checked( '13', $sf_icon ); ?>>
                                                                <img src="<?php echo plugins_url( '../img/icons/13.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr valign='top'>
                                            <td>
                                            </td>
                                            <td class='help-text upload-help-text'>
                                                <?php _e( 'Note: Two from above icons are white color with transparent background.', RFIFS_TEXT ); ?>
                                            </td>
                                        </tr>

                                        <tr valign='top'>
                                            <th scope='row'>
                                                <?php _e('Size of icon', RFIFS_TEXT); ?>
                                            </th>
                                            <td>

                                                <?php
                                                    if ( !empty( $options['icon_size'] ) ) {
                                                        $icon_size = $options['icon_size'];
                                                    } else {
                                                        $icon_size = '48';
                                                    }
                                                ?>

                                                <input type="text" name="RssFeedIconSF_settings[icon_size]" id="RssFeedIconSF_settings[icon_size]" value="<?php echo $icon_size; ?>" placeholder="48" size="3">
                                            </td>
                                        </tr>
                                        <tr valign='top'>
                                            <td>
                                            </td>
                                            <td class='help-text'>
                                                <?php _e( 'You can set the height of icon (in px).', RFIFS_TEXT ); ?>
                                            </td>
                                        </tr>

                                    </table>

                                    <?php submit_button( __( 'Save Changes', RFIFS_TEXT ), 'primary', 'submit', true ); ?>

                                </div>
                            </div>

                            <div class="postbox" id="Preview">
                                <h3 class="title"><?php _e( 'Preview', RFIFS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p class="description"><?php _e( 'Click "Save Changes" to update this preview.', RFIFS_TEXT ); ?></p>
                                    <br>
                                    <div class="preview-icon">
                                        <?php echo specificfeedsicon_shortcode(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="postbox" id="Using">
                                <h3 class="title"><?php _e( 'Using', RFIFS_TEXT ); ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You have several methods for display the SpecificFeeds.com icon (further just "icon") on your website. But first, enter your personal SpecificFeeds link and choose preferred icon, then click "Save Changes".', RFIFS_TEXT ); ?></p>
                                    <p><?php _e( '<b>A)</b> For add the icon inside a post from WP Post/Page Editor use the following shortcode:', RFIFS_TEXT ); ?></p>
                                    <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                    <p><?php _e( '<b>B)</b> For add the icon to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', RFIFS_TEXT ); ?></p>
                                    <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                    <p><?php _e( '<b>C)</b> For add the button directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the button) in your theme files:', RFIFS_TEXT ); ?></p>
                                    <p><?php highlight_string('<?php echo do_shortcode("[specificfeeds-icon]"); ?>'); ?></p>
                                    <p><?php highlight_string('<?php echo specificfeedsicon_shortcode(); ?>'); ?></p>
                                    <p><?php _e( 'It\'s that simple! If you want more options then tell me and I will be happy to add it.', RFIFS_TEXT ); ?></p>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- END-FORM -->

        </div>

	</div>
	<?php
}
