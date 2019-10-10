<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title> <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
            <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>

            <h4>
                <?php bloginfo( 'description' ); ?>
            </h4>
    </header>

<main>
