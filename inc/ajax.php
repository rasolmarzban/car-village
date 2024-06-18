<?php

add_action('wp_ajax_calculate_operation', 'wp_calculate_operation_ajax_handler');


function wp_calculate_operation_ajax_handler()
{
    $num1 = $_POST['numbOne'];
    $num2 = $_POST['numbTwo'];

    $wpcurrent_user = wp_get_current_user();

    wp_send_json([
        'success' => true,
        'message' => $num1 + $num2,
        'ID' => $wpcurrent_user->ID
    ]);
}
