<div class="wrap">
    <h1>DATA LISTS</h1>
    <a href="admin.php?page=carvillage_menu-AddNew_slug">
        <input type="submit" class="button button-primary" value="ADD NEW" style="margin: 30px 10px;">
    </a>
    <br></br>
    <button id="sendAjaxrequest" class="button">Send a Request</button>
    <br></br>
    <table class="widefat">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Type</th>
                <th>Transmission</th>
                <th>Fuel</th>
                <th>Color</th>
                <th>Tires Situation</th>
                <th>Build Date</th>
                <th>Insurance Status</th>
                <th>Price</th>
                <th>Body Situation</th>
                <th>Mission</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getData as $getdata) : ?>
                <tr>
                    <td><?php echo $getdata->car_id; ?></td>
                    <td><?php echo $getdata->car_brand; ?></td>
                    <td><?php echo $getdata->car_model; ?></td>
                    <td><?php echo $getdata->car_type; ?></td>
                    <td><?php echo $getdata->car_transmission; ?></td>
                    <td><?php echo $getdata->car_type_fuel; ?></td>
                    <td><?php echo $getdata->car_color; ?></td>
                    <td><?php echo $getdata->car_tire_situation; ?></td>
                    <td><?php echo $getdata->build_date; ?></td>
                    <td><?php echo $getdata->insurance_status; ?></td>
                    <td><?php echo $getdata->car_price; ?></td>
                    <td><?php echo $getdata->car_body_situation; ?></td>
                    <td>
                        <a href="<?php echo add_query_arg(['action' => 'delete', 'item' => $getdata->car_id]) ?>"><span class="dashicons dashicons-trash"></span></a>
                        <a href="<?php echo add_query_arg(['action' => 'update', 'item' => $getdata->car_id]) ?>"><span class="dashicons dashicons-edit"></span></a>
                    </td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>