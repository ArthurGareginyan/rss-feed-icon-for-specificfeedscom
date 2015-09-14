<?php

/**
 * Prevent Direct Access
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.1
 */
function specificfeedsicon_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="text-align:center; color:cornflowerblue; margin-bottom: 1em; margin-bottom: 0;">
				<?php _e( 'RSS Feed Icon for SpecificFeeds.com', 'specificfeedsicon' ); ?>
				<br/>
				<span style="font-size: 0.6em; color: #444; margin-top: 1px; margin-bottom: 20px;">
					<?php _e( 'by <a href="http://mycyberuniverse.com/author.html" target="_blank" style="display:inline; padding:0;">Arthur "Berserkr" Gareginyan</a>', 'specificfeedsicon' ); ?>
				<span/>
		</h2>
		<br/>
		<form name="specificfeedsicon-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeedsicon_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeedsicon-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to easily add RSS feed icon by SpecificFeeds.com in any place on your web-site.', 'specificfeedsicon' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds.com</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeedsicon' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds-icon] in needed place. It\'s that simple!', 'specificfeedsicon' ) ?>
				</p>
				<p style="margin-top:20px; border:1px solid rgb(184, 186, 184); border-radius:5px; padding:3px; text-align:center; background:rgb(234, 234, 234);">If you find it useful, consider making a donation:
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8CZE2SPQWVLMU" target="_blank" rel="nofollow">
                          <img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Make a donation">
                    </a>
                </p>
				<?php do_action( 'specificfeedsicon-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeedsicon-form-top' ); ?>
				<div>
					<label for="specificfeedsicon_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeedsicon'); ?></label>
					<input type="text" class="form-control" name="specificfeedsicon_link" id="specificfeedsicon_link" placeholder="SF Link" value="<?php echo get_option('specificfeedsicon_link'); ?>">


				</div>
				<?php do_action( 'specificfeedsicon-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeedsicon' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
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

				<?php do_action( 'specificfeedsicon-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}