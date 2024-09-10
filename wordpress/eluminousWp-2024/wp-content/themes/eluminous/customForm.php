<?php 

function create_custom_contact_table() {
    global $wpdb;// Access the global $wpdb object for database interactions
    $table_name = $wpdb->prefix . 'custom_contact_form';// Define the table name with the WordPress prefix
    $charset_collate = $wpdb->get_charset_collate();// Get the character set and collation for the database
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        email varchar(100) NOT NULL,
        message text NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); // Include the necessary file for dbDelta
    dbDelta($sql);// Execute the SQL statement to create the table
    // Log errors if table creation fails
    if ($wpdb->last_error) {
        error_log('Error creating custom contact form table: ' . $wpdb->last_error);// Log any errors
    }
}
add_action('init', 'create_custom_contact_table'); // Hook the function to the 'init' action to run it when WordPress initializes


function handle_custom_contact_form() {
    global $wpdb;// Access the global $wpdb object for database interactions
    if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {// Check if the form fields are set
        $name = sanitize_text_field($_POST['name']);// Sanitize the name field
        $email = sanitize_email($_POST['email']);// Sanitize the email field
        $message = sanitize_textarea_field($_POST['message']);// Sanitize the message field

        // Insert data into custom table
        $table_name = $wpdb->prefix . 'custom_contact_form';// Define the table name
        $wpdb->insert(
            $table_name,
            [
                'name' => $name,
                'email' => $email,
                'message' => $message,
            ]
        );

        // Redirect or display a thank you message
        // wp_redirect(home_url('/thank-you')); // Redirect to a thank you page (commented out)
        exit; // Exit to prevent further execution
    }
}
add_action('admin_post_custom_contact_form', 'handle_custom_contact_form');// Hook the function to handle form submission for logged-in users

// Add a new menu item to the admin panel

function custom_contact_menu() {
    add_menu_page(
        'Contact Form Submissions', // Page title
        'Contact Submissions', // Menu title
        'manage_options', // Capability required to access the menu
        'custom-contact-submissions', // Menu slug
        'custom_contact_submissions_page', // Function to display the page content
        'dashicons-email', // Icon for the menu
        26 // Position in the menu
    );
}
add_action('admin_menu', 'custom_contact_menu'); // Hook the function to the 'admin_menu' action to add the menu item


// Create the admin page to list submissions
function custom_contact_submissions_page() {
    global $wpdb; // Access the global $wpdb object for database interactions
    $table_name = $wpdb->prefix . 'custom_contact_form'; // Define the table name
    $submissions = $wpdb->get_results("SELECT * FROM $table_name"); // Get all submissions from the table

    echo '<div class="wrap">'; // Start the admin page wrapper
    echo '<h1>Contact Form Submissions</h1>'; // Page heading
    echo '<table class="widefat fixed" cellspacing="0">'; // Start the table
    echo '<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr></thead>'; // Table header
    echo '<tbody>'; // Start table body
    foreach ($submissions as $submission) { // Loop through each submission
        echo '<tr>'; // Start a table row
        echo '<td>' . esc_html($submission->id) . '</td>'; // Display the ID
        echo '<td>' . esc_html($submission->name) . '</td>'; // Display the name
        echo '<td>' . esc_html($submission->email) . '</td>'; // Display the email
        echo '<td>' . esc_html($submission->message) . '</td>'; // Display the message
        echo '</tr>'; // End the table row
    }
    echo '</tbody>'; // End table body
    echo '</table>'; // End the table
    echo '</div>'; // End the admin page wrapper
}

?>