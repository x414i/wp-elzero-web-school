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
</head>
<body>
    
