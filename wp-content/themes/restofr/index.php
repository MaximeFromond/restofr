<?php

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

// Le tableau array est = à la variable $args
$args = array(
    'post_type' => 'plats',
    'posts_per_page' => 8
);

// La variable $plats récupere tous les plats grace à get_posts ($args)
$plats = Timber::get_posts( $args );
$context['plats'] = $plats;

// Création de la variable $args_en_avant qui est est egale à un tableau regroupant les plats mis en avant 
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
//La variable $plats_en_avant est égale à m'ensemble des plats mis en avant grace à "get_post"
$plats_en_avant = Timber::get_posts( $args_en_avant );

$context['plats_en_avant'] = $plats_en_avant;

Timber::render('index.twig', $context);





