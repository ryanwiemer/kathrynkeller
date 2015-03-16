<?php
/**
 * Content-Single
 */
?>

	<header class="header--single">
		<?php the_title( '<h2 class="header--single__title">', '</h2>' ); ?>
		<p class="header--single__category">
			<?php $the_cat = get_the_category(); $category_name  = $the_cat[0]->cat_name; $category_link  = get_category_link( $the_cat[0]->cat_ID ); ?>
			<a href="<?php echo site_url(); ?>/work">Work</a> <span>&#187;<span> <a href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
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
