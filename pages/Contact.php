<?php
/**
* Template Name: Contact Page
* Description: A Page Template for the Contact Page
*/
get_header(); ?>

<main class="site-content">

	<section class="page__header">
		<h3 class="page__title">Contact</h3>
		<h4 class="page__subtitle">Integer consequat hendrerit justo, ac.</h4>
	</section>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

			<form class="form" method="post" name="contact" autocomplete="off">
				<fieldset>
					<div class="form__name">
						<input class="form__name__input" name="name" for="name" placeholder="Name" type="text"/>
					</div>

					<div class="form__email">
						<input class="form__email__input" name="email" for="email" placeholder="Email" type="text"/>
					</div>

					<div class="form__subject">
						<input class="form__subject__input" name="subject" for="subject" placeholder="Subject" type="text"/>
					</div>

					<div class="form__message">
						<textarea class="form__message__textarea" name="message" for="message" placeholder="Message" type="text"></textarea>
					</div>

					<div class="form__bot">
						<input class="form__bot__input" name="bot" for="bot" placeholder="Spam filter (Leave blank)" type="text"/>
					</div>

					<input class="form__submit btn" name="submit" type="submit" value="Send Message"/>

					<div class="form__alert form__altert--success">
						Message sent successfully!
					</div>
					<div class="form__alert form__altert--error">
						Error, try again.
					</div>
				</fieldset>
			</form>

		<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
