<?php 

// Recupere le style 
function resto_styles() {
	wp_enqueue_style( 'custom styles', get_stylesheet_uri() );
} 

add_action( 'wp_enqueue_scripts', 'resto_styles' );

function add_theme_scripts() {
    
        wp_register_script( get_template_directory_uri().'/js/script.js' );
}


// Menu navigation
register_nav_menus( array(
'header-menu' => 'Navigation principale'
) );

function add_to_context($data){
	$data['menu'] = new TimberMenu('header-menu');
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    
    $data['logo'] = $image[0];
    return $data;
}


add_theme_support( 'post-thumbnails' );

add_post_type_support( 'plats', 'thumbnail' );

add_filter('timber_context', 'add_to_context');

add_theme_support( 'custom-logo' ); 


