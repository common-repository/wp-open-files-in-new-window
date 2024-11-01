<?php
defined('ABSPATH') or die("These aren't the droids you're looking for");

/**
 * Plugin Name: Open Files In New Window or Tab
 * Plugin URI: http://github.com/abrudtkuhl
 * Description: Open Files In New Window or Tab
 * Version: 0.1
 * Author: Andy Brudtkuhl
 * Author URI: http://youmetandy.com
 */

if ( ! function_exists('wp_open_files_in_new_window') ) {
	function wp_open_files_in_new_window() {
		wp_register_script('brudtkuhl-open-files-new-window', plugins_url('wp-open-files-new-window.js', __FILE__), array('jquery'),'1.0', true);
		wp_enqueue_script('brudtkuhl-open-files-new-window');
	}
	add_action( 'wp_enqueue_scripts', 'wp_open_files_in_new_window' );
}