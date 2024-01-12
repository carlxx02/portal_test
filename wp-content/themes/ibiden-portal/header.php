<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

    <header>
        <div class="logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/your-logo.png" alt="Logo">
            <?php endif; ?>
            <h1><?php bloginfo('name'); ?></h1>
        </div>
    </header>

    <div class="navbar-container">
            <ul class="navbar">
            <?php
            // Display the menu from 'primary_menu' location
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container'      => false, // Remove the menu container
                'items_wrap'     => '%3$s', // Display only the list items
            ));
            ?>
        </ul>
        <div class="search-login-container">
            <div class="search-bar">
                <?php get_search_form(); ?>
            </div>
            <div class="login-button">
                <button type="button">Login</button>
            </div>
        </div>
    </div>

    <!-- The rest of your content goes here -->

<?php wp_footer(); ?>
</body>
</html>
