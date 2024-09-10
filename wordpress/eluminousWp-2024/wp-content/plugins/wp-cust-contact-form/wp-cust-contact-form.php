<?php
/*
Plugin Name: Custom Contact Form
Plugin URI: http://example.com
Description: A simple contact form plugin.
Version: 1.0
Author: Your Name
Author URI: http://example.com
License: GPL2
*/
function scf_handle_form_submission() {
    if (isset($_POST['scf-submitted'])) {
        $name = sanitize_text_field($_POST['scf-name']);
        $email = sanitize_email($_POST['scf-email']);
        $message = sanitize_textarea_field($_POST['scf-message']);
        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission';
        $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";

        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<div class="scf-message">Thank you for your message!</div>';
        } else {
            echo '<div class="scf-message">An error occurred. Please try again later.</div>';
        }
    }
}

add_action('wp_head', 'scf_handle_form_submission');

function scf_contact_form() {
    ob_start();
    ?>
    <form action="" method="post" id="scf-contact-form">
        <p>
            <label for="scf-name">Name</label>
            <input type="text" name="scf-name" id="scf-name" required>
        </p>
        <p>
            <label for="scf-email">Email</label>
            <input type="email" name="scf-email" id="scf-email" required>
        </p>
        <p>
            <label for="scf-message">Message</label>
            <textarea name="scf-message" id="scf-message" required></textarea>
        </p>
        <p>
            <input type="submit" name="scf-submitted" value="Send">
        </p>
    </form>
    <?php
    return ob_get_clean();
}

add_shortcode('wp-cust-contact-form', 'scf_contact_form');

function scf_enqueue_styles() {
    wp_enqueue_style('wp-cust-contact-form', plugins_url('wp-cust-contact-form.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'scf_enqueue_styles');

