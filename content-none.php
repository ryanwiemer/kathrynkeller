<?php
/**
 * Content-None
 */
?>

	<header class="page__header">
		<h2 class="page__title"><?php _e( 'Nothing Found', 'kathrynkeller' ); ?></h2>
	</header>

	<div class="page__content">

		<?php if ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'kathrynkeller' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'kathrynkeller' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
