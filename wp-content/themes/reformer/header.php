<?php/** * The header for our theme. * * This is the template that displays all of the <head> section and everything up until <div id="content"> * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package Reformer */?><!DOCTYPE html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo( 'charset' ); ?>"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-57x57.png"><link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-60x60.png"><link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-72x72.png"><link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-76x76.png"><link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-114x114.png"><link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-120x120.png"><link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-144x144.png"><link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-152x152.png"><link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-180x180.png"><link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-192x192.png"><link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png"><link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-96x96.png"><link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png"><link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/images/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/images/ms-icon-144x144.png"><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><script src="//use.typekit.net/lzj1uqj.js"></script><link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'><script>try{Typekit.load({ async: true });}catch(e){}</script><?php wp_head(); ?></head><body <?php body_class(); ?>>	<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?><div id="page" class="hfeed site">	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-reformer' ); ?></a>	<?php if ( is_single() AND has_post_thumbnail() ) : ?>		<?php  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );			 $url = $thumb['0'];			?>		<header id="masthead" class="site-header post-site-header" style="background: url(<?=$url?>); background-size:cover; background-position: top center;" role="banner">			<div class="dark-mask"></div>		<?php else : ?>		<header id="masthead" class="site-header" role="banner">		<?php endif; ?>		<div class="container navigation-container">			<div class="site-branding">				<?php if ( is_front_page() && is_home() ) : ?>					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></h1>				<?php else : ?>					<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/reformation-logo.png" alt="Lutheran Reformation 2017"></a>						<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span>Lutheran</span><span>Reformation</span><span>.org</a></span></h2>					</div>				<?php endif; ?>				<!-- <p class="site-description"><?php bloginfo( 'description' ); ?></p> -->			</div><!-- .site-branding -->			<div class="secondary-navigation">				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>				<div class="search-container"><?php get_search_form(); ?></div>			</div>			<nav id="site-navigation" class="main-navigation" role="navigation">				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'the-reformer' ); ?></button>				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>			</nav><!-- #site-navigation -->		</div><!-- .container -->		<div class="container">			<header class="entry-header">				<?php if ( function_exists('yoast_breadcrumb') )				{yoast_breadcrumb('<p class="header-breadcrumbs" id="breadcrumbs">','</p>');} ?>				<?php if ( is_search() ) : ?>						<h1 id="page_header" class="page-title">Search</h1>					<?php elseif ( is_home() ) : ?>						<h1 id="page_header" class="page-title">Blog</h1>					<?php elseif ( is_single() ) : ?>						<?php the_title( '<h1 id="page_header" class="entry-title">', '</h1>' ); ?>					<?php elseif ( is_archive() ) : ?>						<?php the_archive_title( '<h1 id="page_header" class="entry-title">', '</h1>' );	?>					<?php else : ?>						<?php the_title( '<h1 id="page_header" class="entry-title">', '</h1>' ); ?>				<?php endif; ?>			</header><!-- .entry-header -->		</div>	</header><!-- #masthead -->	<?php putRevSlider("reformation-home", "homepage") ?>	<div id="content" class="site-content">