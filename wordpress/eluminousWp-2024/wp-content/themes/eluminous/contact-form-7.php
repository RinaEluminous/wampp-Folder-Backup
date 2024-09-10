<?php
/**
 * Plugin Name: Display Contact Form Entries
 * Description: Displays entries from your Contact Form 7.
 * Author: [Your Name]
 * Version: 1.0
 * 
 */

// Database access functions
global $wpdb;
$table_name = $wpdb->prefix . 'wpcf7_submit'; // Table name from Contact Form 7 Database Addon

// Fetch data from the database
$results = $wpdb->get_results("SELECT * FROM $table_name WHERE form_id = 'contact_form_1'"); 

// Display entries in the admin panel
echo '<h2>Contact Form Entries</h2>';
echo '<table class="widefat">';
echo '<thead><tr><th>Name</th><th>Email</th><th>Mobile Number</th><th>Job Description</th><th>Job Role</th></tr></thead>';
echo '<tbody>';

// Loop through the fetched data
if (!empty($results)) {
   foreach ($results as $entry) {
      // Extract the data from each entry
      $name = maybe_unserialize($entry->data)['your-name']; // Example field, adjust based on your form
      $email = maybe_unserialize($entry->data)['your-email'];
      $mobile = maybe_unserialize($entry->data)['number-513'];
      $description = maybe_unserialize($entry->data)['file-646'];
      $jobRole = maybe_unserialize($entry->data)['textarea-60'];

      echo '<tr>';
      echo '<td>' . esc_html($name) . '</td>';
      echo '<td>' . esc_html($email) . '</td>';
      echo '<td>' . esc_html($mobile) . '</td>';
      echo '<td>' . esc_html($description) . '</td>';
      echo '<td>' . esc_html($jobRole) . '</td>';
      echo '</tr>';
   }
} else {
   echo '<tr><td colspan="6">No entries found.</td></tr>';
}
echo '</tbody></table>';

/**
 * Plugin Name: Display Contact Form Entries
 * Description: Displays entries from your Contact Form 7.
 * Author: [Your Name]
 * Version: 1.0
 * 
 */

// Database access functions
global $wpdb;
$table_name = $wpdb->prefix . 'wpcf7_submit'; // Table name from Contact Form 7 Database Addon

// Add a menu page for the plugin
add_action('admin_menu', 'display_contact_form_entries_menu');
function display_contact_form_entries_menu() {
    add_menu_page('Contact Form Entries', 'Contact Entries', 'manage_options', 'display-contact-form-entries', 'display_contact_form_entries_page');
}

// Display the entries on the admin page
function display_contact_form_entries_page() {
    // Fetch data from the database
    $results = $wpdb->get_results("SELECT * FROM $table_name WHERE form_id = 'contact_form_1'"); 

    // Display entries in the admin panel
    echo '<h2>Contact Form Entries</h2>';
    echo '<table class="widefat">';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Mobile Number</th><th>Job Description</th><th>Job Role</th></tr></thead>';
    echo '<tbody>';

    // Loop through the fetched data
    if (!empty($results)) {
        foreach ($results as $entry) {
            // Extract the data from each entry
            $name = maybe_unserialize($entry->data)['your-name']; // Example field, adjust based on your form
            $email = maybe_unserialize($entry->data)['your-email'];
            $mobile = maybe_unserialize($entry->data)['number-513'];
            $description = maybe_unserialize($entry->data)['file-646'];
            $jobRole = maybe_unserialize($entry->data)['textarea-60'];

            echo '<tr>';
            echo '<td>' . esc_html($name) . '</td>';
            echo '<td>' . esc_html($email) . '</td>';
            echo '<td>' . esc_html($mobile) . '</td>';
            echo '<td>' . esc_html($description) . '</td>';
            echo '<td>' . esc_html($jobRole) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="6">No entries found.</td></tr>';
    }
    echo '</tbody></table>';
}
?>