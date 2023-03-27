<div class="<?= $field_wrapper ?>">
    <div>
        <label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? ''; ?></label>
        <p><?= $field_desc ?? 'Short Description for label' ?></p>
    </div>
    <div class="ap-w-[200px]">
        <textarea class="!ap-px-2 !ap-py-1 ap-w-full" name="<?php echo $key_name ?? ''; ?>" placeholder="<?php echo $placeholder ?? ''; ?>"></textarea>
    </div>
</div>