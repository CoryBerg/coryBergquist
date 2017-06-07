<?php

global $geek_theme_options;
$settings_misc_header_scripts = isset($geek_theme_options['after_body_scripts'])?$geek_theme_options['after_body_scripts']:null;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
        <?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<?php echo $settings_misc_header_scripts; ?>
		<div class="wrapper">
			<header class="header clear" role="banner">
                <div class="header__meta">
                    <div class="container">
                        This site is intended for Healthcare Professionals in the United States.
                    </div>
                </div>
                <div class="header__content">
                    <div class="container">
                        <div class="header__wrapper">
                            <div class="header__logo-container">
                                <a href="<?php echo home_url(); ?>" class="header__logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
                                </a>
                                <a href="#" class="header__mobile-nav">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </div>



                            <nav class="header__nav nav <?php if( is_user_logged_in() ){ echo "logged-in"; } ?>" role="navigation">
                                <div class="nav__wrapper">

                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-header-menu',
                                            'menu_class' => 'nav__list'
                                        )
                                    );
                                    ?>

                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
			</header>

