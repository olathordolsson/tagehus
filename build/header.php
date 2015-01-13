<!DOCTYPE html>

<html class="no-js">
	<head>
	  <meta charset="utf-8">
	  <meta name="HandheldFriendly" content="True">
	  <meta name="MobileOptimized" content="320">
	  <meta name="viewport" content="width=device-width,initial-scale=1">
	  
	  <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/favicon-144.png"> 
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon.png" rel="apple-touch-icon">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-precomposed-57.png" rel="apple-touch-icon-precomposed">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-precomposed-72.png" sizes="72x72" rel="apple-touch-icon-precomposed">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-precomposed-114.png" sizes="114x114" rel="apple-touch-icon-precomposed">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-precomposed-144.png" sizes="144x144" rel="apple-touch-icon-precomposed">
		<link href="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
		
		<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/favicon-144.png">
		<meta name="msapplication-TileColor" content="<?php get_template_part('partials/ms-tile-color'); ?>"/>
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<meta name="msapplication-square70x70logo" content="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/tile-tiny.png"/>
		<meta name="msapplication-square150x150logo" content="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/tile-square.png"/>
		<meta name="msapplication-wide310x150logo" content="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/tile-wide.png"/>
		<meta name="msapplication-square310x310logo" content="<?php bloginfo('stylesheet_directory'); ?>/img/touchIcons/tile-large.png"/>
		
		<?php if(is_home() || is_archive() || (is_single() && !has_post_thumbnail())){ 
			echo '<meta property="og:image" content="'.get_bloginfo("stylesheet_directory").'/img/touchIcons/apple-touch-icon-152x152.png" />';
		} ?>
	  	
	  <script>
	  	document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/,'js wfl');

			WebFontConfig = {
				google: { 
					families: [ 'Aclonica', 'Acme', 'Alegreya' ]
				},
				timeout: 2000 // Set the timeout to two seconds
			};
			
			(function() {
				 var wf = document.createElement('script');
				 wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				     '://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
				 wf.type = 'text/javascript';
				 wf.async = 'true';
				 var s = document.getElementsByTagName('script')[0];
				 s.parentNode.insertBefore(wf, s);
			})();
		</script>
	  <title><?php bloginfo('name'); ?></title>
	  <?php wp_head(); ?>
	  <!--[if lt IE 9]>
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/helpers/html5shiv.js"></script>
		<![endif]-->

		<!--[if lte IE 8]>
			<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/helpers/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body <?php body_class(); ?>>

		<header id="js-global-header" class="o-global-header l-span" role="banner">
			<div class="l-span">
			<?php if(is_front_page()) { echo '<h1>'; } else { echo '<h2>'; } ?>
				<a id="js-sitename" class="a-sitename" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
			<?php if(is_front_page()) { echo '</h1>'; } else { echo '</h2>'; } ?>
			<nav id="js-global-nav" class="m-global-nav l-pull-right" role="navigation">
				<a href="#">MENY</a>
			</nav>
			</div>
		</header>
		
		