<?php
/**
 * Plugin Name: Noxia Addon
 * Description: Custom Elementor addon.
 * Plugin URI:  https://shweb.me
 * Version:     1.0.0
 * Author:      Sajjad
 * Author URI:  https://shweb.me
 * Text Domain: noxia
 * 
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function elementor_noxia_addon() {
	// Load plugin file
	require_once( __DIR__ . '/includes/plugin.php' );
	// Run the plugin
	\Elementor_Addon\Plugin::instance();
}
add_action( 'plugins_loaded', 'elementor_noxia_addon' );
