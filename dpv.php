<?php
/**
Plugin Name: Display PHP Version
Description: Displays the current PHP version in the "At a Glance" admin dashboard widget.
Version: 1.0.0
Author: Manuel Burghammer
Author URI: https://xitara.net
 */

function dpv_enqueue_script($hook)
{
    if ('index.php' != $hook) {
        return;
    }

    wp_enqueue_script('dpv_script', plugin_dir_url(__FILE__) . 'dpv.js');
    wp_localize_script('dpv_script', 'dpvObj', array(
        'phpVersion' => phpversion(),
        'mysqlVersion' => $GLOBALS['wpdb']->dbh->server_info,
    ));
}

add_action('admin_enqueue_scripts', 'dpv_enqueue_script');
