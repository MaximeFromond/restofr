<?php 

function resto_styles() {
	wp_enqueue_style( 'custom styles', get_stylesheet_uri() );
} 

add_action( 'wp_enqueue_scripts', 'resto_styles' );


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

add_filter('timber_context', 'add_to_context');

add_theme_support( 'custom-logo' ); 

?>
