<?php
// Register custom post type for contact forms
function custom_cf7_post_type() {
    $labels = array(
        'name' => 'Forms',
        'singular_name' => 'Form',
        'add_new' => 'Add New Form',
        'add_new_item' => 'Add New Form',
        'edit_item' => 'Edit Form',
        'new_item' => 'New Form',
        'view_item' => 'View Form',
        'search_items' => 'Search Forms',
        'not_found' => 'No Forms found',
        'not_found_in_trash' => 'No Forms found in Trash',
        'menu_name' => 'Multiple Forms',
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

    register_post_type('custom_cf7', $args);
}

add_action('init', 'custom_cf7_post_type');

// Add custom columns to the admin list table
function custom_cf_add_columns($columns) {
    $columns['shortcode'] = 'Shortcode';
    return $columns;
}
add_filter('manage_custom_cf_posts_columns', 'custom_cf_add_columns');

// Populate the custom column with content
function custom_cf_custom_column_content($column, $post_id) {
    if ($column == 'shortcode') {
        echo '[contact_form id="' . $post_id . '"]';
    }
}
add_action('manage_custom_cf_posts_custom_column', 'custom_cf_custom_column_content', 10, 2);

// Make the shortcode column sortable
function custom_cf_sortable_columns($columns) {
    $columns['shortcode'] = 'shortcode';
    return $columns;
}
add_filter('manage_edit-custom_cf_sortable_columns', 'custom_cf_sortable_columns');

// Add custom styles for the admin list table
function custom_cf_admin_styles() {
    echo '<style>
        .column-shortcode {
            width: 20%;
        }
    </style>';
}
add_action('admin_head', 'custom_cf_admin_styles');
