<?php

/**
 * @package CarVillage      
 */
/*
Plugin Name: Addon Plugin For Theme
Plugin URI: https://github.com/rasolmarzban/carvillage.git
Description: This Plug for every change the customer wanna do in the website
Version: 0.0.1
Requires at least: 0.0.1
Requires PHP: 5.6.20
Author: Rasoul Marzban
Author URI: https://github.com/rasolmarzban
License: nothing
Text Domain: carvillage
*/
// Make sure we don't expose any info if called directly

define('PLUGIN_DIR', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_INC', PLUGIN_DIR . 'inc/');
define('PLUGIN_TMP', PLUGIN_DIR . 'tmp/');

function carvillage_activation()
{
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE `{$wpdb->base_prefix}car_village` (
      car_id int(11) NOT NULL AUTO_INCREMENT,
      car_brand varchar(55) DEFAULT '' NOT NULL,
      car_model varchar(55) DEFAULT '' NOT NULL,
      car_type varchar(55) DEFAULT '' NOT NULL,
      car_transmission varchar(55) DEFAULT '' NOT NULL,
      car_type_fuel varchar(55) DEFAULT '' NOT NULL,
      car_color varchar(55) DEFAULT '' NOT NULL,
      car_tire_situation varchar(55) DEFAULT '' NOT NULL,
      build_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      insurance_status varchar(55) DEFAULT '' NOT NULL,
      car_price varchar(55) DEFAULT '' NOT NULL,
      car_body_situation varchar(55) DEFAULT '' NOT NULL,
      PRIMARY KEY  (car_id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
function carvillage_deactivation()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'car_village';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
}
register_activation_hook(__FILE__, 'carvillage_activation');
register_deactivation_hook(__FILE__, 'carvillage_deactivation');

if (is_admin()) {
    include PLUGIN_INC . 'admin/menu.php';
} else {
    include PLUGIN_INC . 'users/menu.php';
}

include PLUGIN_INC . 'common/public.php';
