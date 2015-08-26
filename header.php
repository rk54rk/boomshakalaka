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
	<nav id="navbar" class="navbar navbar-default site-header" role="banner">
      
		<div class="container">
          <div class="row">
            <span id="logo"><a href="<?php echo esc_url( home_url( '/#' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a></span>
            <!--div id="rainbow-logo" style="font-size:90px;line-height:90px"><span>BOOM SHAKALAKA PRODUCTIONS</span></div-->
          </div>
		</div>
<!--script>
    var colours = ["#000000", "#FF0000", "#990066", "#FF9966", "#996666", "#0022FF", "#CC9933"], 
    idx;

jQuery(function() {
    var div = jQuery('#rainbow-logo'); 
    var chars = div.text().split('');
    div.html('');     
    for(var i=0; i<chars.length; i++) {
        idx = Math.floor(Math.random() * colours.length);
        var span = jQuery('<span>' + chars[i] + '</span>').css("color", colours[idx]);
        div.append(span);
    }
});
</script-->
      
	</nav><!-- #navbar -->

	<div id="content" class="site-content">
