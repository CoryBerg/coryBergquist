<?php
/**
 * Template Name: Thank You
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$downloadable_article = get_field('downloadable_article') ? get_field('downloadable_article') : null;

if ( $downloadable_article )
{
  $post = $downloadable_article;
  setup_postdata( $post );

  $article = get_field('article') ? get_field('article') : null;
  $article_image = get_field('article_image') ? get_field('article_image') : null;
  $article_description = get_field('article_description') ? get_field('article_description') : 'No article description provided';
  $download_button_text = get_field('download_button_text') ? get_field('download_button_text') : 'Download';

  $references_header = get_field('references_header') ? get_field('references_header') : 'No references provided';
  $references = get_field('references') ? get_field('references') : 'No references provided';

  wp_reset_postdata();
}

?>

<?php get_header(); ?>

<main role="main" class="page page--thanks">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php the_title(); ?></h1>
          <div class="thanks-container">
              <div class="thanks-container__info">
                  <?php echo $article_description ?>
                  <p class="show-desktop">
                      <a href="<?php echo $article ?>" target="_blank" class="button"><?php echo $download_button_text ?></a>
                  </p>
              </div>
              <div class="thanks-container__image">
                  <img src="<?php echo $article_image['url'] ?>" alt="<?php echo $article_image['alt'] ?>" />
              </div>
              <div class="thanks-container__download show-mobile">
                  <a href="<?php echo $article ?>" class="button"><?php echo $download_button_text ?></a>
              </div>
          </div>
          <div class="accordion-container">
              <div class="accordion">
                  <div class="accordion__title"><?php echo $references_header ?></div>
                  <div class="accordion__content"><?php echo $references ?></div>
              </div>
          </div>
      <?php endwhile; else: ?>
        <html>no posts found</html>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>