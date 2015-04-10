<?php
/**
* Template Name: About Page
* Description: A Page Template for the About Page
*/
get_header(); ?>

<main class="page-content">
	<div class="about">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="about__image">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();}
					else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/placeholder.png" />';
				}?>
			</div>

			<div class="about__bio">
				<h3>Biography</h3>
				<?php the_field('about_bio'); ?>
			</div>

			<div class="about__statement">
				<h3>Artist Statement</h3>
				<?php the_field('about_statement'); ?>
			</div>

		<?php endwhile; // end of the loop. ?>

	</div>
</main> <!-- page-content -->

<?php get_footer(); ?>
