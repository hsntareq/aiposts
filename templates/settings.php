<div class="ap-h-full ap-m-[50px]">
    <div class="ap-flex ap-items-end ap-justify-between ap-w-full xl:ap-w-3/4 ap-pb-3">
        <div class="">
            <h1 class="ap-font-normal ap-text-2xl">AiPosts Options Child</h1>
            <small>These data will only save for <code class="ap-rounded-md">AiPosts</code> application
                management</small>
        </div>
        <!-- <button type="submit" form="settings_form" class="ap-bg-blue-500 ap-py-2 ap-px-4 ap-shadow-sm ap-text-white ap-rounded-md">Save</button> -->
        <button type="submit" form="settings_form" class="button button-primary !ap-py-1 !ap-px-6 !ap-text-lg ap-tracking-wider ap-shadow-sm !ap-rounded-md">Save</button>
    </div>
    <div class="ap-mt-5 ap-w-full  xl:ap-w-3/4 ap-flex ap-gap-10 ap-items-start">
        <nav class="ap-bg-gray-50 ap-px-5 ap-py-10 ap-w-[200px] ap-shadow-sm ap-border ap-rounded-md">
            <ul>
                <li>
                    <a class="ap-border-l ap-transition focus:ap-shadow-none ap-border-gray-400 ap-py-1 ap-mb-3
                    ap-px-4
                    ap-block
                    ap-text-sm
                    ap-font-semibold" href="#">General</a>
                </li>
                <li>
                    <a class="ap-border-l ap-transition focus:ap-shadow-none hover:ap-border-gray-400
                    ap-border-gray-50
                    ap-py-1
                    ap-mb-3
                    ap-px-4
                    ap-block
                    ap-text-sm
                    ap-font-semibold" href="#">About</a>
                </li>
                <li>
                    <a class="ap-border-l ap-transition focus:ap-shadow-none hover:ap-border-gray-400
                    ap-border-gray-50
                    ap-py-1
                    ap-mb-3
                    ap-px-4
                    ap-block
                    ap-text-sm
                    ap-font-semibold" href="#">Section</a>
                </li>
                <li>
                    <a class="ap-border-l ap-transition focus:ap-shadow-none hover:ap-border-gray-400
                    ap-border-gray-50
                    ap-py-1
                    ap-mb-3
                    ap-px-4
                    ap-block
                    ap-text-sm
                    ap-font-semibold" href="#">Miscellaneous</a>
                </li>
                <li>
                    <a class="ap-border-l ap-transition focus:ap-shadow-none hover:ap-border-gray-400
                    ap-border-gray-50
                    ap-py-1
                    ap-mb-3
                    ap-px-4
                    ap-block
                    ap-text-sm
                    ap-font-semibold" href="#">Tools Section</a>
                </li>
            </ul>
        </nav>
        <main class="ap-flex-1">

            <form id="settings_form" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                <input type="hidden" name="action" value="ap_settings_action" />
                <input type='hidden' name='redirect_to' value='<?php echo esc_url(add_query_arg('page', 'ap-settings', admin_url('admin.php'))); ?>'>

                <?php _get_template('fields/radio', [
                    'field_wrapper' => $field_wrapper_classes,
                    'label' => 'Radio Field',
                    'field_name' => 'ap_radio_test',
                    'options' => array(
                        'key1' => 'Key One', 'key2' => 'Key Two'
                    )
                ]); ?>

                <?php _get_template('fields/checkbox', [
                    'field_wrapper' => $field_wrapper_classes,
                    'label' => 'Checkbox Field',
                    'field_name' => 'ap_checkbox_test',
                    'options' => array('key1' => 'Key One', 'key2' => 'Key Two')
                ]); ?>

                <?php _get_template('fields/input', array(
                    'field_wrapper' => $field_wrapper_classes,
                    'label' => 'Open AI Key',
                    'field_desc' => 'Add key from: <a href="#" class="ap-text-blue-400 hover:ap-text-blue-500 ">Open AI Key</a> ',
                    'type' => 'text',
                    'key_name' => 'open_ai_key',
                    'placeholder' => 'Add open ai key.',
                )); ?>

                <?php _get_template('fields/input', array(
                    'field_wrapper' => $field_wrapper_classes,
                    'label' => 'Open AI Key',
                    'field_desc' => 'Add key from: <a href="#" class="ap-text-blue-400 hover:ap-text-blue-500 ">Open AI Key</a> ',
                    'type' => 'text',
                    'key_name' => 'open_ai_key',
                    'placeholder' => 'Add open ai key.',
                )); ?>

                <?php _get_template('fields/textarea', array(
                    'field_wrapper' => $field_wrapper_classes,
                    'label' => 'Open AI Textarea',
                    'field_desc' => 'Add key from: <a href="#" class="ap-text-blue-400 hover:ap-text-blue-500 ">Open AI textarea</a> ',
                    'key_name' => 'textarea',
                    'placeholder' => 'Add open ai textarea',
                )); ?>

                <?php _get_template('fields/select', [
                    'field_wrapper' => $field_wrapper_classes,
                    'type' => 'text'
                ]); ?>

            </form>
        </main>
    </div>
</div>