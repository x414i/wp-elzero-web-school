<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    wp_title('|', true, 'right'); // Page title
    bloginfo('name'); // Site title
    ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); // Hook for plugins and additional head elements ?>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <i class="fa-brands fa-affiliatetheme"></i>
<?php custom_theme_display_menu(); // Display the navigation menu ?>