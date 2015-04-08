<?php
/**
 * Content-Single
 */
?>

	<header class="page-header">
	</header>

<main class="page-content">
		<?php the_content(); ?>
		<div class="page-header__nav">
			<?php previous_post_link('%link','&#xe804;', True); ?>
			<?php next_post_link('%link','&#xe805;', True); ?>
		</div>
</main>
