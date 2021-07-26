<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes();?>>

<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <?php
wp_body_open();
?>

    <header id="site-header" class="header-footer-group" role="banner">
        <div class="logo-group">
            <?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
            <img src="<?php echo $image[0]; ?>" alt="">
        </div>
        <div class="navbr-group">
            <?php
wp_nav_menu(array(
    'theme_location' => 'my-custom-menu',
    'container_class' => 'custom-menu-class'));
?>
        </div>
    </header>
    <!-- #site-header -->