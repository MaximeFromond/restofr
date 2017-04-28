<?php

wp_head(); 


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;


Timber::render('page-restaurants.twig', $context);