<?php
function custom_cf7_shortcode($atts) {
    $atts = shortcode_atts(array('id' => ''), $atts, 'contact_form');
    $post_id = $atts['id'];
    if (!$post_id) {
        return 'Form ID not provided';
    }

    $fields = get_post_meta($post_id, '_custom_cf7_fields', true);

    ob_start();
    ?>
    <form method="post">
        <p>
            <label for="your-name">Your name</label>
            <input type="text" name="your-name" value="<?php echo esc_attr($fields['your-name']); ?>" required />
        </p>
        <p>
            <label for="your-email">Your email</label>
            <input type="email" name="your-email" value="<?php echo esc_attr($fields['your-email']); ?>" required />
        </p>
        <p>
            <label for="your-subject">Subject</label>
            <input type="text" name="your-subject" value="<?php echo esc_attr($fields['your-subject']); ?>" required />
        </p>
        <p>
            <label for="your-message">Your message (optional)</label>
            <textarea name="your-message"><?php echo esc_textarea($fields['your-message']); ?></textarea>
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_form', 'custom_cf7_shortcode');


function custom_cf7_handle_submission() {
    if (isset($_POST['your-name']) && isset($_POST['your-email'])) {
        $name = sanitize_text_field($_POST['your-name']);
        $email = sanitize_email($_POST['your-email']);
        $subject = sanitize_text_field($_POST['your-subject']);
        $message = sanitize_textarea_field($_POST['your-message']);

        wp_mail(get_option('admin_email'), $subject, $message, 'From: ' . $name . ' <' . $email . '>');

        echo '<p>Thank you for your submission!</p>';
    }
}
add_action('init', 'custom_cf7_handle_submission');
