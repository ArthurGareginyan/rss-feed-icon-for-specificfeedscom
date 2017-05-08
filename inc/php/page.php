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

    // Call messages
    specificfeedsicon_hello_message();
    specificfeedsicon_error_message();

    // Layout of page
    ?>
    <div class="wrap">
        <h2>
            <?php _e( 'RSS Feed Icon for SpecificFeeds.com', RFIFS_TEXT ); ?>
            <span>
                <?php printf(
                              __( 'by %s Arthur Gareginyan %s', RFIFS_TEXT ),
                                  '<a href="http://www.arthurgareginyan.com" target="_blank">',
                                  '</a>'
                             );
                ?>
            </span>
        </h2>

        <div id="poststuff" class="metabox-holder has-right-sidebar">

            <!-- TABS NAVIGATION MENU -->
            <ul class="tabs-nav">
                <li class="active"><a href="#tab-core" data-toggle="tab"><?php _e( 'Settings', RFIFS_TEXT ); ?></a></li>
                <li><a href="#tab-usage" data-toggle="tab"><?php _e( 'Usage', RFIFS_TEXT ); ?></a></li>
                <li><a href="#tab-faq" data-toggle="tab"><?php _e( 'F.A.Q.', RFIFS_TEXT ); ?></a></li>
                <li><a href="#tab-author" data-toggle="tab"><?php _e( 'Author', RFIFS_TEXT ); ?></a></li>
                <li><a href="#tab-support" data-toggle="tab"><?php _e( 'Support', RFIFS_TEXT ); ?></a></li>
                <li><a href="#tab-family" data-toggle="tab"><?php _e( 'Family', RFIFS_TEXT ); ?></a></li>
            </ul>
            <!-- END-TABS NAVIGATION MENU -->


            <!-- TAB 1 -->
            <div class="tab-page fade active in" id="tab-core">

                <?php require_once( RFIFS_PATH . 'inc/php/settings.php' ); ?>

            </div>
            <!-- END-TAB 1 -->

            <!-- TAB 2 -->
            <div class="tab-page fade" id="tab-usage">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Usage', RFIFS_TEXT ); ?></h3>
                    <div class="inside">
                        <p><?php _e( 'The plugin is based on the <a href="http://www.specificfeeds.com" target="_blank">SpecificFeeds.com</a> service. The SpecificFeeds allows your visitors to receive messages from your Blog/RSS feed by email. You can access all information (such as emails and statistics) about your subscribers if you connect your feed to a SpecificFeeds account. It\'s 100% free and also has several other benefits.', RFIFS_TEXT ); ?></p>
                        <p><?php _e( 'To display the RSS feed icon that connected to the SpecificFeeds.com on the front end of your website, simply follow these steps:', RFIFS_TEXT ); ?></p>
                        <ol class="custom-counter">
                            <li><?php _e( 'Go to the "Settings" tab.', RFIFS_TEXT ); ?></li>
                            <li><?php _e( 'Enter your personal link from the <a href="http://www.specificfeeds.com" target="_blank">SpecificFeeds.com</a>, select the desired settings and click the "Save Changes" button.', RFIFS_TEXT ); ?></li>
                            <li><?php _e( 'Now you have several methods for display the RSS feed icon (further just "button"). Just choose the one that is more suitable for your case.', RFIFS_TEXT ); ?><br><br>
                                <p><?php _e( '<b>A)</b> For add the button inside a post from WP Post/Page Editor use the following shortcode:', RFIFS_TEXT ); ?></p>
                                <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                <p><?php _e( '<b>B)</b> For add the button to the widget area (in sidebar, footer etc.) use the "Text" widget and add inside it the following shortcode:', RFIFS_TEXT ); ?></p>
                                <p><?php highlight_string('[specificfeeds-icon]'); ?></p>
                                <p><?php _e( '<b>C)</b> For add the button directly to a theme files, just add the following code to needed place (where you want to display the button) in your theme files:', RFIFS_TEXT ); ?></p>
                                <p><?php highlight_string('<?php echo do_shortcode("[specificfeeds-icon]"); ?>'); ?></p>
                            </li>
                            <li><?php _e( 'Enjoy your fancy SpecificFeeds icon.', RFIFS_TEXT ); ?> <?php _e( 'It\'s that simple!', RFIFS_TEXT ); ?></li>
                        </ol>
                        <p class="note"><b><?php _e( 'Note!', RFIFS_TEXT ); ?></b> <?php _e( 'If you want more options then tell me and I will be happy to add it.', RFIFS_TEXT ); ?></p>
                    </div>
                </div>
            </div>
            <!-- END-TAB 2 -->

            <!-- TAB 3 -->
            <div class="tab-page fade" id="tab-faq">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Frequently Asked Questions', RFIFS_TEXT ); ?></h3>
                    <div class="inside">

                        <div class="panel-group" id="collapse-group">
                            <?php
                                $loopvalue = '9';
                                for ( $i = 1; $i <= $loopvalue; $i++ ) {
                                    echo '<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <a data-toggle="collapse" data-parent="#collapse-group" href="#element' . $i . '">
                                                    <h4 class="panel-title"></h4>
                                                </a>
                                            </div>
                                            <div id="element' . $i . '" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                </div>
                                            </div>
                                          </div>';
                                }
                            ?>
                        </div>

                        <div class="question-1"><?php _e( 'Will this plugin work on my WordPress.COM website?', RFIFS_TEXT ); ?></div>
                        <div class="answer-1"><?php _e( 'Sorry, this plugin is available for use only on self-hosted (WordPress.ORG) websites.', RFIFS_TEXT ); ?></div>

                        <div class="question-2"><?php _e( 'Can I use this plugin on my language?', RFIFS_TEXT ); ?></div>
                        <div class="answer-2"><?php printf(
                                                            __( 'Yes. But If your language is not available then you can make one. This plugin is ready for translation. The<code>.pot</code>file is included and placed in the <code>languages</code> folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (<code>*.po, *.mo</code>) to me at the %s and I will include the translation within the next plugin update.', RFIFS_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=RSS Feed Icon for SpecificFeeds.com">arthurgareginyan@gmail.com</a>'
                                                          );
                                              ?></div>

                        <div class="question-3"><?php _e( 'How does it work?', RFIFS_TEXT ); ?></div>
                        <div class="answer-3"><?php _e( 'On the "Settings" tab, select the desired settings and click the "Save Changes" button. Enjoy your fancy SpecificFeeds icon. It\'s that simple!', RFIFS_TEXT ); ?></div>

                        <div class="question-4"><?php _e( 'Does this plugin requires any modification of the theme?', RFIFS_TEXT ); ?></div>
                        <div class="answer-4"><?php _e( 'Absolutely not. This plugin is configurable entirely from the plugin settings page.', RFIFS_TEXT ); ?></div>

                        <div class="question-5"><?php _e( 'Does this require any knowledge of HTML or CSS?', RFIFS_TEXT ); ?></div>
                        <div class="answer-5"><?php _e( 'Absolutely not. This plugin can be configured with no knowledge of HTML or CSS, using an easy-to-use plugin settings page.', RFIFS_TEXT ); ?></div>

                        <div class="question-6 question-red"><?php _e( 'It\'s not working. What could be wrong?', RFIFS_TEXT ); ?></div>
                        <div class="answer-6"><?php _e( 'As with every plugin, it\'s possible that things don\'t work. The most common reason for this is a web browser\'s cache. Every web browser stores a cache of the websites you visit (pages, images, and etc.) to reduce bandwidth usage and server load. This is called the browser\'s cache.​ Clearing your browser\'s cache may solve the problem.', RFIFS_TEXT ); ?><br><br>
                                              <?php _e( 'It\'s impossible to tell what could be wrong exactly, but if you post a support request in the plugin\'s support forum on WordPress.org, I\'d be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.', RFIFS_TEXT ); ?></div>

                        <div class="question-7 question-red"><?php _e( 'Where to report bug if found?', RFIFS_TEXT ); ?></div>
                        <div class="answer-7"><?php printf(
                                                            __( 'Please visit the %s Dedicated Plugin Page on GitHub %s and report.', RFIFS_TEXT ),
                                                                '<a href="https://github.com/ArthurGareginyan/rss-feed-icon-for-specificfeedscom" target="_blank">',
                                                                '</a>'
                                                          );
                                              ?></div>

                        <div class="question-8"><?php _e( 'Where to share any ideas or suggestions to make the plugin better?', RFIFS_TEXT ); ?></div>
                        <div class="answer-8"><?php printf(
                                                            __( 'Any suggestions are very welcome! Please send me an email to %s arthurgareginyan@gmail.com %s. Thank you!', RFIFS_TEXT ),
                                                                '<a href="mailto:arthurgareginyan@gmail.com?subject=RSS Feed Icon for SpecificFeeds.com">',
                                                                '</a>'
                                                          );
                                              ?></div>

                        <div class="question-9"><?php _e( 'I love this plugin! Can I help somehow?', RFIFS_TEXT ); ?></div>
                        <div class="answer-9"><?php printf(
                                                            __( 'Yes, any financial contributions are welcome! Just visit %s my website %s, click on the donate button, and thank you!', RFIFS_TEXT ),
                                                                '<a href="http://www.arthurgareginyan.com/donate.html" target="_blank">',
                                                                '</a>'
                                                          );
                                              ?></div>

                    </div>
                </div>
            </div>
            <!-- END-TAB 3 -->

            <!-- TAB 4 -->
            <div class="tab-page fade" id="tab-author">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Author', RFIFS_TEXT ); ?></h3>
                    <div class="inside include-tab-author"></div>
                </div>
            </div>
            <!-- END-TAB 4 -->

            <!-- TAB 5 -->
            <div class="tab-page fade" id="tab-support">
                <div class="postbox">
                    <h3 class="title"><?php _e( 'Support', RFIFS_TEXT ); ?></h3>
                    <div class="inside include-tab-support"></div>
                </div>
            </div>
            <!-- END-TAB 5 -->

            <!-- TAB 6 -->
            <div class="tab-page fade" id="tab-family">
                <div class="include-tab-family"></div>
            </div>
            <!-- END-TAB 6 -->

            <div class="additional-css"></div>

        </div>

    </div>
    <?php
}
