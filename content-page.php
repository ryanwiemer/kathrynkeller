<?php
/**
 * Content-Page
 */
?>

<article <?php post_class(); ?>>
	<header class="article__header">
		<?php the_title( '<h2 class="article__title">', '</h2>' ); ?>
	</header>

	<div class="article__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kathrynkeller' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="article__footer">
	</footer>
</article>
