<?php
/**
 * Single
 */

get_header(); ?>
	<main class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

		<?php endwhile; // end of the loop. ?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
