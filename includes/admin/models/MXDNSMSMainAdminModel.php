<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/**
 * Main page Model
 */
class MXDNSMSMainAdminModel extends MXDNSMSModel
{

    /*
    * Observe function
    */
    public static function wpAjax()
    {

        add_action( 'wp_ajax_mxdnsms_update', ['MXDNSMSMainAdminModel', 'update_settings'], 10, 1 );
        
    }

    /*
    * Prepare settings updating
    */
    public static function update_settings()
    {

        // Checked POST nonce is not empty
        if (empty($_POST['nonce'])) wp_die( '0' );

        // Checked or nonce match
        if (wp_verify_nonce($_POST['nonce'], 'mxdnsms_nonce_request')) {

            // update settings
            
            $countries = $_POST['countries'];            

            if( is_array( $countries ) ) {

                $countries_to_save = [];

                foreach ($countries as $value) {

                    array_push($countries_to_save, sanitize_text_field($value));
                    
                }

                update_option( 'mxdnsms_black_list', $countries_to_save );

            }            

        }

        wp_die();

    }

}
