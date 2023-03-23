<div class="ap-flex ap-items-center ap-justify-between ap-py-3 ap-pl-5 ap-pr-6
        ap-rounded-md hover:ap-shadow ap-shadow-sm ap-transition hover:ap-cursor-pointer ap-border ap-bg-gray-50 ap-mb-5 ap-gap-5">
    <div>
        <label class="ap-font-semibold ap-text-lg" for=""><?php echo $label ?? 'Field Label'; ?></label>
        <p>Short Description for label</p>
    </div>
    <div>
        <?php foreach ($options as $key => $option) : ?>
            <label>
                <span><?= $option; ?></span>
                <input type="radio" name="name[]" value="<?= $key; ?>" />
            </label>
        <?php endforeach; ?>
    </div>
</div>