<?php
/**
 * Input type radio field for aiposts.
 *
 * @var $field_wrapper
 * @package wp-plugin
 */

$key_value = ap_option( $key_name );
?>
<div class="<?php esc_attr_e( $field_wrapper, 'aiposts' ); ?>">
	<div>
		<label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? ''; ?></label>
		<p><?= $field_desc ?? 'Short Description for label' ?></p>
	</div>
	<div class="ap-w-[200px]">
		<input class="!ap-px-2 !ap-py-1 ap-w-full" type="<?php echo $type ?? 'text'; ?>"
			name="<?php echo $key_name ?? ''; ?>" placeholder="<?php echo $placeholder ?? ''; ?>"
			value="<?= $key_value ?? '' ?>" />
	</div>
</div>
