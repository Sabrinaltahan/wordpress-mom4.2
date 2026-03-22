<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Företagslogotyp">
        </a>
    </div>

    <div class="menu-toggle" id="menu-toggle">&#9776;</div>

    <nav id="main-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'container'      => false,
            'fallback_cb'    => false,
        ));
        ?>
    </nav>
</header>