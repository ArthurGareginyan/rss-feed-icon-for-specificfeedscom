<?php

defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function specificfeeds_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="margin-bottom: 1em;"><?php _e( 'SpecificFeeds', 'specificfeeds' ); ?></h2>
		<br/>
		<form name="specificfeeds-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeeds_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeeds-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to insert rss-feed icon which connected to SpecificFeeds.com with the shortcode in any place of your site.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds] in needed place. It\'s that simple!', 'specificfeeds' ) ?>
				</p>
				<?php do_action( 'specificfeeds-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeeds-form-top' ); ?>
				<div>
					<label for="specificfeeds_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeeds'); ?></label>
					<input type="text" class="form-control" name="specificfeeds_link" id="specificfeeds_link" placeholder="SF Link" value="<?php echo get_option('specificfeeds_link'); ?>">


				</div>
				<?php do_action( 'specificfeeds-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeeds' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="first" <?php checked('first', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/first_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="four" <?php checked('four', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/four_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="second" <?php checked('second', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/second_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="five" <?php checked('five', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/five_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="third" <?php checked('third', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/third_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="six" <?php checked('six', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/six_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="seven" <?php checked('seven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/seven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eight" <?php checked('eight', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eight_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="nine" <?php checked('nine', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/nine_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="ten" <?php checked('ten', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/ten_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eleven" <?php checked('eleven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eleven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="twelve" <?php checked('twelve', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/twelve_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td><?php

defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function specificfeeds_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="margin-bottom: 1em;"><?php _e( 'SpecificFeeds', 'specificfeeds' ); ?></h2>
		<br/>
		<form name="specificfeeds-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeeds_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeeds-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to insert rss-feed icon which connected to SpecificFeeds.com with the shortcode in any place of your site.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds] in needed place. It\'s that simple!', 'specificfeeds' ) ?>
				</p>
				<?php do_action( 'specificfeeds-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeeds-form-top' ); ?>
				<div>
					<label for="specificfeeds_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeeds'); ?></label>
					<input type="text" class="form-control" name="specificfeeds_link" id="specificfeeds_link" placeholder="SF Link" value="<?php echo get_option('specificfeeds_link'); ?>">


				</div>
				<?php do_action( 'specificfeeds-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeeds' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="first" <?php checked('first', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/first_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="four" <?php checked('four', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/four_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="second" <?php checked('second', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/second_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="five" <?php checked('five', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/five_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="third" <?php checked('third', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/third_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="six" <?php checked('six', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/six_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="seven" <?php checked('seven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/seven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eight" <?php checked('eight', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eight_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="nine" <?php checked('nine', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/nine_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="ten" <?php checked('ten', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/ten_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eleven" <?php checked('eleven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eleven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="twelve" <?php checked('twelve', get_option('specificfeeds_icon')); ?>>
							    <img src='h<?php

defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function specificfeeds_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="margin-bottom: 1em;"><?php _e( 'SpecificFeeds', 'specificfeeds' ); ?></h2>
		<br/>
		<form name="specificfeeds-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeeds_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeeds-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to insert rss-feed icon which connected to SpecificFeeds.com with the shortcode in any place of your site.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds] in needed place. It\'s that simple!', 'specificfeeds' ) ?>
				</p>
				<?php do_action( 'specificfeeds-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeeds-form-top' ); ?>
				<div>
					<label for="specificfeeds_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeeds'); ?></label>
					<input type="text" class="form-control" name="specificfeeds_link" id="specificfeeds_link" placeholder="SF Link" value="<?php echo get_option('specificfeeds_link'); ?>">


				</div>
				<?php do_action( 'specificfeeds-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeeds' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="first" <?php checked('first', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/first_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="four" <?php checked('four', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/four_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="second" <?php checked('second', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/second_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="five" <?php checked('five', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/five_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="third" <?php checked('third', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/third_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="six" <?php checked('six', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/six_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="seven" <?php checked('seven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/seven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eight" <?php checked('eight', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eight_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="nine" <?php checked('nine', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/nine_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="ten" <?php checked('ten', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/ten_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eleven" <?php checked('eleven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eleven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="twelve" <?php checked('twelve', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/twelve_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/thirteen_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
					<?php submit_button( __( 'Save Changes', 'specificfeeds' ), 'primary', 'submit', true ); ?>
				</div>
				
				<?php do_action( 'specificfeeds-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}<?php

defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function specificfeeds_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="margin-bottom: 1em;"><?php _e( 'SpecificFeeds', 'specificfeeds' ); ?></h2>
		<br/>
		<form name="specificfeeds-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeeds_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeeds-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to insert rss-feed icon which connected to SpecificFeeds.com with the shortcode in any place of your site.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds] in needed place. It\'s that simple!', 'specificfeeds' ) ?>
				</p>
				<?php do_action( 'specificfeeds-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeeds-form-top' ); ?>
				<div>
					<label for="specificfeeds_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeeds'); ?></label>
					<input type="text" class="form-control" name="specificfeeds_link" id="specificfeeds_link" placeholder="SF Link" value="<?php echo get_option('specificfeeds_link'); ?>">


				</div>
				<?php do_action( 'specificfeeds-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeeds' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="first" <?php checked('first', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/first_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="four" <?php checked('four', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/four_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="second" <?php checked('second', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/second_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="five" <?php checked('five', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/five_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="third" <?php checked('third', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/third_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="six" <?php checked('six', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/six_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="seven" <?php checked('seven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/seven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eight" <?php checked('eight', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eight_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="nine" <?php checked('nine', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/nine_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="ten" <?php checked('ten', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/ten_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eleven" <?php checked('eleven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eleven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="twelve" <?php checked('twelve', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/twelve_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr><?php

defined('ABSPATH') or die("Restricted access!");

/**
 * Render Settings Page
 *
 * @since 1.0
 */
function specificfeeds_render_submenu_page() {

	// Page
	?>
	   <div class="wrap">
		<h2 style="margin-bottom: 1em;"><?php _e( 'SpecificFeeds', 'specificfeeds' ); ?></h2>
		<br/>
		<form name="specificfeeds-form" action="options.php" method="post" enctype="multipart/form-data">
			<?php settings_fields( 'specificfeeds_settings_group' ); ?>

			<!-- Sidebar -->
			 <div id="templateside">
				<?php do_action( 'specificfeeds-sidebar-top' ); ?>
				<p style="margin-top: 0">
					<?php _e( 'This plugin allows you to insert rss-feed icon which connected to SpecificFeeds.com with the shortcode in any place of your site.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( '<a href="http://www.specificfeeds.com/" target="_blank" rel="nofollow" style="display:inline; padding:0;">SpecificFeeds</a> allows your visitors to receive messages from your Blog/RSS Feed by email. It\'s 100% free and also has several other benefits.', 'specificfeeds' ) ?>
				</p>
				<p>
					<?php _e( 'To use, enter your personal link, choose icon and click "Save Changes". Then you can put shortcode [specificfeeds] in needed place. It\'s that simple!', 'specificfeeds' ) ?>
				</p>
				<?php do_action( 'specificfeeds-sidebar-bottom' ); ?>
			 </div>
             <!-- END-Sidebar -->

             <!-- Form -->
			 <div id="template">
				<?php do_action( 'specificfeeds-form-top' ); ?>
				<div>
					<label for="specificfeeds_link" class="control-label" style="font-size:16px;padding-right:5px;"><?php echo __('Your SpecificFeeds Link :', 'specificfeeds'); ?></label>
					<input type="text" class="form-control" name="specificfeeds_link" id="specificfeeds_link" placeholder="SF Link" value="<?php echo get_option('specificfeeds_link'); ?>">


				</div>
				<?php do_action( 'specificfeeds-textarea-bottom' ); ?>
				<br/>
				<p style="font-size:16px;"><?php _e( 'Which icon do you want to display?', 'specificfeeds' ); ?></p>
				<div class="main_iconbox" style="padding-left:50px;">
					<table width="50%" border="0" cellspacing="15" cellpadding="0">

						<tr>
							<td><b>A SpecificFeeds icon...</b></td>
							<td><b>...or an email icon:</b></td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="first" <?php checked('first', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/first_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="four" <?php checked('four', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/four_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="second" <?php checked('second', get_option('specificfeeds_icon')); ?>>
								<img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/second_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="five" <?php checked('five', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/five_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="third" <?php checked('third', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/third_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="six" <?php checked('six', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/six_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="seven" <?php checked('seven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/seven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eight" <?php checked('eight', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eight_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="nine" <?php checked('nine', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/nine_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="ten" <?php checked('ten', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/ten_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="eleven" <?php checked('eleven', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/eleven_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="twelve" <?php checked('twelve', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/twelve_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/thirteen_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
					<?php submit_button( __( 'Save Changes', 'specificfeeds' ), 'primary', 'submit', true ); ?>
				</div>
				
				<?php do_action( 'specificfeeds-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/thirteen_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
					<?php submit_button( __( 'Save Changes', 'specificfeeds' ), 'primary', 'submit', true ); ?>
				</div>
				
				<?php do_action( 'specificfeeds-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}ttp://www.specificfeeds.com/theme/classic/img/publisher/download/twelve_one.png' width='48' height='48' align='absmiddle'/>
							</td>
						</tr>

						<tr>
							<td>
							    <input type="radio" name="specificfeeds_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/thirteen_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
					<?php submit_button( __( 'Save Changes', 'specificfeeds' ), 'primary', 'submit', true ); ?>
				</div>
				
				<?php do_action( 'specificfeeds-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}
							    <input type="radio" name="specificfeeds_icon" value="thirteen" <?php checked('thirteen', get_option('specificfeeds_icon')); ?>>
							    <img src='http://www.specificfeeds.com/theme/classic/img/publisher/download/thirteen_one.png' width='48' height='48' align='absmiddle'/>
							</td>
							<td>
							</td>
						</tr>
				  </table>
				</div>
				</br>
				<div>
					<?php submit_button( __( 'Save Changes', 'specificfeeds' ), 'primary', 'submit', true ); ?>
				</div>
				
				<?php do_action( 'specificfeeds-form-bottom' ); ?>
			 </div>
             <!-- END-Form -->


		</form>
	   </div>
	<?php
}
