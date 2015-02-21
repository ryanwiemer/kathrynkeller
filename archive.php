<?php
/**
 * Archive
 */

get_header(); ?>

	<main class="site-content">

		<?php if ( have_posts() ) : ?>

			<header class="page__header">
				<?php the_archive_title( '<h2 class="page__title">', '</h2>' ); ?>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php kathrynkeller_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
