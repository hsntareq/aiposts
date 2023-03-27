<?php $key_value = ap_option($key_name); ?>
<div class="<?= $field_wrapper ?>">
    <div>
        <label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? ''; ?></label>
        <p><?= $field_desc ?? 'Short Description for label' ?></p>
    </div>
    <div class="ap-w-[200px]">
        <input class="!ap-px-2 !ap-py-1 ap-w-full" type="<?php echo $type ?? 'text'; ?>" name="<?php echo $key_name ?? ''; ?>" placeholder="<?php echo $placeholder ?? ''; ?>" value="<?= $key_value ?? '' ?>" />
    </div>
</div>