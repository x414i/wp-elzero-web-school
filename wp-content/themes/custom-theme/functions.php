<?php
//add styles
function custom_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
    // Enqueue the custom stylesheet
    wp_enqueue_style('custom-theme-custom-style', get_template_directory_uri() . '/css/main.css', array(),'1.0','all');
}
// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


//add scripts
function custom_theme_enqueue_scripts() {
    // Enqueue the custom JavaScript file
    wp_enqueue_script('custom-theme-custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');