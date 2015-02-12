<?php
/**
 * 404
 */

get_header(); ?>

	<main class="site-content">

		<header class="page__header">
			<h2 class="page__title">404</h2>
		</header>

		<div class="page__content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kathrynkeller' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</main>

<?php get_footer(); ?>
