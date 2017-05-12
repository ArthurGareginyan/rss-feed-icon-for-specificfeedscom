<?php
/**
 * Plugin Name: RSS Feed Icon for SpecificFeeds.com
 * Plugin URI: https://github.com/ArthurGareginyan/rss-feed-icon-for-specificfeedscom
 * Description: This plugin allows you to easily add the RSS feed icon by SpecificFeeds.com in any place on your website.
 * Author: Arthur Gareginyan
 * Author URI: http://www.arthurgareginyan.com
 * Version: 4.0.1
 * License: GPL3
 * Text Domain: rss-feed-icon-for-specificfeedscom
 * Domain Path: /languages/
 *
 * Copyright 2014-2017 Arthur Gareginyan (email : arthurgareginyan@gmail.com)
 *
 * This file is part of "RSS Feed Icon for SpecificFeeds.com".
 *
 * "RSS Feed Icon for SpecificFeeds.com" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "RSS Feed Icon for SpecificFeeds.com" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "RSS Feed Icon for SpecificFeeds.com".  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *               █████╗ ██████╗ ████████╗██╗  ██╗██╗   ██╗██████╗
 *              ██╔══██╗██╔══██╗╚══██╔══╝██║  ██║██║   ██║██╔══██╗
 *              ███████║██████╔╝   ██║   ███████║██║   ██║██████╔╝
 *              ██╔══██║██╔══██╗   ██║   ██╔══██║██║   ██║██╔══██╗
 *              ██║  ██║██║  ██║   ██║   ██║  ██║╚██████╔╝██║  ██║
 *              ╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝ ╚═╝  ╚═╝
 *
 *   ██████╗  █████╗ ██████╗ ███████╗ ██████╗ ██╗███╗   ██╗██╗   ██╗ █████╗ ███╗   ██╗
 *  ██╔════╝ ██╔══██╗██╔══██╗██╔════╝██╔════╝ ██║████╗  ██║╚██╗ ██╔╝██╔══██╗████╗  ██║
 *  ██║  ███╗███████║██████╔╝█████╗  ██║  ███╗██║██╔██╗ ██║ ╚████╔╝ ███████║██╔██╗ ██║
 *  ██║   ██║██╔══██║██╔══██╗██╔══╝  ██║   ██║██║██║╚██╗██║  ╚██╔╝  ██╔══██║██║╚██╗██║
 *  ╚██████╔╝██║  ██║██║  ██║███████╗╚██████╔╝██║██║ ╚████║   ██║   ██║  ██║██║ ╚████║
 *   ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝ ╚═════╝ ╚═╝╚═╝  ╚═══╝   ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═══╝
 *
 */


/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

/**
 * Define global constants
 *
 * @since 3.3
 */
defined('RFIFS_DIR') or define('RFIFS_DIR', dirname(plugin_basename(__FILE__)));
defined('RFIFS_BASE') or define('RFIFS_BASE', plugin_basename(__FILE__));
defined('RFIFS_URL') or define('RFIFS_URL', plugin_dir_url(__FILE__));
defined('RFIFS_PATH') or define('RFIFS_PATH', plugin_dir_path(__FILE__));
defined('RFIFS_TEXT') or define('RFIFS_TEXT', 'rss-feed-icon-for-specificfeedscom');
defined('RFIFS_VERSION') or define('RFIFS_VERSION', '4.0.1');

/**
 * Load the plugin modules
 *
 * @since 4.0
 */
require_once( RFIFS_PATH . 'inc/php/core.php' );
require_once( RFIFS_PATH . 'inc/php/enqueue.php' );
require_once( RFIFS_PATH . 'inc/php/version.php' );
require_once( RFIFS_PATH . 'inc/php/functional.php' );
require_once( RFIFS_PATH . 'inc/php/page.php' );
require_once( RFIFS_PATH . 'inc/php/messages.php' );
require_once( RFIFS_PATH . 'inc/php/uninstall.php' );
