<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/your-logo.png" alt="Logo">
                <?php endif; ?>
            </div>

            <div class="footer-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer', // Adjust the menu location as needed
                    'container'      => 'nav',
                    'container_class' => 'footer-navigation',
                    'menu_class'     => 'footer-menu',
                ));
                ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
