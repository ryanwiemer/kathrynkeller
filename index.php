<?php
/**
 * Index
 */

get_header(); ?>

<header class="page-header">
	<h2 class="page-header__title">Recent Work</h3>
	<ul class="page-header__categories">
		<li class="cat-item"><a href="<?php echo site_url(); ?>/work">All</a></li>
		<?php
		$uncatid = get_term_by( 'slug', 'uncategorized', 'category');
		$uncatid = $uncatid->term_id;
		$args = array(
			'orderby'            => 'ID',
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

	<main class="page-content">

	<section class="work" data-columns>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</section>

	<div class="work__pagination">
	  <?php
	    next_posts_link( 'Older Work' );
	    previous_posts_link( 'Newer Work' );
	  ?>
	</div>

	</main>

<?php get_footer(); ?>
