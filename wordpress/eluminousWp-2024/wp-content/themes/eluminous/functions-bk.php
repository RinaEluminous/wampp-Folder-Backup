
<?php
// //Menu Register
// function menu_register(){
			
//     register_nav_menus(
//         array(
//             'primary-menu' => __('Primary Menu'),
//             'headre-button-menu' => __('Main Menu Right Button')
//         )
//     );
// }

// add_action('init','menu_register');


// // Add Li Class
// function add_additional_class_on_li($classes, $item, $args) {
//     if(isset($args->add_li_class)) {
//         $classes[] = $args->add_li_class;
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// // Add a Class
// function add_additional_class_on_a($classes, $item, $args)
// {
//     if (isset($args->add_a_class)) {
//         $classes['class'] = $args->add_a_class;
//     }
//     return $classes;
//   }

// add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

//add custom.js file 
// print_r(get_template_directory_uri() . '/js/custom.js');
// die();

function custom_scripts() {
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'custom_scripts');

//register widget in admin pannel 
function my_custom_sidebars() {
    register_sidebar(
        array(
            'name' => "Sidebar Location",
            'id' => 'sidebar'
           
        )
    );
}

add_action( 'widgets_init', 'my_custom_sidebars' );

//code for contact form 7 entries saves
// Register Custom Post Type for Contact Form Entries
function create_contact_form_entry_cpt() {
    $labels = array(
        'name'                  => _x( 'Contact Form Entries', 'Post Type General Name', 'textdomain' ),
        'singular_name'         => _x( 'Contact Form Entry', 'Post Type Singular Name', 'textdomain' ),
        'menu_name'             => __( 'Contact Form Entries', 'textdomain' ),
        'name_admin_bar'        => __( 'Contact Form Entry', 'textdomain' ),
        'archives'              => __( 'Entry Archives', 'textdomain' ),
        'attributes'            => __( 'Entry Attributes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Entry:', 'textdomain' ),
        'all_items'             => __( 'All Entries', 'textdomain' ),
        'add_new_item'          => __( 'Add New Entry', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'new_item'              => __( 'New Entry', 'textdomain' ),
        'edit_item'             => __( 'Edit Entry', 'textdomain' ),
        'update_item'           => __( 'Update Entry', 'textdomain' ),
        'view_item'             => __( 'View Entry', 'textdomain' ),
        'view_items'            => __( 'View Entries', 'textdomain' ),
        'search_items'          => __( 'Search Entry', 'textdomain' ),
        'not_found'             => __( 'Not found', 'textdomain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'textdomain' ),
        'featured_image'        => __( 'Featured Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set featured image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as featured image', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into entry', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this entry', 'textdomain' ),
        'items_list'            => __( 'Entries list', 'textdomain' ),
        'items_list_navigation' => __( 'Entries list navigation', 'textdomain' ),
        'filter_items_list'     => __( 'Filter entries list', 'textdomain' ),
    );
    $args = array(
        'label'                 => __( 'Contact Form Entry', 'textdomain' ),
        'description'           => __( 'Entries from contact forms', 'textdomain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'custom-fields' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
    );
    register_post_type( 'contact_form_entry', $args );
}
add_action( 'init', 'create_contact_form_entry_cpt', 0 );


// Hook into Contact Form 7 Submission
function save_contact_form_entry( $contact_form ) {
    $submission = WPCF7_Submission::get_instance();
    if ( $submission ) {
        $data = $submission->get_posted_data();
        $title = isset( $data['your-subject'] ) ? sanitize_text_field( $data['your-subject'] ) : 'Contact Details';
        $content = '';
        foreach ( $data as $key => $value ) {
            if ( !is_array( $value ) ) {
                $content .= $key . ': ' . sanitize_text_field( $value ) . "\n";
            } else {
                $content .= $key . ': ' . implode( ', ', array_map( 'sanitize_text_field', $value ) ) . "\n";
            }
        }
        // Save as a custom post type
        $post_data = array(
            'post_title'    => $title,
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'contact_form_entry',
        );
        $post_id = wp_insert_post( $post_data );

        // Save custom fields
        if ( isset( $data['your-number'] ) ) {
            update_post_meta( $post_id, 'contact_number', sanitize_text_field( $data['your-number'] ) );
        }
        if ( isset( $data['your-email'] ) ) {
            update_post_meta( $post_id, 'contact_email', sanitize_email( $data['your-email'] ) );
        }
    }
}
add_action( 'wpcf7_before_send_mail', 'save_contact_form_entry');

// Add custom columns to the Contact Form Entries list table
function set_custom_edit_contact_form_entry_columns($columns) {
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __('Subject'),
        'contact_number' => __('Number'),
        'contact_email' => __('Email'),
        'message' => __('Message'),
        'date' => __('Date')
    );
    return $columns;
}
add_filter('manage_contact_form_entry_posts_columns', 'set_custom_edit_contact_form_entry_columns');

// Populate custom columns with data
function custom_contact_form_entry_column($column, $post_id) {
    switch ($column) {
        case 'contact_number':
            echo esc_html(get_post_meta($post_id, 'contact_number', true));
            break;
        case 'contact_email':
            echo esc_html(get_post_meta($post_id, 'contact_email', true));
            break;
        case 'message':
            $post = get_post($post_id);
            $content = $post->post_content;
            echo wp_trim_words($content, 20, '...');
            break;
    }
}

add_action('manage_contact_form_entry_posts_custom_column', 'custom_contact_form_entry_column', 10, 2);

?> 