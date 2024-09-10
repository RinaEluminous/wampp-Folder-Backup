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
