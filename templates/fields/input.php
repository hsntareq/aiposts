<div class="ap-flex ap-items-center ap-justify-between ap-py-3 ap-pl-5 ap-pr-6
        ap-rounded-md hover:ap-shadow ap-shadow-sm ap-transition hover:ap-cursor-pointer ap-border ap-bg-gray-50 ap-mb-5 ap-gap-5">
    <div>
        <label class="ap-font-semibold ap-text-lg" for=""><?php echo $label ?? ''; ?></label>
        <p><?= $field_desc ?? 'Short Description for label' ?></p>
    </div>
    <div>
        <input type="<?php echo $type ?? 'text'; ?>" name="<?php echo $key_name ?? ''; ?>" placeholder="<?php echo $placeholder ?? ''; ?>" />
    </div>
</div>