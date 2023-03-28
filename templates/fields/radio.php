<?php
/**
 * Input type radio field for aiposts.
 *
 * @var $field_wrapper
 * @package wp-plugin
 */

?>
<div class="<?php esc_attr_e( $field_wrapper, 'aiposts' ); ?>">
	<div>
		<label class="ap-font-medium ap-text-lg" for=""><?php echo $label ?? 'Field Label'; ?></label>
		<p><?= $field_desc ?? 'Short Description for label' ?></p>
	</div>
	<div>
		<?php foreach ( $options as $key => $option ) : ?>
			<label>
				<span><?= $option; ?></span>
				<input type="radio" name="<?= $ap_radio_test ?? 'ap_radiobutton' ?>[]" value="<?= $key; ?>" />
			</label>
		<?php endforeach; ?>
	</div>
</div>
