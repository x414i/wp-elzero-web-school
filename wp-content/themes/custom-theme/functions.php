<?php
//add styles
function custom_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('custom-theme-style', get_stylesheet_uri());
    // Enqueue the custom stylesheet
    wp_enqueue_style('custom-theme-custom-style', get_template_directory_uri() . '/css/main.css', array(),'1.0','all');
// enqueue fontawesome

wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/all.min.css');

// Enqueue bootstrap
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

}
// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


//add scripts
function custom_theme_enqueue_scripts() {

// Enqueue the Bootstrap JavaScript file
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true);    
    // Enqueue the custom JavaScript file
    wp_enqueue_script('custom-theme-custom-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);


    }
// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');





require_once get_template_directory() . '/class-wp-bootstrap-nvawallker.php';


// Register navigation menu
function custom_theme_register_menus() {
    register_nav_menu(
        'primary-menu', // Menu location identifier
        __('Primary Menu', 'custom-theme') // Menu description
    );
}
add_action('init', 'custom_theme_register_menus');

//Add menu to design
function custom_theme_display_menu() {
    wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new bootstrap_5_wp_nav_menu_walker()

        ));
}