<?php
/**
 * Single
 */

get_header(); ?>
	<main class="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

	</main>

<?php get_footer(); ?>
