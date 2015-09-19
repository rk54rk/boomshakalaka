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
  
  
<!--
/**
 * @license
 * MyFonts Webfont Build ID 3094120, 2015-09-19T00:46:41-0400
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: CoreSansD35Regular by S-Core
 * URL: http://www.myfonts.com/fonts/s-core/core-sans-d/regular/
 * Copyright: Core Sans D 35 Regular
 * 
 * Webfont: CoreSansD55Bold by S-Core
 * URL: http://www.myfonts.com/fonts/s-core/core-sans-d/bold/
 * Copyright: Core Sans D 55 Bold
 * 
 * 
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=3094120
 * Licensed pageviews: 10,000
 * 
 * © 2015 MyFonts Inc
*/

-->
<link rel="stylesheet" type="text/css" href="/wp-content/themes/boom-shakalaka/assets/fonts/MyFontsWebfontsKit.css"/>
<style type="text/css">
.CoreSansD35Regular { font-family: CoreSansD35Regular; }
.CoreSansD55Bold { font-family: CoreSansD55Bold; }
</style>
  
<!--link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'-->
  
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
