<?php
/**
 * Header
 */
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<title><?php wp_title('|', true, 'right'); ?></title>
<!--Typekit-->
<!--Google Analytics-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="site-header">
		<nav class="site-header__nav">
			<a href="<?php echo get_site_url(); ?>"><h1 class="site-header__logo"><?php echo get_bloginfo('name'); ?></h1></a>
			<?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => '', 'menu_class' => '') ); ?>
		</nav>
	</header>
