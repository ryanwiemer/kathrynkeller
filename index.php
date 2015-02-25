<?php
/**
 * Index
 */

get_header(); ?>
	<main class="site-content">

	<header class="page__header">
		<h3 class="page__title">Gallery</h3>
		<ul class="gallery__categories">
			<li><button data-filter="*">All</button></li>
			<?php
			$args = array(
			  'orderby' => 'name',
			  'parent' => 0
			  );
			$categories = get_categories( $args );
			foreach ( $categories as $category ) {
				echo '<li><button data-filter=".'.$category->name .'">' . $category->name . '</button></li>';
			}
			?>
		</ul>
	</header>

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
