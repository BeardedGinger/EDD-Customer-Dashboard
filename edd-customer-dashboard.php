<?php
/**
 * Plugin Name:       EDD Customer Dashboard
 * Plugin URI:        http://joshmallard.com
 * Description:       Adds a customer dashboard shortcode which allows customers to quickly edit their profile and view purchase history and download history. Also integrates with the Front-End Submissions and Wishlists plugins.
 * Version:           1.0.3
 * Author:            Josh Mallard
 * Author URI:        http://joshmallard.com
 * Text Domain:       edd_customer_dashboard
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



 	require_once( plugin_dir_path( __FILE__ ) . 'public/class-edd-customer-dashboard.php' );
	add_action( 'plugins_loaded', array( 'EDD_Customer_Dashboard', 'get_instance' ) );

