<?php
/**
 * Plugin Name: WooChef: Customer
 * Plugin URI:  https://github.com/woochef/customer
 * Description: Customer management, to help you handle WooCommerce customers. Registration, email verification, customer information, and so on.
 * Version:     0.1
 * Author:      WooChef and contributors
 * Author URI:  https://github.com/woochef/customer/graphs/contributors
 * Text Domain: woochef-customer
 * License:     MIT
 * License URI: https://opensource.org/licenses/MIT
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class WooChefCustomer {
	/**
	 * WooChefCustomer version.
	 *
	 * @var string
	 */
	public $version = '0.1';

	/**
	 * The single instance of the class.
	 *
	 * @since 0.1
	 *
	 * @var   WooChefCustomer
	 */
	protected static $instance = null;

	/**
	 * WooChefCustomer Instance.
	 *
	 * @since  0.1
	 *
	 * @static
	 *
	 * @return WooChefCustomer  the instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}

/**
 * @since  0.1
 *
 * @return WooChefCustomer  the instance.
 */
function woochef_customer() {
	return WooChefCustomer::instance();
}

woochef_customer();
