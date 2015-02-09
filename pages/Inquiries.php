<?php
/**
* Template Name: Inquiries Page
* Description: A Page Template for the Inquiries Page
*/
get_header(); ?>

<main class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
