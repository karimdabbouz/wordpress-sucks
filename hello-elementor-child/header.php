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
<?php
echo do_shortcode('[elementor-template id="123"]');
?> 