<?php 
//require_once 'C:/wamp64/www/wordpress/eluminousWp-2024/wp-content/themes/eluminous/contact-form-7.php';
//require_once get_template_directory() . '/contact-form-7.php';

// Include the custom contact form functions
//require_once get_stylesheet_directory() . '/contact-form-7.php';
?>

<?php 
//05-07-2024




function website_maker_king($content){
$content ="<h1 style='color:red'>".$content."</h1>";
return $content;
}

add_filter('the_content', 'website_maker_king');


// contact form entries
require_once get_stylesheet_directory() . '/customForm.php';

?>