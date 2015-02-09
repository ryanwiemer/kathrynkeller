<?php
/**
 * Content
 */
?>

<article <?php post_class(); ?>>
	<header class="article__header">
		<?php the_title( sprintf( '<h2 class="article__title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="article__meta">
		</div>
		<?php endif; ?>
	</header>

	<div class="article__content">
		<?php the_content() ?>

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
