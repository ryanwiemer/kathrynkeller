<?php
/**
 * Content-Single
 */
?>

	<header class="page-header">
		<?php the_title( '<h2 class="page-header__title">', '</h2>' ); ?>
		<p class="page-header__category">
			<?php $the_cat = get_the_category(); $category_name  = $the_cat[0]->cat_name; $category_link  = get_category_link( $the_cat[0]->cat_ID ); ?>
			<a href="<?php echo site_url(); ?>/work">Work</a> <span>&#187;</span> <a href="<?php echo $category_link ?>"><?php echo $category_name ?></a>
		</p>
			<div class="page-header__nav">
				<?php previous_post_link('%link','&#xe804;', True); ?>
				<?php next_post_link('%link','&#xe805;', True); ?>
			</div>
	</header>

<main class="page-content">
		<?php the_content(); ?>
</main>
