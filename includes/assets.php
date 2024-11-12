<?php

function Ramen_assets(){
    wp_enqueue_style('Ramen', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/toggleMenu.js', array(), microtime(), true);
    wp_enqueue_script('my_script2', get_template_directory_uri() . '/js/beerTabs.js', array(), microtime(), true);
}

add_action('wp_enqueue_scripts', 'Ramen_assets');