<?php
/**
 * Index
 */

get_header(); ?>
	<main class="site-content">

	<header class="header--gallery">
		<h3 class="header--gallery__title">Gallery</h3>
		<ul class="header--gallery__categories">
			<li class="cat-item"><a href="<?php echo site_url(); ?>/gallery">All</a></li>
			<?php
			$uncatid = get_term_by( 'slug', 'uncategorized', 'category');
			$uncatid = $uncatid->term_id;
			$args = array(
			  'orderby'            => 'name',
				'order'              => 'ASC',
				'style'              => 'list',
				'show_count'         => 0,
				'hide_empty'         => 0,
				'hierarchical'       => 1,
				'title_li'           => '',
				'exclude'			       => $uncatid
			); ?>
			<?php wp_list_categories( $args ); ?>
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
