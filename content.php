<?php
/**
 * Content
 */
?>

<article class="project" >
	<div class="project__container">
	<a class="project__link" href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
			$large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
			$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb');?>
			<img class="project__image" srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
			<?php }
			else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/placeholder.png"  class="project__image"/>';
		}?>
		<div>
		<div class="project__overlay"></div>
		<div class="project__caption">View Project</div>
	</a>
</article>
