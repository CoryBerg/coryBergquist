<?php
/**
 * General page template
 */


?>

<?php get_header(); ?>

<main role="main" class="page">

  <section class="page__content">
    <div class="container">
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="page__title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; else: ?>
        <html>no posts found</html>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>