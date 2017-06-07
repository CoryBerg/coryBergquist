<?php
/**
 * Template Name: Dyspareunia
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$page_title = get_field('page_title' ) ? get_field('page_title') : 'No page title provided' ;

$survey_header = get_field('survey_header') ? get_field('survey_header') : 'No survey header text provided';
$survey_title = get_field('survey_title') ? get_field('survey_title') : 'No survey title provided';
$survey_column_1_header = get_field('survey_column_1_header') ? get_field('survey_column_1_header') : 'No column header provided';
$survey_column_2_header = get_field('survey_column_2_header') ? get_field('survey_column_2_header') : 'No column header provided';
$survey_footnote = get_field('survey_footnote') ? get_field('survey_footnote') : '';
$survey_additional_content = get_field('survey_additional_content') ? get_field('survey_additional_content') : '';

$dyspareunia_image = get_field('dyspareunia_image') ? get_field('dyspareunia_image') : null;
$steroid_header = get_field('steroid_header') ? get_field('steroid_header') : 'No steroid header text provided';
$intracrinology_header = get_field('intracrinology_header') ? get_field('intracrinology_header') : 'No intracrinology header text provided';
$atrophy_header = get_field('atrophy_header') ? get_field('atrophy_header') : 'No atrophy header text provided';
$atrophy_image = get_field('atrophy_image') ? get_field('atrophy_image') : null;
$atrophy_image_caption = get_field('atrophy_image_caption') ? get_field('atrophy_image_caption') : '';
$quote = get_field('quote') ? get_field('quote') : 'No quote text provided';
$hormones_header = get_field('hormones_header') ? get_field('hormones_header') : 'No hormones header text provided';
$discover_link_text = get_field('discover_link_text') ? get_field('discover_link_text') : 'No discover link text provided';
$discover_link = get_field('discover_link') ? get_field('discover_link') : '#';

$references_header = get_field('references_header') ? get_field('references_header') : 'No references provided';
$references = get_field('references') ? get_field('references') : 'No references provided';

?>

<?php get_header(); ?>

<main role="main" class="page page--dyspareunia">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php echo $page_title ?></h1>
        <h3><?php echo $survey_header ?></h3>
        <h4><?php echo $survey_title ?></h4>
          <div class="dyspareunia__symptoms">
              <div class="dyspareunia__symptoms__table">
                  <table>
                      <thead>
                        <tr>
                            <th><?php echo $survey_column_1_header ?></th>
                            <th class="align-center"><?php echo $survey_column_2_header ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if( have_rows('survey_results') ): ?>
                          <?php while( have_rows('survey_results') ): the_row(); ?>
                            <tr>
                              <td>
                                <?php echo the_sub_field('symptom'); ?>
                              </td>
                              <td class="align-center">
                                <b><?php echo the_sub_field('percentage_reporting'); ?></b>
                              </td>
                            </tr>
                          <?php endwhile; ?>
                        <?php endif; ?>
                      </tbody>
                  </table>
                  <?php if( $dyspareunia_image ) : ?>
                      <div class="align-center show-mobile">
                          <img src="<?php echo $dyspareunia_image['url'] ?>" alt="<?php echo $dyspareunia_image['alt'] ?>">
                      </div>
                  <?php endif; ?>
                  <div class="footnote"><?php echo $survey_footnote ?></div>

                  <?php echo $survey_additional_content ?>

                  <h3 id="steroid"><?php echo $steroid_header ?></h3>
                  <h4><?php echo $intracrinology_header ?></h4>

                  <?php if( have_rows('steroid_list') ): ?>
                      <?php while( have_rows('steroid_list') ): the_row(); ?>
                          <?php echo the_sub_field('steroid_bullet_point'); ?>
                      <?php endwhile; ?>
                  <?php endif; ?>
              </div>
              <?php if( $dyspareunia_image ) : ?>
                  <div class="dyspareunia__symptoms__image show-desktop">
                      <img src="<?php echo $dyspareunia_image['url'] ?>" alt="<?php echo $dyspareunia_image['alt'] ?>">
                  </div>
              <?php endif; ?>
          </div>
          <h3 id="atrophy"><?php echo $atrophy_header ?></h3>
            <div class="dyspareunia__atrophy">
                <div class="dyspareunia__atrophy__image">
                    <img src="<?php echo $atrophy_image['url']; ?>" alt="<?php echo $atrophy_image['alt']; ?>">
                    <div class="footnote">
                        <p><?php echo $atrophy_image_caption ?></p>
                    </div>
                </div>
                <div class="dyspareunia__atrophy__info">
                    <?php if( have_rows('atrophy_list') ): ?>
                        <?php while( have_rows('atrophy_list') ): the_row(); ?>
                            <?php echo the_sub_field('atrophy_bullet_point'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
          <div class="dyspareunia__estrogen">
              <div class="dyspareunia__estrogen__quote">
                  <blockquote class="green"><?php echo $quote ?></blockquote>
              </div>
              <div class="dyspareunia__estrogen__info">
                  <h3><?php echo $hormones_header ?></h3>
                  <a href="<?php echo $discover_link ?>" class="button"><?php echo $discover_link_text ?></a>
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