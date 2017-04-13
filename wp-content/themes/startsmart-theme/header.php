<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-smart
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
        <div class="row">
            <div class="container">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'start-smart' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
                </nav><!-- #site-navigation -->
            </div>
        </div>
        <?php if ( is_front_page() ) : ?>
            <div class="landing-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 landing-logo">
                            <img src="<?php echo get_theme_mod('landing-logo');?>" alt="landing-logo" class="">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <h1 class="landing-title"><?php echo get_theme_mod('landing-title');?></h1>
                            <h4 class="landing-sub-title"><?php echo get_theme_mod('landing-sub-title');?></h4>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
        <?php endif; ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
