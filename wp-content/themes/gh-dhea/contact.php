<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$address_box_image = get_field('address_box_image') ? get_field('address_box_image') : '' ;
$address_box_image_link = get_field('address_box_image_link') ? get_field('address_box_image_link') : '#' ;
$address_box_text = get_field('address_box_text') ? get_field('address_box_text') : 'No address box text provided' ;

?>

<?php get_header(); ?>

<main role="main" class="page page--contact">
  <section class="page__content">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <h1 class="page__title"><?php the_title(); ?></h1>
          <div class="contact-container">
              <div class="contact-container__info"><?php echo the_content(); ?>
              </div>
              <div class="contact-container__location">
                  <a href="<?php echo $address_box_image_link ?>">
                      <img src="<?php echo $address_box_image['url'] ?>" alt="<?php echo $address_box_image['alt'] ?>">
                  </a>
                  <?php echo $address_box_text ?>
              </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <html>no posts found</html>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>