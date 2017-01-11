<?php

/*
Plugin Name: Brainy's Post Likes
Plugin URI: https://brainy.blog/post-likes/
Description: ...
Version: 1.0
Author: Brainy
Author URI: https://brainy.blog
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: bpl
Domain Path: /languages
 */

define('BPL_DIR', __DIR__);
define('BPL_URL', plugin_dir_url(__FILE__));

session_start();

require_once BPL_DIR . '/includes/functions.php';
require_once BPL_DIR . '/includes/actions.php';
require_once BPL_DIR . '/includes/filters.php';
