<?php
/**
 * The template for the home page of Cult Health Intrarosa
 */
?>

<?php

$tagline_text = get_field('tagline_text') ? get_field('tagline_text') : 'No tagline text provided' ;
$tagline_help_text = get_field('tagline_help_text') ? get_field('tagline_help_text') : 'No tagline help text provided';
$pull_back_text = get_field('pull_back_text') ? get_field('pull_back_text') : 'No "pull back" text provided' ;
$pull_back_link = get_field('pull_back_link') ? get_field('pull_back_link') : '#';
$callout_header = get_field('callout_header') ? get_field('callout_header') : 'No callout header text provided';
$video = get_field('video') ? get_field('video') : null;
$download = get_field('download') ? get_field('download') : null;

if ( $video )
{
  $post = $video;
  setup_postdata( $post );

  $video_description = get_field('video_description') ? get_field('video_description') : 'No video description text provided';
  $video_button_text = get_field('video_button_text') ? get_field('video_button_text') : 'Watch Video';
  $video_link = get_field('video_link') ? get_field('video_link') : '';

  wp_reset_postdata();
}

if ( $download )
{
  $post = $download;
  setup_postdata( $post );

  $download_callout_description = get_field('download_callout_description') ? get_field('download_callout_description') : 'No download callout description provided.';
  $download_callout_button_text = get_field('download_callout_button_text') ? get_field('download_callout_button_text') : 'Download';

  $download_overlay_description = get_field('download_overlay_description') ? get_field('download_overlay_description') : 'No overlay description provided.';
  $download_overlay_success_message = get_field('download_overlay_success_message') ? get_field('download_overlay_success_message') : 'No success message provided';
  $download_overlay_contact_form_shortcode = get_field('download_overlay_contact_form_shortcode') ? get_field('download_overlay_contact_form_shortcode') : 'No contact form shortcode provided.';
  $download_overlay_disclaimer = get_field('download_overlay_disclaimer') ? get_field('download_overlay_disclaimer') : 'No disclaimer provided.';

  wp_reset_postdata();
}

?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="home" role="main">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="home__bed-container-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/sheets.png" class="home__sheets">
                <div class="home__tagline home__content">
                    <div class="home__tagline__discover"><?php echo $tagline_text ?></div>
                    <div class="home__tagline__help"><?php echo $tagline_help_text ?></div>
                </div>
                <div class="home__pull-back home__content">
                    <a href="<?php echo $pull_back_link ?>"><?php echo $pull_back_text ?></a>
                </div>
            </div>
            <div class="home__bar home__content">
                <div class="home__bar__container">
                    <h2 class="home__bar__container__title"><?php echo $callout_header ?></h2>

                    <?php if( have_rows('callout_list') ): ?>
                      <ul class="home__bar__container__list">
                        <?php while( have_rows('callout_list') ): the_row(); ?>
                          <li><?php echo the_sub_field('callout_item'); ?></li>
                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>

                    <div class="home__bar__container__box home__bar__container__box--video">
                        <div class="home__bar__container__box__content"><?php echo $video_description ?></div>
                        <div class="home__bar__container__box__button align-right">
                            <a href="#" class="button button--video modal-link modal-video"><?php echo $video_button_text ?></a>
                        </div>
                    </div>
                    <div class="home__bar__container__box home__bar__container__box--signup">
                        <div class="home__bar__container__box__content"><?php echo $download_callout_description ?></div>
                        <div class="home__bar__container__box__button align-right">
                            <a href="#" class="button modal-link modal-sign-up"><?php echo $download_callout_button_text ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; else: ?>
          <html>no posts found</html>
        <?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="modal modal--sign-up">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modal-close.png" class="modal__close">
        <div class="modal__content">
            <h3 class="modal__content__title">
                <span class="default"><?php echo $download_overlay_description ?></span>
                <span class="success"><?php echo $download_overlay_success_message ?></span>
            </h3>
            <div class="modal__content__form"><?php echo apply_filters('the_content', $download_overlay_contact_form_shortcode); ?></div>
            <div class="modal__content__footer"><?php echo $download_overlay_disclaimer ?></div>
        </div>
    </div>
    <div class="modal modal--video">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/modal-close.png" class="modal__close">
        <div class="modal__content">
            <div class="video-container">
                <iframe src="<?php echo $video_link ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = '/thank-you-for-signing-up';
        }, false );
    </script>
<?php
get_footer();
