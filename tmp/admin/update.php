<div class="wrap">
    <h1>Add New Items</h1>
    <?php
    global $wpdb;
    $getData = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}car_village");
    $item = intval($_GET['item']);
    $getAction = $_GET['action'];
    ?>
    <?php foreach ($getData as $getdata) :;

        if ($item == $getdata->car_id) {
    ?>

            <form method="post">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Brand</th>
                        <td>
                            <input type="text" name="car_brand" value="<?php echo $getdata->car_brand; ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Model</th>
                        <td>
                            <input type="text" name="car_model" value="<?php echo $getdata->car_model; ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Type</th>
                        <td>
                            <select name="car_type" class="form-control">
                                <option value="">--Please Select--</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Transmission</th>
                        <td>
                            <select name="car_transmission">
                                <option value="">--Please Select--</option>
                                <option value="Gear">Gear</option>
                                <option value="Auto">Auto</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Fuel</th>
                        <td>
                            <select name="car_type_fuel">
                                <option value="">--Please Select--</option>
                                <option value="gas">Gas</option>
                                <option value="gasoline">Gasoline</option>
                                <option value="diesel">Diesel</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">color</th>
                        <td>
                            <input type="text" name="car_color" value="<?php echo $getdata->car_color; ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Tires Situation</th>
                        <td>
                            <input type="range" name="car_tire_situation" value="<?php echo $getdata->car_tire_situation; ?>" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
                            <output>24</output>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Build Date</th>
                        <td>
                            <input type="date" name="build_date" value="<?php echo $getdata->build_date; ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Insurance Status</th>
                        <td>
                            <select name="insurance_status">
                                <option value="">--Please Select--</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Price</th>
                        <td>
                            <input type="text" name="car_price" value="<?php echo $getdata->car_price; ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Body Situation</th>
                        <td>
                            <select name="car_body_situation">
                                <option value="">--Please Select--</option>
                                <option value="Healthy">Healthy</option>
                                <option value="Scratches">Scratches</option>
                                <option value="Colored">Colored</option>
                                <option value="Colored&Scratches">Colored & Scratches</option>
                            </select>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row"></th>
                        <td>
                            <script>
                                function success() {
                                    alert("success!");
                                }
                            </script>
                            <input type="submit" onclick=success() class="button" name="saveData" value="Save Changes">
                        </td>
                    </tr>
                </table>
            </form>
        <?php }
        ?>
    <?php endforeach; ?>
</div>