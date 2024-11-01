<?php

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

/*
* Require class for admin panel
*/
function mxdnsmsRequireClassFileAdmin( $file ) {

    require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/admin/classes/' . $file;

}


/*
* Require class for frontend panel
*/
function mxdnsmsRequireClassFileFrontend( $file ) {

    require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/frontend/classes/' . $file;

}

/*
* Require a Model
*/
function mxdnsmsUseModel( $model ) {

    require_once MXDNSMS_PLUGIN_ABS_PATH . 'includes/admin/models/' . $model . '.php';

}

/*
* Debugging
*/
function mxdnsmsDebugToFile( $content ) {

    $content = mxdnsmsContentToString( $content );

    $path = MXDNSMS_PLUGIN_ABS_PATH . 'mx-debug' ;

    if (!file_exists($path)) {

        mkdir( $path, 0777, true );

        file_put_contents( $path . '/mx-debug.txt', $content );

    } else {

        file_put_contents( $path . '/mx-debug.txt', $content );

    }

}
    // pretty debug text to the file
    function mxdnsmsContentToString( $content ) {

        ob_start();

        var_dump( $content );

        return ob_get_clean();

    }

/*
* Manage posts columns. Add column to position
*/
function mxdnsmsInsertNewColumnToPosition( array $columns, int $position, array $newColumn ) {

    $chunkedArray = array_chunk( $columns, $position, true );

    $result = array_merge( $chunkedArray[0], $newColumn, $chunkedArray[1] );

    return $result;

}

/*
* Redirect from admin panel
*/
function mxdnsmsAdminRedirect( $url ) {

    if (!$url) return;

    add_action( 'admin_footer', function() use ( $url ) {
        echo "<script>window.location.href = '$url';</script>";
    } );

}

/*
* Get black list
*/
function mxdnsmsGetBlackList() {

    return maybe_unserialize( get_option('mxdnsms_black_list', []) );

}
