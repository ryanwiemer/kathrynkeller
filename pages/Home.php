<?php
/**
* Template Name: Home Page
* Description: A Page Template for the Home Page
*/
get_header(); ?>

<div class="carousel">
	<?php if(get_field('carousel')): ?>
	<?php while(has_sub_field('carousel')): ?>
		<div class="carousel__image">
			<a class="carousel__link" href="<?php the_sub_field('link'); ?>">
					<?php $large = wp_get_attachment_image_src(get_sub_field('image'), 'large'); ?>
					<?php $medium = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
					<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>
					<img srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
			</a>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<main class="site-content">
	<?php while ( have_posts() ) : the_post(); ?>
		<h2>home</h2>
	<?php endwhile; // end of the loop. ?>
</main>

<?php get_footer(); ?>
