<?php
function b2w_theme_styles(){

    wp_enqueue_style('creative_css', get_template_directory_uri() . '/css/creative.min.css');

    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'b2w_theme_styles');

function b2w_theme_js(){

    wp_enqueue_script('creative_js', get_template_directory_uri() . '/js/creative.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'b2w_theme_js');

?>