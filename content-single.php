<?php
/**
 * Content-Single
 */
?>

	<header class="header--single">
		<?php the_title( '<h2 class="header--single__title">', '</h2>' ); ?>
		<p class="header--single__category">
			<?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' ';}?>
		</p>
		<?php if(get_field('project_details')): ?>
			<div class="header--single__details">
			<?php the_field('project_details'); ?>
			</div>
		<?php endif; ?>
		</div>
	</header>

<main class="site-content">
	<article class="single">
		<div class="single__content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'kathrynkeller' ),
					'after'  => '</div>',
				) );
			?>
		</div>
		<footer class="single__footer">
		</footer>
	</article>
