<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package inqsite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', array(), '1.7.1');
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'inqsite' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
  <h1  class="site-description"><?php bloginfo( 'description' ); ?></h1>  
		<div class="site-branding clearfix">
      <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://placehold.jp/360x80.png" alt="<?php bloginfo( 'name' ); ?>"></a></h2>
      <div class="heder-right">
        <p class="toptel">0537-22-3165</p>
        <p class="topadd">静岡県掛川市仁藤町４－１<br>9:00～18:00 水曜定休日</p>
      </div>
		</div><!-- .site-branding -->
<div id="sm"></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
  <div class="topimg"><img src="http://placehold.jp/920x350.png"</div>
	<div id="content" class="site-content">
