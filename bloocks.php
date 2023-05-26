<?php
/**
 * Plugin Name:     BlOOcks
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     OO Blocks
 * Author:          Ross Wintle
 * Author URI:      YOUR SITE HERE
 * Text Domain:     bloocks
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Bloocks
 */
require('src/Block.php');
require('blocks/post_loop/PostLoop.php');

register_block_type( __DIR__ . '/blocks/post_loop' );
