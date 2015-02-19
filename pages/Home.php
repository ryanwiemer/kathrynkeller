<?php
/**
* Template Name: Home Page
* Description: A Page Template for the Home Page
*/
get_header(); ?>
<!--
<main class="site-content">
<div class="carousel">
	<?php if(get_field('carousel')): ?>
	<?php while(has_sub_field('carousel')): ?>
		<?php $large = wp_get_attachment_image_src(get_sub_field('image'), 'large'); ?>
		<?php $medium = wp_get_attachment_image_src(get_sub_field('image'), 'medium'); ?>
		<?php $thumb = wp_get_attachment_image_src(get_sub_field('image'), 'thumbnail'); ?>
		<div class="carousel__container">
			<div class="carousel__image">
				<img srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
			</div>

			<div class="carousel__details">
				<a class="carousel__title" href="<?php the_sub_field('link'); ?>">
					<h2><?php the_sub_field('title'); ?></h2>
				</a>
				<div class="carousel__description">
					<?php the_sub_field('description'); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</main>

-->


<main class="site-content">
<div class="carousel">
		<div class="carousel__container">
			<div class="carousel__image">
				<img src="http://placekitten.com/g/200/300" />
			</div>
			<div class="carousel__details">
				<a class="carousel__title" href="#">
					<h2>Lorem Ipsum</h2>
				</a>
				<div class="carousel__description">
					Phasellus dapibus diam sapien, quis ullamcorper nisl commodo ut. Aenean et nisi hendrerit, tincidunt ligula pharetra, condimentum leo. Duis scelerisque mauris vel urna blandit, id luctus sem tristique. Morbi laoreet felis eget nibh egestas vulputate. Proin a dignissim eros. Aenean suscipit nisi ante, at viverra nibh ornare a. Nam sed augue tincidunt, tristique massa eget, semper ex. Nulla auctor ullamcorper mauris. Vestibulum mollis volutpat lacus at aliquet.
				</div>
			</div>
		</div>
</div>
</main>

<?php get_footer(); ?>
