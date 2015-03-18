<?php
/**
* Template Name: About Page
* Description: A Page Template for the About Page
*/
get_header(); ?>

<header class="page-header">
	<h2 class="page-header__title">About</h2>
	<h3 class="page-header__subtitle">Learn all Kathryn Keller</h3>
</header>

<main class="page-content">
	<div class="about">
		<?php $large = wp_get_attachment_image_src(get_field('about_image'), 'large'); ?>
		<?php $medium = wp_get_attachment_image_src(get_field('about_image'), 'medium'); ?>
		<?php $thumb = wp_get_attachment_image_src(get_field('about_image'), 'thumbnail'); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<img class="about__image" srcset="<?php echo $thumb[0]; ?> 375w, <?php echo $medium[0]; ?> 750w, <?php echo $large[0]; ?> 1500w">

			<div class="about__info">
				<?php the_field('about_info'); ?>
			</div>


		<?php endwhile; // end of the loop. ?>

	</div>
</main> <!-- page-content -->

<?php get_footer(); ?>
