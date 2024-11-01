<?php

/*
Plugin Name: Block by Country
Plugin URI: https://github.com/Maxim-us/wp-plugin-skeleton
Description: This plugin helps you restrict access to your website to users from certain countries.
Author: Maksym Marko
Version: 1.6
Author URI: https://markomaksym.com.ua
Plugin Starter Kit Name: WPP Generator v5.3.4
Plugin Starter Kit URL: https://markomaksym.com.ua/do-note-share-my-site-1693463530-generator/
Plugin Starter Kit Author URL: https://markomaksym.com.ua/
*/

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/*
* Unique string - MXDNSMS
*/

/*
* Define MXDNSMS_PLUGIN_PATH
*
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\do-note-share-my-site-1693463530\do-note-share-my-site-1693463530.php
*/
if (!defined('MXDNSMS_PLUGIN_PATH')) {

	define( 'MXDNSMS_PLUGIN_PATH', __FILE__ );

}

/*
* Define MXDNSMS_PLUGIN_URL
*
* Return http://my-domain.com/wp-content/plugins/do-note-share-my-site-1693463530/
*/
if (!defined('MXDNSMS_PLUGIN_URL')) {

	define( 'MXDNSMS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

}

/*
* Define MXDNSMS_PLUGN_BASE_NAME
*
* 	Return do-note-share-my-site-1693463530/do-note-share-my-site-1693463530.php
*/
if (!defined( 'MXDNSMS_PLUGN_BASE_NAME')) {

	define( 'MXDNSMS_PLUGN_BASE_NAME', plugin_basename( __FILE__ ) );

}

/*
* Define MXDNSMS_TABLE_SLUG
*/
if (!defined('MXDNSMS_TABLE_SLUG')) {

	define( 'MXDNSMS_TABLE_SLUG', 'mxdnsms_mx_table' );

}

/*
* Define MXDNSMS_PLUGIN_ABS_PATH
* 
* E:\OpenServer\domains\my-domain.com\wp-content\plugins\do-note-share-my-site-1693463530/
*/
if (!defined( 'MXDNSMS_PLUGIN_ABS_PATH')) {

	define( 'MXDNSMS_PLUGIN_ABS_PATH', dirname( MXDNSMS_PLUGIN_PATH ) . '/' );

}

/*
* Define MXDNSMS_PLUGIN_VERSION
*/
if (!defined('MXDNSMS_PLUGIN_VERSION')) {

	// version
	define( 'MXDNSMS_PLUGIN_VERSION', '1.6' ); // Must be replaced before production on for example '1.0'

}

/*
* Define MXDNSMS_MAIN_MENU_SLUG
*/
if (!defined('MXDNSMS_MAIN_MENU_SLUG')) {

	// version
	define( 'MXDNSMS_MAIN_MENU_SLUG', 'mxdnsms-do-note-share-my-site-1693463530-main-page' );

}

/*
* Define MXDNSMS_SINGLE_TABLE_ITEM_MENU
*/
if (!defined( 'MXDNSMS_SINGLE_TABLE_ITEM_MENU')) {

	// single table item menu
	define( 'MXDNSMS_SINGLE_TABLE_ITEM_MENU', 'mxdnsms-do-note-share-my-site-1693463530-single-page' );

}

/*
* Define MXDNSMS_CREATE_TABLE_ITEM_MENU
*/
if (!defined('MXDNSMS_CREATE_TABLE_ITEM_MENU')) {

	// table item menu
	define( 'MXDNSMS_CREATE_TABLE_ITEM_MENU', 'mxdnsms-do-note-share-my-site-1693463530-create-item-page' );

}

/**
 * activation|deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'install.php';

/*
* Registration hooks
*/
// Activation
register_activation_hook( __FILE__, ['MXDNSMSBasisPluginClass', 'activate'] );

// Deactivation
register_deactivation_hook( __FILE__, ['MXDNSMSBasisPluginClass', 'deactivate'] );

/*
* Include the main MXDNSMSDoNoteShareMySite class
*/
if (!class_exists('MXDNSMSDoNoteShareMySite')) {

	require_once plugin_dir_path( __FILE__ ) . 'includes/final-class.php';

	/*
	* Translate plugin
	*/
	add_action( 'plugins_loaded', 'mxdnsms_translate' );

	function mxdnsms_translate()
	{

		load_plugin_textdomain( 'mxdnsms-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	}

}
