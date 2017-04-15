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
			<nav id="site-navigation" class="main-navigation navbar navbar-toggleable-md navbar-light">
				<div class="nav-btn-wrap">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container'      => '',
								'menu_class'     => 'nav navbar-nav',
								'menu_id'        => 'primary-menu',
								'walker'  => new BootstrapNavMenuWalker(),
						) );
						?>
				</div>
			</nav>
			<?php if ( is_front_page() ) : ?>
					<div class="landing-header">
							<div class="container">
									<div class="row">
											<div class="col-xs-12 col-md-6 landing-logo">
													<img src="<?php echo get_theme_mod('landing-logo');?>" alt="landing-logo" class="">
											</div>
											<div class="col-xs-12 col-md-6">
													<h1 class="header-title"><?php echo get_theme_mod('landing-title');?></h1>
													<h4 class="header-sub-title"><?php echo get_theme_mod('landing-sub-title');?></h4>
											</div>
									</div>
							</div>
					</div>
			<?php else : ?>
					<div class="content-header">
							<h1 class="header-title text-center"><?php the_title();?></h1>
							<h4 class="header-sub-title text-center"><?php echo get_theme_mod('landing-sub-title');?></h4>
					</div>
			<?php endif; ?>
	</header><!-- #masthead -->
	<div id="content" class="site-content">

