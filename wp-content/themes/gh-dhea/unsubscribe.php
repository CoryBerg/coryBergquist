<?php
/**
 * Template Name: Unsubscribe
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$unsubscribe_form_shortcode = get_field('unsubscribe_form_shortcode') ? get_field('unsubscribe_form_shortcode') : 'No unsubscribe form provided';
$success_header = get_field('success_header') ? get_field('success_header') : 'No success header provided';
$success_content = get_field('success_content') ? get_field('success_content') : 'No success content provided';

?>

<?php get_header(); ?>

<main role="main" class="page page--unsubscribe">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title">
            <span class="default"><?php echo the_title() ?></span>
            <span class="success"><?php echo $success_header ?></span>
        </h1>
          <div class="unsubscribe__content">
            <p class="default">
              It’s the mission of AMAG Pharmaceuticals to provide helpful and medically relevant information to individuals and members of the healthcare professional community. Please tell us your preferences.
            </p>
              <div class="unsubscribe__content__form"><?php echo apply_filters('the_content', $unsubscribe_form_shortcode) ?></div>
              <div class="success"><?php echo $success_content ?></div>
          </div>
      <?php endwhile; else: ?>
        <html>no posts found</html>
      <?php endif; ?>
    </div>
  </section>
</main>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            var body = document.body;
            body.className = "message-sent--unsubscribe page";
        }, false );
    </script>

<?php get_footer(); ?>