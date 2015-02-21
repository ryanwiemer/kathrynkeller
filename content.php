<?php
/**
 * Content
 */
?>

<article class="gallery" >
	<a class="gallery__link" href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
			$large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
			$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
			$thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb');?>
			<img class="gallery__image" srcset="<?php echo $large[0]; ?> 1500w, <?php echo $medium[0]; ?> 750w, <?php echo $thumb[0]; ?> 375w" sizes="100vw">
			<?php }
			else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/placeholder.png"  class="gallery__image"/>';
		}?>
	</a>
	<a class="gallery__link" href="<?php the_permalink(); ?>">
		<h4 class="gallery__title"><?php echo the_title() ?></h2>
	</a>
</article>
