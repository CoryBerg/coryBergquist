<?php
/**
 * Template Name: Sex Health
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$page_title = get_field('page_title' ) ? get_field('page_title') : 'No page title provided' ;

$vva_gsm_header = get_field('vva_gsm_header') ? get_field('vva_gsm_header') : 'No vva/gsm header text provided';
$consequences_subheader = get_field('consequences_subheader') ? get_field('consequences_subheader') : 'No consequences subheader provided';
$sex_health_bar_graph_image = get_field('sex_health_bar_graph_image') ? get_field('sex_health_bar_graph_image') : null;
$sex_health_bar_graph_mobile_image = get_field('sex_health_bar_graph_mobile_image') ? get_field('sex_health_bar_graph_mobile_image') : null;
$sex_health_bar_graph_footnote = get_field('sex_health_bar_graph_footnote') ? get_field('sex_health_bar_graph_footnote') : '';
$avoidance_subheader = get_field('avoidance_subheader') ? get_field('avoidance_subheader') : 'No avoidance subheader provided';
$quote_text = get_field('quote_text') ? get_field('quote_text') : 'No quote text provided';
$sex_health_image = get_field('sex_health_image') ? get_field('sex_health_image') : null;

$emotional_pain_header = get_field('emotional_pain_header') ? get_field('emotional_pain_header') : 'No emotional pain header provided';
$emotional_pain_footnote = get_field('emotional_pain_footnote') ? get_field('emotional_pain_footnote') : '';
$postmenopausal_women_subheader = get_field('postmenopausal_women_subheader') ? get_field('postmenopausal_women_subheader') : 'No postmenopausal women subheader provided';
$postmenopausal_women_graph_image = get_field('postmenopausal_women_graph_image') ? get_field('postmenopausal_women_graph_image') : null;
$postmenopausal_women_graph_mobile_image = get_field('postmenopausal_women_graph_mobile_image') ? get_field('postmenopausal_women_graph_mobile_image') : null;
$postmenopausal_women_footnote = get_field('postmenopausal_women_footnote') ? get_field('postmenopausal_women_footnote') : '';

$overlooked_header = get_field('overlooked_header') ? get_field('overlooked_header') : 'No overlooked header provided';
$overlooked_graph_description = get_field('overlooked_graph_description') ? get_field('overlooked_graph_description') : 'No overlooked graph description provided';
$overlooked_graph_image = get_field('overlooked_graph_image') ? get_field('overlooked_graph_image') : null;
$overlooked_footnote = get_field('overlooked_footnote') ? get_field('overlooked_footnote') : '';
$closer_look_link_text = get_field('closer_look_link_text') ? get_field('closer_look_link_text') : 'No closer look link text provided';
$closer_look_link = get_field('closer_look_link') ? get_field('closer_look_link') : '#';

$references_header = get_field('references_header') ? get_field('references_header') : 'No references header provided';
$references = get_field('references') ? get_field('references') : 'No references provided';

?>

<?php get_header(); ?>

<main role="main" class="page page--sex-health">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php echo $page_title ?></h1>
          <div class="sex-health__top">
              <div class="sex-health__top__left">
                  <h3><?php echo $vva_gsm_header ?></h3>
                  <h4><?php echo $consequences_subheader ?></h4>
                  <div class="sex-health__top__graph">
                      <div class="sex-health__top__graph__legend">
                          <span class="sex-health__top__graph__legend__title">Percentage of responders</span>
                          <span class="sex-health__top__graph__legend__female">Female</span>
                          <span class="sex-health__top__graph__legend__male">Male</span>
                      </div>
                      <div class="show-mobile align-center">
                          <img src="<?php echo $sex_health_bar_graph_mobile_image['url'] ?>" alt="<?php echo $sex_health_bar_graph_mobile_image['alt'] ?>">
                      </div>
                      <img class="show-desktop" src="<?php echo $sex_health_bar_graph_image['url'] ?>" alt="<?php echo $sex_health_bar_graph_image['alt'] ?>">
                  </div>
                  <div class="footnote"><?php echo $sex_health_bar_graph_footnote ?></div>

                  <h4><?php echo $avoidance_subheader ?></h4>

                  <?php if( have_rows('avoidance_list') ): ?>
                      <?php while( have_rows('avoidance_list') ): the_row(); ?>
                          <?php echo the_sub_field('avoidance_bullet_point'); ?>
                      <?php endwhile; ?>
                  <?php endif; ?>

                  <div class="show-mobile align-center">
                      <img src="<?php echo $sex_health_image['url'] ?>" alt="<?php echo $sex_health_image['alt'] ?>">
                  </div>
                  <blockquote><?php echo $quote_text ?></blockquote>
              </div>
              <div class="sex-health__top__right show-desktop">
                <img src="<?php echo $sex_health_image['url'] ?>" alt="<?php echo $sex_health_image['alt'] ?>">
              </div>
          </div>
          <div class="sex-health__bottom">
              <h3 id="pain"><?php echo $emotional_pain_header ?></h3>
              <div class="sex-health__bottom__pain-wrapper">
                  <div class="sex-health__bottom__pain__chart">
                      <h4><?php echo $postmenopausal_women_subheader ?></h4>

                      <div class="show-mobile align-center">
                          <img src="<?php echo $postmenopausal_women_graph_mobile_image['url'] ?>" alt="<?php echo $postmenopausal_women_graph_mobile_image['alt'] ?>">
                      </div>
                      <img class="show-desktop" src="<?php echo $postmenopausal_women_graph_image['url'] ?>" alt="<?php echo $postmenopausal_women_graph_image['alt'] ?>">

                      <div class="footnote"><?php echo $postmenopausal_women_footnote ?></div>
                  </div>
                  <div class="sex-health__bottom__pain__info">
                      <?php if( have_rows('emotional_pain_list') ): ?>
                          <?php while( have_rows('emotional_pain_list') ): the_row(); ?>
                              <?php echo the_sub_field('emotional_pain_bullet_point'); ?>
                          <?php endwhile; ?>
                      <?php endif; ?>

                      <div class="footnote"><?php echo $emotional_pain_footnote ?></div>
                  </div>
              </div>
              <h3 id="ignored"><?php echo $overlooked_header ?></h3>
              <div class="sex-health__bottom__ignored-wrapper">
                  <div class="sex-health__bottom__ignored__title">
                    <h3 class="green"><?php echo $overlooked_graph_description ?></h3>
                  </div>
                  <div class="sex-health__bottom__ignored__chart">
                      <img src="<?php echo $overlooked_graph_image['url'] ?>" alt="<?php echo $overlooked_graph_image['alt'] ?>">
                  </div>
                  <div class="sex-health__bottom__ignored__info">
                      <?php if( have_rows('overlooked_list') ): ?>
                          <?php while( have_rows('overlooked_list') ): the_row(); ?>
                              <?php echo the_sub_field('overlooked_bullet_point'); ?>
                          <?php endwhile; ?>
                      <?php endif; ?>

                      <div class="footnote"><?php echo $overlooked_footnote ?></div>
                      <a href="<?php echo $closer_look_link ?>" class="button"><?php echo $closer_look_link_text ?></a>
                  </div>
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