<?php

function enqueue_scripts() {

	//enqueue jQuery form Google CDN
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, true);
	wp_enqueue_script('jquery');

	wp_enqueue_style('custom_style', get_bloginfo('template_directory') . '/style/style.css', false, null, false);

	wp_enqueue_script('modernizr', get_bloginfo('template_directory') . '/js/libs/modernizr.js', false, null, false);
	wp_enqueue_script('plugins', get_bloginfo('template_directory') . '/js/plugins.js', false, null, true);
	wp_enqueue_script('custom', get_bloginfo('template_directory') . '/js/script.js', false, null, true);

}

add_action('init', 'enqueue_scripts');