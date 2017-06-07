<?php

/**
 * The template for the 404 page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<div class="page four-o-four">
    <div class="page__content">
        <div class="container">
            <main role="main">
                <!-- section -->
                <section>

                    <!-- article -->
                    <article id="post-404">

                        <h1 class="page__title"><?php _e( 'Sorry! That page can’t be found', 'html5blank' ); ?></h1>
                        <p>
                            Please check the address you have entered and try again.
                        </p>
                        <p>
                            You can also click below to return to the uncoverDHEA homepage.
                        </p>
                        <p>
                            <a class="button button--blue" href="<?php echo home_url(); ?>"><?php _e( 'Return home', 'html5blank' ); ?></a>
                        </p>
                    </article>
                    <!-- /article -->

                </section>
                <!-- /section -->
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
