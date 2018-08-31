<?php
/**
 * Plugin Name: Newconomy Gutenberg Blocks Plugin
 * Plugin URI: https://github.com/ahmadawais/create-guten-block/
 * Description: Gutenberg plugin created via create-guten-block.
 * Author: Zorca
 * Author URI: https://zorca.org/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';