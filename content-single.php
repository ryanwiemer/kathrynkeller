<?php
/**
 * Content-Single
 */
?>

<article <?php post_class(); ?>>
	<header class="single__header">
		<?php the_title( '<h2 class="article__title">', '</h2>' ); ?>
		<div class="single__meta">
		</div>
	</header>

	<div class="single__content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kathrynkeller' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="single__footer">
	</footer>
</article>
