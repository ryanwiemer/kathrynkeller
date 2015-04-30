<?php
/**
 * Header
 */
?><!DOCTYPE html>
<html lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<title><?php wp_title('|', true, 'right'); ?></title>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-62455441-1', 'auto');
	ga('send', 'pageview');
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
		<nav class="site-header__nav">
			<a class="site-header__link" href="<?php echo get_site_url(); ?>"><h1 class="site-header__logo"><?php echo get_bloginfo('name'); ?></h1></a>
			<?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => '', 'menu_class' => '') ); ?>
		</nav>
	</header>
