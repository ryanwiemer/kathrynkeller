<?php
/**
* Template Name: Home Page
* Description: A Page Template for the Home Page
*/
get_header(); ?>

<div class="carousel">
	<a class="carousel__link" href="#">
		<div class="carousel__img">

		</div>
	</a>
</div>


<main class="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<h2>test</h2>

		<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
