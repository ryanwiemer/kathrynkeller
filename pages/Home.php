<?php
/**
* Template Name: Home Page
* Description: A Page Template for the Home Page
*/
get_header(); ?>

<main class="page-content">
<div class="carousel">
	<?php if(get_field('carousel')): ?>
	<?php while(has_sub_field('carousel')): ?>
		<?php $large = wp_get_attachment_image_src(get_sub_field('image'), 'large'); ?>
		<?php $medium = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
		<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>

		<figure class="slide" style="background-image: url('<?php echo $large[0]; ?>');">
				<div class="slide__info">
					<h2 class="slide__title"><?php the_sub_field('title'); ?></h2>
					<p class="slide__excerpt">
						<?php the_sub_field('description'); ?>
					</p>
					<a class="slide__link" href="<?php the_sub_field('link'); ?>">
						<div class="slide__view-work">View Work</div>
					</a>
				</div>
		</figure>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

</main>

<?php get_footer(); ?>
