<?php
/**
 * Footer
 */
?>

<footer class="site-footer">
  <div class="site-footer__container">
    <div class="site-footer__copyright">&copy; <?php echo date("Y"); ?> Kathryn Keller</div>
    <?php $facebook_profile = get_the_author_meta( 'user_url' );?>
    <a href="<?php echo $facebook_profile;?>" class="site-footer__facebook">Facebook</a>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
