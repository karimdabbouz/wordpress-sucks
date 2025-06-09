<?php
/**
 * The Header for your theme.
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="dbx-navbar">
    <button class="dbx-navbar-burger" aria-label="Open menu">
        <span></span><span></span><span></span>
    </button>
    <div class="dbx-navbar-menu">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'dbx-navbar-menu-list',
            'fallback_cb' => false
        ]);
        ?>
    </div>
</nav>