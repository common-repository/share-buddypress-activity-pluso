<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// create table class
require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/core/create-table.php';

class MXDNSMSBasisPluginClass
{

    public static function activate()
    {
    }

    public static function deactivate()
    {
    }

    /*
    * This function sets the option in the table for CPT rewrite rules
    */
    public static function createOptionForActivation()
    {
    }
}
