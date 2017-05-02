<?php


wp_head(); 

$context = Timber::get_context();

$plats = array(
        'post_type' => 'plats'
);

$context['plats'] = Timber::get_posts($plats);
$post = new TimberPost();
$context['post'] = $post;

Timber::render('page-plats.twig', $context);