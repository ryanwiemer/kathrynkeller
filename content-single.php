<?php
/**
 * Content-Single
 */
?>

	<header class="header--single">
		<?php the_title( '<h2 class="header--single__title">', '</h2>' ); ?>
		<p class="header--single__category">

			<a href="<?php echo site_url(); ?>/gallery">Gallery</a> <span>&#187;<span> <a href="# "><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' ';}?></a>
		</p>
		<?php if(get_field('project_details')): ?>
			<div class="header--single__details">
			<?php the_field('project_details'); ?>
			</div>
		<?php endif; ?>
		<nav class="single__nav">
			<?php previous_post_link('%link',''); ?>
			<?php next_post_link('%link',''); ?>
		</nav> <!--single__nav-->
	</header>

<main class="site-content">
	<div class="single__content">
		<?php the_content(); ?>
	</div>
</main>
