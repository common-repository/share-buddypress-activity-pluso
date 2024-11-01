<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

class MXDNSMSFrontEndMain
{

    /*
    * Additional classes
    */
    public function additionalClasses()
    {

    }

}

// Initialize
$initialize_frontend_class = new MXDNSMSFrontEndMain();

// include classes
$initialize_frontend_class->additionalClasses();
