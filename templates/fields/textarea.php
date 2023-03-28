<?php
/**
 * Textarea field for aiposts.
 *
 * @var $field_wrapper
 * @package wp-plugin
 */

?>
<div class="<?php esc_attr_e( $field_wrapper, 'aiposts' ); ?>">
	<div>
		<label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? ''; ?></label>
		<p><?= $field_desc ?? 'Short Description for label' ?></p>
	</div>
	<div class="ap-w-[200px]">
		<textarea class="!ap-px-2 !ap-py-1 ap-w-full" name="<?php echo $key_name ?? ''; ?>"
			placeholder="<?php echo $placeholder ?? ''; ?>"></textarea>
	</div>
</div>
