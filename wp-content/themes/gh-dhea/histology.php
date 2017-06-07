<?php
/**
 * Template Name: Histology/Physiology
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$page_title = get_field('page_title' ) ? get_field('page_title') : 'No page title provided' ;

$before_menopause_image = get_field('before_menopause_image') ? get_field('before_menopause_image') : '';
$before_menopause_header = get_field('before_menopause_header') ? get_field('before_menopause_header') : 'No header text provided';
$before_menopause_subheader = get_field('before_menopause_subheader') ? get_field('before_menopause_subheader') : 'No subheader text provided';
$after_menopause_image = get_field('after_menopause_image') ? get_field('after_menopause_image') : '';
$after_menopause_header = get_field('after_menopause_header') ? get_field('after_menopause_header') : 'No header text provided';
$after_menopause_subheader = get_field('after_menopause_subheader') ? get_field('after_menopause_subheader') : 'No subheader text provided';

$warning_text = get_field('warning_text') ? get_field('warning_text') : 'No warning text provided';
$graph_header = get_field('graph_header') ? get_field('graph_header') : 'No warning text provided';
$chart_1_image = get_field('chart_1_image') ? get_field('chart_1_image') : '';
$chart_1_description = get_field('chart_1_description') ? get_field('chart_1_description') : 'No chart description provided';
$chart_2_image = get_field('chart_2_image') ? get_field('chart_2_image') : '';
$chart_2_description = get_field('chart_2_description') ? get_field('chart_2_description') : 'No chart description provided';
$awareness_text = get_field('awareness_text') ? get_field('awareness_text') : 'No awareness text provided';
$learn_more_text = get_field('learn_more_text') ? get_field('learn_more_text') : 'No learn more text provided';
$learn_more_link = get_field('learn_more_link') ? get_field('learn_more_link') : '#';

$references_header = get_field('references_header') ? get_field('references_header') : 'No references provided';
$references = get_field('references') ? get_field('references') : 'No references provided';

?>

<?php get_header(); ?>

<main role="main" class="page page--histology">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php echo $page_title ?></h1>
        <div class="histology__wall-wrapper">
            <div class="histology__wall__info">
                <div class="histology__wall__info__before">
                    <h3><?php echo $before_menopause_header ?></h3>
                    <img class="show-mobile histology__wall__info__before__image" src="<?php echo $before_menopause_image['url'] ?>" alt="<?php echo $before_menopause_image['alt'] ?>">
                    <h4><?php echo $before_menopause_subheader ?></h4>

                    <?php if( have_rows('before_menopause_list') ): ?>
                        <?php while( have_rows('before_menopause_list') ): the_row(); ?>
                            <?php echo the_sub_field('before_menopause_bullet_point'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="histology__wall__info__after">
                    <h3><?php echo $after_menopause_header ?></h3>
                    <img class="show-mobile histology__wall__info__after__image" src="<?php echo $after_menopause_image['url'] ?>" alt="<?php echo $after_menopause_image['alt'] ?>">
                    <h4><?php echo $after_menopause_subheader ?></h4>

                    <?php if( have_rows('after_menopause_list') ): ?>
                        <?php while( have_rows('after_menopause_list') ): the_row(); ?>
                            <?php echo the_sub_field('after_menopause_bullet_point'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="histology__wall__image show-desktop">
                <div class="histology__wall__image__before">
                    <img src="<?php echo $before_menopause_image['url'] ?>" alt="<?php echo $before_menopause_image['alt'] ?>">
                </div>
                <div class="histology__wall__image__after">
                    <img src="<?php echo $after_menopause_image['url'] ?>" alt="<?php echo $after_menopause_image['alt'] ?>">
                </div>
            </div>
        </div>
          <div class="histology__impact-wrapper">
              <div class="histology__impact__quote">
                <blockquote class="green"><?php echo $warning_text ?></blockquote>
              </div>
              <div class="histology__impact__graphs">
                  <h3 id="vva" class="histology__impact__graphs__title"><?php echo $graph_header ?></h3>
                  <div class="histology__impact__graphs__graph histology__impact__graphs__graph--green">
                      <img src="<?php echo $chart_1_image['url'] ?>" alt="<?php echo $chart_1_image['alt'] ?>">
                      <h3 class="green"><?php echo $chart_1_description ?></h3>
                  </div>
                  <div class="histology__impact__graphs__graph histology__impact__graphs__graph--blue">
                      <img src="<?php echo $chart_2_image['url'] ?>" alt="<?php echo $chart_2_image['alt'] ?>">
                      <h3><?php echo $chart_2_description ?></h3>
                  </div>
              </div>
              <div class="histology__impact__info">
                  <h3 class="green"><?php echo $awareness_text ?></h3>
              </div>
          </div>
          <div class="align-center">
              <a href="<?php echo $learn_more_link ?>" class="button"><?php echo $learn_more_text ?></a>
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