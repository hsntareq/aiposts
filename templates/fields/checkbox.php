<div class="<?= $field_wrapper ?>">
    <div>
        <label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? 'Field Label'; ?></label>
        <p><?= $field_desc ?? 'Short Description for label' ?></p>
    </div>
    <div>
        <?php foreach ($options as $key => $option) : ?>
            <label>
                <span><?= $option; ?></span>
                <input type="checkbox" name="ap_checkbox_test[<?= $key; ?>]" value="<?= $key; ?>" />
            </label>
        <?php endforeach; ?>
    </div>
</div>