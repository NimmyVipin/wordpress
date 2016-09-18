<?php 

function wpt_theme_styles(){
    wp_enqueue_style( 'mobile_css', get_template_directory_uri(). '/css/mobile.css');
    wp_enqueue_style( 'main_css', get_template_directory_uri(). '/style.css');
}

add_action('wp_enqueue_scripts','wpt_theme_styles');

function wpt_theme_js(){
    wp_enqueue_script('mobile_js',get_template_directory_uri(). '/js/mobile.js','','',false);
}

?>