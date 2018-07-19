<?php
/*
Plugin Name: Easy Zip Update
Plugin URI: http://wordpress.org/
Description: Makes updating a Plugin or Theme from a Zip file easier. Just upload using WordPress' normal plugin/theme zip uploader. (Instead of deactivating it, deleting it, THEN uploading it, and reactivating it.)
Author: Mike Nelson
Version: 0.1
Author URI: https://cmljnelson.wordpress.com
*/
function ezu_replace( $options )
{
    $options['clear_destination'] = true;
    return $options;
}
add_filter(
    'upgrader_package_options',
    'ezu_replace'
);
