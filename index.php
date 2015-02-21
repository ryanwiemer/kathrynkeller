<?php
/**
 * Index
 */

get_header(); ?>
	<main class="site-content">

	<section class="page__header">
		<h3 class="page__title">
			Gallery
		</h3>
		<h4 class="page__subtitle">Integer consequat hendrerit justo, ac.</h4>
	</section>

	<section class="masonry">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

	</main>

<?php get_footer(); ?>
