<?php
/**
 * Content-Search
 */
?>

<article <?php post_class(); ?>>
	<header class="article__header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="article__meta">
			<?php kathrynkeller_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>

	<div class="article__summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="article__footer">
		<?php kathrynkeller_entry_footer(); ?>
	</footer>
</article>
