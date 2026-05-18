<?php
/**
 * Template Name: Page standard
 * Template Post Type: page
 */
get_header(); ?>

<main id="main-content" style="padding-top: 7rem;">
  <div class="container" style="padding-top:3rem;padding-bottom:5rem;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="page-content">
        <h1 class="section-title" style="margin-bottom:2rem"><?php the_title(); ?></h1>
        <div style="max-width:52rem;color:#4a4a5a;line-height:1.8;font-size:1.0625rem">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer();
