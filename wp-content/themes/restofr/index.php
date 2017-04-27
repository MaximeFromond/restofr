<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

$args = array(
    'post_type' => 'plats',
    'posts_per_page' => 8
);

$plats = Timber::get_posts( $args );
$context['plats'] = $plats;


$args_en_avant = array(
	'post_type' => 'plats',
	'meta_query' => array(
	    array(
	        'key' => 'mise_en_avant',
	        'value' => '1',
	        'compare' => '=='
	    )
    ),
);
    

$plats_en_avant = Timber::get_posts( $args_en_avant );

$context['plats_en_avant'] = $plats_en_avant;

//var_dump($context['plats_en_avant']); die;

Timber::render('index.twig', $context);





