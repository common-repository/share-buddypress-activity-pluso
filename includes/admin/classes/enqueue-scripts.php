<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXDNSMSEnqueueScripts
{

    /*
    * Registration of styles and scripts
    */
    public static function registerScripts()
    {

        // register scripts and styles
        add_action('admin_enqueue_scripts', ['MXDNSMSEnqueueScripts', 'enqueue']);
    }

    public static function enqueue()
    {

        wp_enqueue_style('mxdnsms_font_awesome', MXDNSMS_PLUGIN_URL . 'assets/font-awesome-4.6.3/css/font-awesome.min.css');

        wp_enqueue_style('mxdnsms_admin_style', MXDNSMS_PLUGIN_URL . 'includes/admin/assets/css/style.css', ['mxdnsms_font_awesome'], MXDNSMS_PLUGIN_VERSION, 'all');

        wp_enqueue_script('mxdnsms_admin_script', MXDNSMS_PLUGIN_URL . 'includes/admin/assets/js/script.js', ['jquery'], MXDNSMS_PLUGIN_VERSION, true);

        wp_localize_script('mxdnsms_admin_script', 'mxdnsms_admin_localize', [

            'ajaxurl'   => admin_url('admin-ajax.php')

        ]);
    }
}
