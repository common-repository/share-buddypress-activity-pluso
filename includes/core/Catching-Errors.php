<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// require Display-Error.php
require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/core/error_handle/Display-Error.php';

// handle error
require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/core/error_handle/Error-Handle.php';

/*
* Cathing errors calss
*/
class MXDNSMSCatchingErrors
{

	/**
	* Show notification missing class or methods
	*/
	public static function catchClassAttributesError( $className, $method )
	{

		$errorClassInstance = new MXDNSMSErrorHandle();

		$errorDisplay = $errorClassInstance->classAttributesError( $className, $method );

		$error = NULL;

		if ($errorDisplay !== true) {
			$error = $errorDisplay;
		}		

		return $error;

	}

}
