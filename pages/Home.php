<?php
/**
* Template Name: Home Page
* Description: A Page Template for the Home Page
*	<img class="carousel__image" srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
*/
get_header(); ?>


<!--
<div class="carousel">
	<?php if(get_field('carousel')): ?>
	<?php while(has_sub_field('carousel')): ?>
		<?php $large = wp_get_attachment_image_src(get_sub_field('image'), 'large'); ?>
		<?php $medium = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
		<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>
		<div class="carousel__container">
			<img class="carousel__image" srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
					<a class="carousel__link" href="<?php the_sub_field('link'); ?>">
							<h2 class="carousel__title"><?php the_sub_field('title'); ?></h2>
					</a>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
-->

	<div class="carousel">
			<div class="carousel__container">
				<img class="carousel__image" src="http://placekitten.com/200/300">
			</div>
	</div>




<?php get_footer(); ?>
