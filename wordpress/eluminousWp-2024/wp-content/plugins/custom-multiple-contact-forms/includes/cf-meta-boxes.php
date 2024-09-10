<?php
// Add meta box for custom fields
function custom_cf7_add_meta_box() {
    add_meta_box(
        'custom_cf7_meta_box',
        'Form Fields',
        'custom_cf7_meta_box_callback',
        'custom_cf7',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'custom_cf7_add_meta_box');

function custom_cf7_meta_box_callback($post) {
    wp_nonce_field('custom_cf7_save_meta_box_data', 'custom_cf7_meta_box_nonce');
    $fields = get_post_meta($post->ID, '_custom_cf7_fields', true);

    // Form fields (add more fields as needed)
    ?>
    <label> Your name
        <input type="text" name="your-name" value="<?php echo esc_attr($fields['your-name'] ?? ''); ?>" autocomplete="name" />
    </label><br>

    <label> Your email
        <input type="email" name="your-email" value="<?php echo esc_attr($fields['your-email'] ?? ''); ?>" autocomplete="email" />
    </label><br>

    <label> Subject
        <input type="text" name="your-subject" value="<?php echo esc_attr($fields['your-subject'] ?? ''); ?>" />
    </label><br>

    <label> Your message (optional)
        <textarea name="your-message"><?php echo esc_textarea($fields['your-message'] ?? ''); ?></textarea>
    </label><br>

    <label> Submit Button
        <input type="submit" value="Submit" />
    </label><br>
    <?php
}

function custom_cf7_save_meta_box_data($post_id) {
    if (!isset($_POST['custom_cf7_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_cf7_meta_box_nonce'], 'custom_cf7_save_meta_box_data')) {
        return;
    }

    $fields = array(
        'your-name' => sanitize_text_field($_POST['your-name']),
        'your-email' => sanitize_email($_POST['your-email']),
        'your-subject' => sanitize_text_field($_POST['your-subject']),
        'your-message' => sanitize_textarea_field($_POST['your-message']),
    );

    update_post_meta($post_id, '_custom_cf7_fields', $fields);
}
add_action('save_post', 'custom_cf7_save_meta_box_data');
