<?php 
add_action( 'wp_enqueue_scripts', 'timber_style' ); 
add_action( 'wp_enqueue_scripts', 'timber_script' );
function timber_style() {
	wp_enqueue_style( 'normalize-style', get_template_directory_uri()."/assets/css/normalize.css"); 
    
	wp_enqueue_style( 'normalize-style', get_template_directory_uri(). "/assets/css/normalize.css"); 
	wp_enqueue_style( 'margneffic_style', get_template_directory_uri(). "/assets/css/magnific-popup.css"); 
	wp_enqueue_style( 'main-style', get_stylesheet_uri()); 
	wp_enqueue_style( 'main-style', get_stylesheet_uri()); 
    
}
function timber_script(){   
//wp_deregister_script('jquery');
//wp_register_script('jquery','https://code.jquery.com/jquery-3.5.1.min.js');
//wp_enqueue_script('jquery');
    
//wp_enqueue_script('magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null,true);
//wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js',  array('jquery'), null,true);

}
?>