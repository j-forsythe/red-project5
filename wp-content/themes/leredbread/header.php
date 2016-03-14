<?php
/**
* The header for our theme.
*
* @package RED_Starter_Theme
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<div class="logo container">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<a href="<?php home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() .'./assets/images/lrb-logo.svg' ?>" alt="Le Red Bread Logo" />
					</a>
					<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->
					<ul class="header-social">
						<li><i class="fa fa-facebook"></i></li>
						<li><i class="fa fa-twitter"></i></li>
						<li><i class="fa fa-google-plus"></i></li>
						<li><i class="fa fa-envelope"></i></li>
					</ul>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="navigation container">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
