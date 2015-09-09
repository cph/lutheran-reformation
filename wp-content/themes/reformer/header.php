<?php/** * The header for our theme. * * This is the template that displays all of the <head> section and everything up until <div id="content"> * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package Reformer */?><!DOCTYPE html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><script src="//use.typekit.net/lzj1uqj.js"></script><link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'><script>try{Typekit.load({ async: true });}catch(e){}</script><?php wp_head(); ?></head><body <?php body_class(); ?>><div id="page" class="hfeed site">	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-reformer' ); ?></a>	<header id="masthead" class="site-header" role="banner">		<div class="container">			<div class="site-branding">				<?php if ( is_front_page() && is_home() ) : ?>					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>				<?php else : ?>					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></div>				<?php endif; ?>				<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->			</div><!-- .site-branding -->			<div class="secondary-navigation">				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>				<div class="search-container"><?php get_search_form(); ?></div>			</div>						<nav id="site-navigation" class="main-navigation" role="navigation">				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'the-reformer' ); ?></button>				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>			</nav><!-- #site-navigation -->		</div><!-- .container -->		<div class="container">			<header class="entry-header">				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>			</header><!-- .entry-header -->		</div>	</header><!-- #masthead -->	<div id="content" class="site-content">