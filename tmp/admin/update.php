<div class="wrap">
    <h1>You can edit the car when you select the edit buttom on all cars page!</h1>
</div>
<div class="wrap">
    <h1>Welcome to Car Village</h1>


    <form action="" method="post">

        <label for="checksum">
            <input name="checksum" type="checkbox" id="checksum" <?php echo isset($checkbox_status_carvillvage) && intval($checkbox_status_carvillvage) > 0 ? 'checked' : ''; ?>>
        </label>
        <button class="button button-primary" type="submit" name="saveSettings">Save Settings</button>
    </form>
</div>