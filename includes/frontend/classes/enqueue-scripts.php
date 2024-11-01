<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXDNSMSEnqueueScriptsFrontend
{

    /*
    * Registration of styles and scripts
    */
    public static function registerScripts()
    {

        // register scripts and styles
        add_action( 'wp_enqueue_scripts', ['MXDNSMSEnqueueScriptsFrontend', 'enqueue'] );

    }

        public static function enqueue()
        {

            wp_enqueue_style( 'mxdnsms_font_awesome', MXDNSMS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css' );

            wp_enqueue_style( 'mxdnsms_style', MXDNSMS_PLUGIN_URL . 'includes/frontend/assets/css/style.css', [ 'mxdnsms_font_awesome' ], MXDNSMS_PLUGIN_VERSION, 'all' );

            wp_enqueue_script( 'mxdnsms_script', MXDNSMS_PLUGIN_URL . 'includes/frontend/assets/js/script.js', [ 'jquery' ], MXDNSMS_PLUGIN_VERSION, false );

        }

}
