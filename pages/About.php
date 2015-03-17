<?php
/**
* Template Name: About Page
* Description: A Page Template for the About Page
*/
get_header(); ?>

<main class="site-content">
	<section class="page-header">
		<h2 class="page-title">About</h2>
	</section>
	
	<div class="about">
		<?php $large = wp_get_attachment_image_src(get_field('about_image'), 'large'); ?>
		<?php $medium = wp_get_attachment_image_src(get_field('about_image'), 'medium'); ?>
		<?php $thumb = wp_get_attachment_image_src(get_field('about_image'), 'thumbnail'); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<img class="about__image" srcset="<?php echo $thumbnail[0]; ?> 375w, <?php echo $medium[0]; ?> 750w, <?php echo $large[0]; ?> 1500w">
			<div class="about__info">
				<?php the_field('about_info'); ?>
			</div>

		<?php endwhile; // end of the loop. ?>

	</div>
</main>

<?php get_footer(); ?>
