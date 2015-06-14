<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Boom Shakalaka
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'boom-shakalaka' ); ?></a>

	<nav id="navbar" class="navbar navbar-default navbar-fixed-top site-header" role="banner">
		<div class="container">
          <span id="logo"><a href="<?php echo esc_url( home_url( '/#' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></span>
          <span class="top-menu"><a href="/projects">All projects</a></span>
          <span class="top-menu"><a href="/#why">Why?</a></span>
          <span class="top-menu"><a href="/#where">Where?</a></span>
          <span class="top-menu"><a href="/#when">When?</a></span>
          <span class="top-menu"><a href="/#what">What?</a></span>
          <span class="top-menu"><a href="/#who">Who?</a></span>
          
		</div>

	</nav><!-- #navbar -->

	<div id="content" class="site-content">
