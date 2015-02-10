<?php
/**
 * Page
 */

get_header(); ?>
	<main class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</main>

<?php get_footer(); ?>
