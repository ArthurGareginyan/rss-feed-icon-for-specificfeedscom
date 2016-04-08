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
 * @since 2.0
 */
function specificfeedsicon_render_submenu_page() {

	// Page
	?>
	<div class="wrap">
		<h2>
            <?php _e( 'RSS Feed Icon for SpecificFeeds.com', 'rss-feed-icon-for-specificfeedscom' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'rss-feed-icon-for-specificfeedscom' ); ?>
            <span/>
		</h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- SIDEBAR -->
            <div class="inner-sidebar">
                <div id="side-sortables" class="meta-box-sortabless ui-sortable">

                    <div id="about" class="postbox">
                        <h3 class="title"><?php _e( 'About', 'rss-feed-icon-for-specificfeedscom' ) ?></a></h3>
                        <div class="inside">
                            <p><?php _e( 'This plugin allows you to easily add RSS feed icon by SpecificFeeds.com in any place on your website.', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                            <p><a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow">SpecificFeeds.com</a><?php _e( ' allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                        </div>
                    </div>

                    <div id="help" class="postbox">
                        <h3 class="title"><?php _e( 'Help', 'rss-feed-icon-for-specificfeedscom' ); ?></h3>
                        <div class="inside">
                            <p><?php _e( 'If you want more options then tell me and I will be happy to add it.', 'rss-feed-icon-for-specificfeedscom' ); ?></p>
                            <p><a href="mailto:arthurgareginyan@gmail.com">arthurgareginyan@gmail.com</a></p>
                        </div>
                    </div>

                    <div id="donate" class="postbox">
                        <h3 class="title"><?php _e( 'Donate', 'rss-feed-icon-for-specificfeedscom' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/thanks.png', __FILE__); ?>">
                            <p><?php _e( 'If you like this plugin and find it useful, help me to make this plugin even better and keep it up-to-date.', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS" target="_blank" rel="nofollow">
                                <img src="<?php echo plugins_url('images/btn_donateCC_LG.gif', __FILE__); ?>" alt="Make a donation">
                            </a>
                            <p><?php _e( 'Thanks for your support!', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                        </div>
                    </div>

                    <div id="freelance" class="postbox">
                        <h3 class="title"><?php _e( 'Freelance', 'rss-feed-icon-for-specificfeedscom' ) ?></h3>
                        <div class="inside">
                            <img src="<?php echo plugins_url('images/author.png', __FILE__); ?>">
                            <p><?php _e( 'Hello, my name is Arthur and I\'m a freelance web designer and developer.', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                            <p><?php _e( 'Share your thoughts with me. You may have a brilliant idea in your mind and I can make it happen, so let’s get started!', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                            <p><a href="http://www.arthurgareginyan.com/" target="_blank">www.arthurgareginyan.com</a></p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END-SIDEBAR -->

            <!-- FORM -->
            <div class="has-sidebar sm-padded">
                <div id="post-body-content" class="has-sidebar-content">
                    <div class="meta-box-sortabless">

                        <form name="specificfeedsicon-form" action="options.php" method="post" enctype="multipart/form-data">
                            <?php settings_fields( 'specificfeedsicon_settings_group' ); ?>

                            <div class="postbox">
                                <h3 class="title">
                                    <label for="specificfeedsicon_settings" ><?php _e( 'Settings', 'rss-feed-icon-for-specificfeedscom' ) ?></label>
                                </h3>
                                <div class="inside">

                                    <br/>
                                    <div>
                                        <label for="specificfeedsicon_link" class="control-label"><b><?php echo __('Your SpecificFeeds Link :', 'rss-feed-icon-for-specificfeedscom'); ?></b></label>
                                        <input type="text" class="form-control" name="specificfeedsicon_link" id="specificfeedsicon_link" placeholder="http://" value="<?php echo get_option('specificfeedsicon_link'); ?>">
                                    </div>

                                    <br/>
                                    <p class="control-label"><b><?php _e( 'Which icon do you want to display?', 'rss-feed-icon-for-specificfeedscom' ); ?></b></p>
                                    <div class="main_iconbox">
                                        <table width="50%" border="0" cellspacing="15" cellpadding="0">

                                            <tr>
                                                <td><?php _e( 'A SpecificFeeds icon...', 'rss-feed-icon-for-specificfeedscom' ); ?></td>
                                                <td><?php _e( '...or an email icon:', 'rss-feed-icon-for-specificfeedscom' ); ?></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="first" <?php checked('first', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/first_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="four" <?php checked('four', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/four_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="second" <?php checked('second', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/second_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="five" <?php checked('five', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/five_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="third" <?php checked('third', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/third_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="six" <?php checked('six', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/six_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="seven" <?php checked('seven', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/seven_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="eight" <?php checked('eight', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/eight_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="nine" <?php checked('nine', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/nine_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="ten" <?php checked('ten', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/ten_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="eleven" <?php checked('eleven', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/eleven_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="twelve" <?php checked('twelve', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/twelve_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="radio" name="specificfeedsicon_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeedsicon_icon')); ?>>
                                                    <img src="<?php echo plugins_url( 'images/icons/thirteen_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>

                                        </table>
                                    </div>

                                    <p><i><?php _e( 'Note: Two from above icons are white color with transparent background.', 'rss-feed-icon-for-specificfeedscom' ); ?></i></p>

                                </div>
                            </div>

                            <?php submit_button( __( 'Save Changes', 'rss-feed-icon-for-specificfeedscom' ), 'primary', 'submit', true ); ?>

                            <div class="postbox" id="Using">
                                <h3 class="title"><?php _e( 'Using', 'rss-feed-icon-for-specificfeedscom' ) ?></h3>
                                <div class="inside">
                                    <p><?php _e( 'You have several methods for display the SpecificFeeds.com button (further just "button") on your website. But first, enter your personal SpecificFeeds link and choose preferred icon, then click "Save Changes".', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                                    <p><?php _e( '<b>A)</b> For add the button inside a post from WP Post/Page Editor use the following shortcode:', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                                    <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                    <p><?php _e( '<b>B)</b> For add the button to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                                    <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                    <p><?php _e( '<b>C)</b> For add the button directly to a theme files, just add one of the following code (both variants do the same) to needed place (where you want to display the button) in your theme files:', 'rss-feed-icon-for-specificfeedscom' ) ?></p>
                                    <p><?php highlight_string('<?php echo do_shortcode("[specificfeeds-icon]"); ?>'); ?></p>
                                    <p><?php highlight_string('<?php echo rss-feed-icon-for-specificfeedscom_shortcode(); ?>'); ?></p>
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