<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.4
 */
function specificfeedsicon_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2>
            <?php _e( 'RSS Feed Icon for SpecificFeeds.com', 'specificfeedsicon' ); ?>
            <br/>
            <span>
                <?php _e( 'by <a href="http://www.arthurgareginyan.com" target="_blank">Arthur "Berserkr" Gareginyan</a>', 'specificfeedsicon' ); ?>
            <span/>
		</h2>
		<br/>
		<form name="specificfeedsicon-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeedsicon_settings_group' ); ?>

			<!-- SIDEBAR -->
			 <div id="templateside">
				<p>
					<?php _e( 'This plugin allows you to easily add RSS feed icon by SpecificFeeds.com in any place on your web-site.', 'specificfeedsicon' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow">SpecificFeeds.com</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeedsicon' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds-icon] in needed place. It\'s that simple!', 'specificfeedsicon' ) ?>
				</p>
				<p class="donate">If you find it useful, consider making a donation:
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8CZE2SPQWVLMU" target="_blank" rel="nofollow">
                          <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                    </a>
                </p>
			 </div>
             <!-- END-SIDEBAR -->

             <!-- FORM -->
			 <div id="template">
				<div>
					<label for="specificfeedsicon_link" class="control-label"><?php echo __('Your SpecificFeeds Link :', 'specificfeedsicon'); ?></label>
					<input type="text" class="form-control" name="specificfeedsicon_link" id="specificfeedsicon_link" placeholder="SF Link" value="<?php echo get_option('specificfeedsicon_link'); ?>">
				</div>
				<br/>
				<p class="control-label"><?php _e( 'Which icon do you want to display?', 'specificfeedsicon' ); ?></p>
				<div class="main_iconbox">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>
						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="first" <?php checked('first', get_option('specificfeedsicon_icon')); ?>>
								<img src="<?php echo plugins_url( 'icons/first_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="four" <?php checked('four', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/four_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="second" <?php checked('second', get_option('specificfeedsicon_icon')); ?>>
								<img src="<?php echo plugins_url( 'icons/second_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="five" <?php checked('five', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/five_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="third" <?php checked('third', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/third_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="six" <?php checked('six', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/six_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="seven" <?php checked('seven', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/seven_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="eight" <?php checked('eight', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/eight_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="nine" <?php checked('nine', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/nine_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="ten" <?php checked('ten', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/ten_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="eleven" <?php checked('eleven', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/eleven_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="twelve" <?php checked('twelve', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/twelve_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeedsicon_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeedsicon_icon')); ?>>
							    <img src="<?php echo plugins_url( 'icons/thirteen_one.png', __FILE__ ) ?>" width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
                <?php submit_button( __( 'Save Changes', 'specificfeedsicon' ), 'primary', 'submit', true ); ?>
				</div>

			 </div>
             <!-- END-FORM -->

		</form>
	   </div>
	<?php
}
