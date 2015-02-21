<?php
/**
 * Content
 */
?>

<article class="gallery" >
	<a class="gallery__link" href="<?php the_permalink(); ?>">
		<?php if ( has_post_thumbnail() ) {
			$medium = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');?>
			<img class="gallery__image" src="<?php echo $medium[0]; ?>">
			<?php }
			else {
			echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/img/placeholder.png"  class="gallery__image"/>';
		}?>
		<h4 class="gallery__title"><?php echo the_title() ?></h2>
	</a>
</article>
