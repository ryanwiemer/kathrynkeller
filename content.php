<?php
/**
 * Content
 */
?>

<article class="project">
	<div class="project__container">
	<a class="project__link" href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
			$large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
			$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb');?>
			<img srcset="<?php echo $thumb[0]; ?> 375w, <?php echo $medium[0]; ?> 750w, <?php echo $large[0]; ?> 1500w" sizes="(max-width: 750px) 100vw, 750px">
			<?php }
			else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/placeholder.png" />';
		}?>
		<div>
		<div class="project__overlay"></div>
		<div class="project__caption">View Work</div>
	</a>
</article>
