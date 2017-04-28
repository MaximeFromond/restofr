<?php

wp_head(); 

$context = Timber::get_context();

$blog = array(
        'post_type' => 'post'
);

$context['articles'] = Timber::get_posts($blog);
$post = new TimberPost();
$context['post'] = $post;

Timber::render('page-blog.twig', $context);