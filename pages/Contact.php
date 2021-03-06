<?php
/**
* Template Name: Contact Page
* Description: A Page Template for the Contact Page
*/
get_header(); ?>

<main class="page-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="contact-info">
				<?php the_content(); ?>
			</div>

			<form class="form" method="post" name="contact" autocomplete="off">
				<fieldset>
					<div class="form__fname">
						<label class="form__fname__label">First Name</label>
						<input class="form__fname__input" name="firstName" for="firstName" type="text"/>
					</div>

					<div class="form__lname">
						<label class="form__lname__label">Last Name</label>
						<input class="form__lname__input" name="lastName" for="lastName" type="text"/>
					</div>

					<div class="form__email">
						<label class="form__email__label">Email</label>
						<input class="form__email__input" name="email" for="email" type="text"/>
					</div>

					<div class="form__number">
						<label class="form__number__label">Phone Number <span> (Optional)</span></label>
						<input class="form__number__input" name="phoneNumber" for="phoneNumber" type="text"/>
					</div>

					<div class="form__message">
						<label class="form__message__label">Message</label>
						<textarea class="form__message__textarea" name="message" for="message"type="text"></textarea>
					</div>

					<div class="form__bot">
						<input class="form__bot__input" name="bot" for="bot" placeholder="Spam filter (Leave blank)" type="text"/>
					</div>

					<input class="form__submit" name="submit" type="submit" value="Send Message"/>

					<div class="form__alert form__alert--success">
							Message sent successfully!
					</div>

					<div class="form__alert form__alert--error">
							Error, try again.
					</div>

				</fieldset>
			</form>

		<?php endwhile; // end of the loop. ?>

</main>

<?php get_footer(); ?>
