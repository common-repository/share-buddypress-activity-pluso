<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// require Route-Registrar.php
require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/core/Route-Registrar.php';

/*
* Routes class
*/
class MXDNSMSRoute
{
    
    public static function get( ...$args )
    {

        return new MXDNSMSRouteRegistrar( ...$args );

    }
    
}
