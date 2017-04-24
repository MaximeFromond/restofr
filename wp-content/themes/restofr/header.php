<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<style type="style.css"></style>
	<?php wp_head(); ?>
</head>

<body>

	<div class="container">

		<div class="logo">
			<?php if ( function_exists( 'the_custom_logo' ) ) {
			    the_custom_logo(); 
			} ?>
		</div>

		<div class="nav">
				<?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
			</div>
	</div>
