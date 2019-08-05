<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
<script>
	
	  jQuery(function() {
		var pull = jQuery('#pull');
			menu 	= jQuery('nav ul');
			menuHeight	= menu.height();
	
		jQuery(pull).click(function(e) {
			e.preventDefault();
			menu.slideToggle();
	
		});
	
	   jQuery(window).resize(function(){
			var w = jQuery(window).width();
			 if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			 }
	
			});
		});
</script>
</head>

<body <?php body_class(); ?>>

<div class="header_wrap">
<div class="header_container">
<div class="header_left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><h1 style="color:#fff; font-size:32px; text-transform:uppercase;">Logo</h1></a></div>
<div class="header_right">
<div class="header_nav">
<nav class="clrfix">
<a href="#" id="pull">Menu</a>
<?php wp_nav_menu(array( 'menu' => 'Mian Menu'));?>
</nav>
</div>
</div>
<div class="clr"></div>
</div>
</div>




