<?php
/*
Plugin Name: Multiple Forms Generator
Description: A plugin to create multiple forms dynamically with various field types.
Version: 1.0
Author: Your Name
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Register the custom post type for forms
function mfg_register_form_post_type() {
    $labels = array(
        'name' => 'Multiple Forms Generator',
        'singular_name' => 'Form',
        'add_new' => 'Add New Form',
        'add_new_item' => 'Add New Form',
        'edit_item' => 'Edit Form',
        'new_item' => 'New Form',
        'view_item' => 'View Form',
        'search_items' => 'Search Forms',
        'not_found' => 'No Forms found',
        'not_found_in_trash' => 'No Forms found in Trash',
        'menu_name' => 'Multiple Forms Generator',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 25,
        'supports' => array('title'),
    );

    register_post_type('mfg_form', $args);
}
add_action('init', 'mfg_register_form_post_type');

// Add meta box for form builder
function mfg_add_meta_box() {
    add_meta_box(
        'mfg_form_builder',
        'Form Builder',
        'mfg_form_builder_callback',
        'mfg_form',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'mfg_add_meta_box');

// Meta Box Callback Function: This is where the form code is saved.
function mfg_form_builder_callback($post) {
    wp_nonce_field('mfg_save_form_builder_data', 'mfg_form_builder_nonce');
    $form_code = get_post_meta($post->ID, '_mfg_form_code', true);
    ?>

    <div id="mfg-form-builder">
        <button type="button" class="button add-field-button" data-field-code="[text your-name]">Text</button>
        <button type="button" class="button add-field-button" data-field-code="[email your-email]">Email</button>
        <button type="button" class="button add-field-button" data-field-code="[url your-url]">URL</button>
        <button type="button" class="button add-field-button" data-field-code="[tel your-tel]">Tel</button>
        <button type="button" class="button add-field-button" data-field-code="[date your-date]">Date</button>
        <button type="button" class="button add-field-button" data-field-code="[textarea your-textarea]">Textarea</button>
        <button type="button" class="button add-field-button" data-field-code="[dropdown your-dropdown option1,option2]">Dropdown</button>
        <button type="button" class="button add-field-button" data-field-code="[checkbox your-checkbox value]">Checkbox</button>
        <button type="button" class="button add-field-button" data-field-code="[radio your-radio value]">Radio</button>
        <button type="button" class="button add-field-button" data-field-code="[acceptance your-acceptance]">Acceptance</button>
        <button type="button" class="button add-field-button" data-field-code="[quiz your-quiz question=What is 2+2? answer=4]">Quiz</button>
        <button type="button" class="button add-field-button" data-field-code="[file your-file]">File</button>
        <button type="button" class="button add-field-button" data-field-code="[submit]">Submit</button>
        
        <textarea id="form-editor" name="mfg_form_code" rows="10" style="width:100%;"><?php echo esc_textarea($form_code); ?></textarea>
    </div>

    <script>
        jQuery(document).ready(function($) {
            $('.add-field-button').on('click', function() {
                var fieldCode = $(this).data('field-code');
                var editor = $('#form-editor');
                editor.val(editor.val() + "\n" + fieldCode);
            });
        });
    </script>

    <?php
}

// Save the form code when the post is saved
function mfg_save_form_builder_data($post_id) {
    if (!isset($_POST['mfg_form_builder_nonce']) || !wp_verify_nonce($_POST['mfg_form_builder_nonce'], 'mfg_save_form_builder_data')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['mfg_form_code'])) {
        update_post_meta($post_id, '_mfg_form_code', sanitize_textarea_field($_POST['mfg_form_code']));
    }
}
add_action('save_post', 'mfg_save_form_builder_data');

// Render the form from shortcode
function mfg_render_custom_form($atts) {
    $atts = shortcode_atts(array(
        'id' => '',    // Form ID
        'title' => '', // Form Title
    ), $atts);

    // Ensure ID is provided
    if (empty($atts['id'])) {
        return 'Form ID is missing.';
    }

    // Retrieve the form code using the form ID
    $form_code = get_post_meta($atts['id'], '_mfg_form_code', true);

    // Ensure the form code exists
    if (empty($form_code)) {
        return 'Form not found.';
    }

    // Optionally display the form title
    $form_output = '';
    if (!empty($atts['title'])) {
        $form_output .= '<h3>' . esc_html($atts['title']) . '</h3>';
    }

    // Render the form with form fields wrapped in a form tag
    $form_output .= '<form method="post" enctype="multipart/form-data">' . do_shortcode($form_code);

    // Add a submit button to the form if not included in the form code
    if (strpos($form_code, '[submit]') === false) {
        $form_output .= '<button type="submit">Submit</button>';
    }

    // Close the form tag
    $form_output .= '</form>';

    return $form_output;
}
add_shortcode('mfg_form', 'mfg_render_custom_form');

// Handle form submission with validation
function mfg_handle_form_submission() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = array();

        // Example validation for different fields
        if (empty($_POST['your-name'])) {
            $errors[] = 'Name is required.';
        }

        if (empty($_POST['your-email'])) {
            $errors[] = 'Email is required.';
        } elseif (!filter_var($_POST['your-email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format.';
        }

        if (isset($_POST['your-url']) && !empty($_POST['your-url']) && !filter_var($_POST['your-url'], FILTER_VALIDATE_URL)) {
            $errors[] = 'Invalid URL format.';
        }

        // Validate other fields similarly...

        if (!empty($errors)) {
            // Display errors
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . esc_html($error) . '</li>';
            }
            echo '</ul>';
        } else {
            // Process the form (e.g., send email, save to database)
            $to = 'you@example.com';
            $subject = 'New Form Submission';
            $message = 'You have received a new form submission.';
            wp_mail($to, $subject, $message);

            // Redirect or display a thank you message
            echo '<p>Thank you for your submission!</p>';
        }
    }
}
add_action('wp', 'mfg_handle_form_submission');

// Add custom column to the form post type list
function mfg_add_shortcode_column($columns) {
    $columns['shortcode'] = 'Shortcode';
    return $columns;
}
add_filter('manage_mfg_form_posts_columns', 'mfg_add_shortcode_column');

// Display shortcode in the custom column
function mfg_show_shortcode_column($column, $post_id) {
    if ($column === 'shortcode') {
        $shortcode = '[mfg_form id="' . $post_id . '"]';
        echo esc_html($shortcode);
    }
}
add_action('manage_mfg_form_posts_custom_column', 'mfg_show_shortcode_column', 10, 2);
