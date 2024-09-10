
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


?>