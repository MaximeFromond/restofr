<?php function resto_styles() {
	wp_enqueue_style( 'custom styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'resto_styles' );
?>

<?php add_theme_support( 'post-thumbnails' ); ?>


<?php register_nav_menus( array(
        'Top' => 'Navigation principale',
    ) ); ?>


<?php add_theme_support( 'custom-logo' ); ?>
<?php function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400, 
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' ); ?>