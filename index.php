<?php
/**
 * Index
 */

get_header(); ?>
	<main class="site-content">

	<header class="header--gallery">
		<h3 class="header--gallery__title">Gallery</h3>
		<ul class="header--gallery__categories">
			<li><button class ="filter" data-filter="*">All</button></li>
			<?php
			$args = array(
			  'orderby' => 'name',
			  'parent' => 0
			  );
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
				echo '<li><button class ="filter" data-filter=".'.$category->name .'">' . $category->name . '</button></li>';
			}
			?>
		</ul>
	</header>

	<section id="gallery">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

	<div class="gallery__pagination">
	  <?php
	    next_posts_link( 'Older Projects' );
	    previous_posts_link( 'Newer Projects' );
	  ?>
	</div>

	</main>

<?php get_footer(); ?>
