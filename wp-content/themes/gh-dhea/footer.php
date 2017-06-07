<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage GeekHive
 * @since GeekHive 1.0
 */
?>

<?php global $geek_theme_options;?>
<?php $settings_footer_text = isset($geek_theme_options['settings_footer_text'])?$geek_theme_options['settings_footer_text']:null;?>
<?php $settings_facebook = isset($geek_theme_options['social_facebook'])?$geek_theme_options['social_facebook']:null;?>
<?php $settings_twitter = isset($geek_theme_options['social_twitter'])?$geek_theme_options['social_twitter']:null;?>
<?php $settings_youtube = isset($geek_theme_options['social_youtube'])?$geek_theme_options['social_youtube']:null;?>
<?php $settings_linkedin = isset($geek_theme_options['social_linkedin'])?$geek_theme_options['social_linkedin']:null;?>
<?php $settings_misc_footer_scripts = isset($geek_theme_options['footer_scripts'])?$geek_theme_options['footer_scripts']:null;?>

			<!-- footer -->
			<footer class="footer" role="contentinfo" class="footer">
				<div class="container">
					<div class="footer__wrapper">
                        <div class="footer--mobile show-mobile">
                            <div class="footer__menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-primary-menu',
                                        'menu_class' => 'footer__list'
                                    )
                                );
                                ?>
                            </div>
                            <div class="footer__info">
                                <div class="footer__logo">
                                    <a href="https://www.amagpharma.com/">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-amag.png" alt="Logo">
                                    </a>
                                </div>
                                <div class="footer__copyright">
                                    <span>&copy;2017 AMAG Pharmaceuticals, Inc.</span>
                                    <span>All rights reserved.</span>
                                    <span>NP-INR-US-00001</span>
                                    <span>04/17</span>
                                </div>
                            </div>
                        </div>
                        <div class="footer--desktop show-desktop">
                            <div class="footer__info">
                                <div class="footer__info__left">
                                    <div class="footer__logo">
                                        <a href="https://www.amagpharma.com/">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-amag.png" alt="Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__info__right">
                                    <div class="footer__copyright">
                                        <span>&copy;2017 AMAG Pharmaceuticals, Inc.</span>
                                        <span>All rights reserved.</span>
                                    </div>
                                    <div class="footer__meta">
                                        <span>NP-INR-US-00001</span>
                                        <span>04/17</span>
                                    </div>
                                </div>
                            </div>
                            <div class="footer__menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-primary-menu',
                                        'menu_class' => 'footer__list'
                                    )
                                );
                                ?>
                            </div>
                        </div>
					</div>

				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<?php echo $settings_misc_footer_scripts; ?>

	</body>
</html>
