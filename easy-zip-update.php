<?php
/*
Plugin Name: Easy Zip Update
Plugin URI: https://cmljnelson.wordpress.com
Description: Simplifies updating plugins and themes using a zip file. Once this plugin is active, to update a plugin, go to "Plugins", then "Add New", then "Upload Plugin". The uploaded plugin will be updated, no need to deactivate it, delete it, and reactivate it. Please note: this is BETA software. Use at your own risk.
Author: Mike Nelson
Version: 0.1.1
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
