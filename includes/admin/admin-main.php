<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXDNSMSAdminMain
{

    // list of model names used in the plugin
    public $modelsCollection = [
        'MXDNSMSMainAdminModel'
    ];

    /*
    * Additional classes
    */
    public function additionalClasses()
    {

        // enqueue_scripts class
        mxdnsmsRequireClassFileAdmin( 'enqueue-scripts.php' );

        MXDNSMSEnqueueScripts::registerScripts();

        // User location checker
        mxdnsmsRequireClassFileAdmin('user-location-checker.php');
    }

    /*
    * Models Connection
    */
    public function modelsCollection()
    {

        // require model file
        foreach ($this->modelsCollection as $model) {
            mxdnsmsUseModel($model);
        }
    }

    /**
     * registration ajax actions
     */
    public function registrationAjaxActions()
    {

        // ajax requests to main page
        MXDNSMSMainAdminModel::wpAjax();
    }

    /*
    * Routes collection
    */
    public function routesCollection()
    {

        // sub settings menu item
        MXDNSMSRoute::get('MXDNSMSMainAdminController', 'settingsMenuItemAction', 'NULL', [
            'menu_title' => 'Block Countries',
            'page_title' => 'Block Countries'
        ], 'mx-block-countries', true);
    }
}

// Initialize
$adminClassInstance = new MXDNSMSAdminMain();

// include classes
$adminClassInstance->additionalClasses();

// include models
$adminClassInstance->modelsCollection();

// ajax requests
$adminClassInstance->registrationAjaxActions();

// include controllers
$adminClassInstance->routesCollection();