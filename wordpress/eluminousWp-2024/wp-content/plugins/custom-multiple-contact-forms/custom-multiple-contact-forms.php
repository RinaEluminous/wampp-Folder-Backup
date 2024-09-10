<?php
/*
Plugin Name: New Custom Multiple Contact Forms
Description: Create multiple contact forms with custom fields from the WordPress admin.
Version: 1.0
Author: Your Name
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Include necessary files
include(plugin_dir_path(__FILE__) . 'includes/cf-post-type.php');
include(plugin_dir_path(__FILE__) . 'includes/cf-meta-boxes.php');
include(plugin_dir_path(__FILE__) . 'includes/cf-shortcode.php');
