<?php
/**
 * Template Name: DHEA
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php

$page_title = get_field('page_title' ) ? get_field('page_title') : 'No page title provided' ;

$dhea_header = get_field('dhea_header') ? get_field('dhea_header') : 'No dhea header text provided';
$dhea_description = get_field('dhea_description') ? get_field('dhea_description') : 'No dhea description provided';
$premenopause_header = get_field('premenopause_header') ? get_field('premenopause_header') : 'No premenopause header provided';
$premenopause_image = get_field('premenopause_image') ? get_field('premenopause_image') : null;
$premenopause_description = get_field('premenopause_description') ? get_field('premenopause_description') : 'No premenopause description provided';
$premenopause_footnote = get_field('premenopause_footnote') ? get_field('premenopause_footnote') : '';
$premenopause_content = get_field('premenopause_content') ? get_field('premenopause_content') : 'No premenopause content provided';
$postmenopause_header = get_field('postmenopause_header') ? get_field('postmenopause_header') : 'No postmenopause header provided';
$postmenopause_image = get_field('postmenopause_image') ? get_field('postmenopause_image') : null;
$postmenopause_description = get_field('postmenopause_description') ? get_field('postmenopause_description') : 'No postmenopause description provided';
$postmenopause_footnote = get_field('postmenopause_footnote') ? get_field('postmenopause_footnote') : '';
$postmenopause_content = get_field('postmenopause_content') ? get_field('postmenopause_content') : 'No postmenopause content provided';
$dhea_footnote = get_field('dhea_footnote') ? get_field('dhea_footnote') : 'No dhea footer text provided';

$effect_header = get_field('effect_header') ? get_field('effect_header') : 'No effect header text provided';
$effect_subheader = get_field('effect_subheader') ? get_field('effect_subheader') : 'No effect subheader text provided';
$effect_image = get_field('effect_image') ? get_field('effect_image') : null;
$effect_list_header = get_field('effect_list_header') ? get_field('effect_list_header') : 'No effect list header text provided';

$aging_header = get_field('aging_header') ? get_field('aging_header') : 'No aging header text provided';
$aging_subheader = get_field('aging_subheader') ? get_field('aging_subheader') : 'No aging subheader text provided';
$aging_image = get_field('aging_image') ? get_field('aging_image') : null;
$aging_mobile_image = get_field('aging_mobile_image') ? get_field('aging_mobile_image') : null;
$aging_image_caption = get_field('aging_image_caption') ? get_field('aging_image_caption') : '';
$reduced_dhea_text = get_field('reduced_dhea_text') ? get_field('reduced_dhea_text') : 'No reduced dhea text provided';
$learn_link_text = get_field('learn_link_text') ? get_field('learn_link_text') : 'No learn link text provided';
$learn_link = get_field('learn_link') ? get_field('learn_link') : '#';
$learn_link_disclaimer = get_field('learn_link_disclaimer') ? get_field('learn_link_disclaimer') : '';

$references_header = get_field('references_header') ? get_field('references_header') : 'No references provided';
$references = get_field('references') ? get_field('references') : 'No references provided';

?>

<?php get_header(); ?>

<main role="main" class="page page--dhea">
  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php echo $page_title ?></h1>
          <h3><?php echo $dhea_header ?></h3>
          <?php echo $dhea_description ?>
          <div class="dhea__pre-post-wrapper">
              <div class="dhea__pre-post__pre">
                  <div class="dhea__pre-post__diagram">
                      <h3><?php echo $premenopause_header ?></h3>
                      <div class="dhea__pre-post__diagram__image">
                          <img src="<?php echo $premenopause_image['url']; ?>" alt="<?php echo $premenopause_image['alt']; ?>">
                      </div>
                      <?php echo $premenopause_description ?>
                      <div class="footnote"><?php echo $premenopause_footnote ?></div>
                  </div>
                  <?php echo $premenopause_content ?>
              </div>
              <div class="dhea__pre-post__post">
                  <div class="dhea__pre-post__diagram">
                      <h3><?php echo $postmenopause_header ?></h3>
                      <div class="dhea__pre-post__diagram__image">
                          <img src="<?php echo $postmenopause_image['url']; ?>" alt="<?php echo $postmenopause_image['alt']; ?>">
                      </div>
                      <?php echo $postmenopause_description ?>
                      <div class="footnote"><?php echo $postmenopause_footnote ?></div>
                  </div>
                  <?php echo $postmenopause_content ?>
              </div>
          </div>
            <div class="footnote"><?php echo $dhea_footnote ?></div>
            <div class="dhea__effect">
                <div class="dhea__effect__info">
                    <h3 id="tissues"><?php echo $effect_header ?></h3>
                    <h4><?php echo $effect_subheader ?></h4>
                    <p><?php echo $effect_list_header ?></p>

                    <?php if( have_rows('effect_list') ): ?>
                        <?php while( have_rows('effect_list') ): the_row(); ?>
                            <?php echo the_sub_field('effect_bullet_point'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="dhea__effect__image">
                    <img src="<?php echo $effect_image['url']; ?>" alt="<?php echo $effect_image['alt']; ?>">
                </div>
            </div>
            <div class="dhea__decline">
                <div class="dhea__decline__info">
                    <h3 id="production"><?php echo $aging_header ?></h3>
                    <h4><?php echo $aging_subheader ?></h4>
                    <div class="show-mobile align-center">
                        <img src="<?php echo $aging_mobile_image['url']; ?>" alt="<?php echo $aging_mobile_image['alt']; ?>">
                    </div>
                    <img class="show-desktop" src="<?php echo $aging_image['url']; ?>" alt="<?php echo $aging_image['alt']; ?>">
                    <div class="footnote"><?php echo $aging_image_caption ?></div>

                    <?php if( have_rows('aging_list') ): ?>
                        <?php while( have_rows('aging_list') ): the_row(); ?>
                            <?php echo the_sub_field('aging_bullet_point'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="dhea__decline__quote">
                    <blockquote><?php echo $reduced_dhea_text ?></blockquote>
                    <a href="<?php echo $learn_link ?>" class="button"><?php echo $learn_link_text ?></a>
                    <div class="footnote"><?php echo $learn_link_disclaimer ?></div>
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

