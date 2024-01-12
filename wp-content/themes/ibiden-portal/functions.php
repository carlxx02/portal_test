<?php
function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function theme_setup() {
    add_theme_support('menus');
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'main-menu'),
        'footer_menu'  => __('Footer Menu', 'sub-menu'),
    ));
}
add_action('after_setup_theme', 'theme_setup');