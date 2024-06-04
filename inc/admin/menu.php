<?php

add_action('admin_menu', 'carvillage_admin_menu');

function carvillage_admin_menu()
{
    add_menu_page(
        'CarVillage_Menu',
        'CarVillage Admin',
        'manage_options',
        'carvillage_menu_slug',
        'carvillage_menu_callback',
    );
    add_submenu_page(
        'carvillage_menu_slug',
        'CarVillage_AddNew',
        'CarVillage AddNew',
        'manage_options',
        'carvillage_menu-AddNew_slug',
        'carvillage_menu_callback_AddNew',
    );
}

function carvillage_menu_callback()
{
    global $wpdb;


    $getAction = $_GET['action'];

    if ($getAction == "delete") {
        $item = intval($_GET['item']);
        if ($item > 0) {
            $wpdb->delete($wpdb->prefix . 'car_village', ['car_id' => $item]);
        }
    }

    if ($getAction == "add") {
        include     include PLUGIN_TMP . 'admin/addnew.php';
    }

    if ($getAction == "update") {

        include PLUGIN_TMP . 'admin/update.php';

        if (isset($_POST['saveData'])) {
            $input_date = $_POST['build_date']; // Get the date value from the form


            $input_date = date('Y-m-d', strtotime($input_date)); // Convert the date to MySQL date format


            $wpdb->update(
                $wpdb->prefix . 'car_village',
                array(
                    'car_brand' => $_POST['car_brand'],
                    'car_model' => $_POST['car_model'],
                    'car-type' => $_POST['car-type'],
                    'car_transmission' => $_POST['car_transmission'],
                    'car_type_fuel' => $_POST['car_type_fuel'],
                    'car_color' => $_POST['car_color'],
                    'car_tire_situation' => $_POST['car_tire_situation'],
                    'build_date' => $input_date, // Insert the formatted date
                    'insurance_status' => $_POST['insurance_status'],
                    'car_price' => $_POST['car_price'],
                    'car_body_situation' => $_POST['car_body_situation'],
                ),

                array('car_id' => $item)

            );
        }
    } else {
        $getData = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}car_village");

        include PLUGIN_TMP . 'admin/main.php';
    }
}
function carvillage_menu_callback_AddNew()
{
    global $wpdb;
    if (isset($_POST['saveData'])) {
        $input_date = $_POST['build_date']; // Get the date value from the form


        $input_date = date('Y-m-d', strtotime($input_date)); // Convert the date to MySQL date format


        $wpdb->insert($wpdb->prefix . 'car_village', [
            'car_brand' => $_POST['car_brand'],
            'car_model' => $_POST['car_model'],
            'car-type' => $_POST['car-type'],
            'car_transmission' => $_POST['car_transmission'],
            'car_type_fuel' => $_POST['car_type_fuel'],
            'car_color' => $_POST['car_color'],
            'car_tire_situation' => $_POST['car_tire_situation'],
            'build_date' => $input_date, // Insert the formatted date
            'insurance_status' => $_POST['insurance_status'],
            'car_price' => $_POST['car_price'],
            'car_body_situation' => $_POST['car_body_situation'],
        ]);
    }
    include PLUGIN_TMP . 'admin/addnew.php';
}
