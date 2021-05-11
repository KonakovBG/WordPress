<?php

function loadStylesheets(){
	wp_enqueue_style( 'style', get_stylesheet_uri() ); 
}

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }

add_action( 'init', 'register_my_menus' );

add_action('wp_enqueue_scripts','loadStylesheets');