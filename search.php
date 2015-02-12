<?php
/**
 * Search
 */

get_header(); ?>
	<main class="content">

		<?php if ( have_posts() ) : ?>

			<header class="page__header">
				<h2 class="page__title"><?php printf( __( 'Search Results for: %s', 'kathrynkeller' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php kathrynkeller_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
