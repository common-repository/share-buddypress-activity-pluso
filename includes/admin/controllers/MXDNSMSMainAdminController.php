<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXDNSMSMainAdminController extends MXDNSMSController
{

    public $countries = [];

    public function __construct()
    {

        $instance = new MXDNSMS_User_Location_Checker();

        $this->countries = $instance->countries;
        
    }

    public function settingsMenuItemAction()
    {

        $data = [
            'countries' => $this->countries,
            'black_list' => mxdnsmsGetBlackList()
        ];

        return new MXDNSMSMxView('settings-page', $data);
    }
}
