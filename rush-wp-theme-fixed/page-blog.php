<?php
/**
 * Template Name: Blog
 * Template Post Type: page
 */
get_header(); ?>

<main>
  <section class="page-section page-section-top bg-white">
    <div class="container">
      <div class="section-header-left">
        <p class="section-eyebrow">Actualités</p>
        <h1 class="section-title">Le <span class="text-gradient-rush">Blog</span> Rush School</h1>
        <p class="section-desc">Articles, conseils et actualités directement depuis rush-school.com.</p>
      </div>

      <?php
      $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
      $blog_query = new WP_Query( [
        'post_type'      => 'post',
        'posts_per_page' => 12,
        'paged'          => $paged,
      ] );

      if ( $blog_query->have_posts() ) :
      ?>
      <div class="blog-grid">
        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="blog-card">
          <div class="blog-card-image">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large', [ 'loading' => 'lazy' ] ); ?>
            <?php else : ?>
              <div class="blog-card-placeholder"></div>
            <?php endif; ?>
          </div>
          <div class="blog-card-body">
            <p class="blog-card-date"><?php echo get_the_date( 'j F Y' ); ?></p>
            <h2 class="blog-card-title"><?php the_title(); ?></h2>
            <p class="blog-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 25, '…' ); ?></p>
            <span class="blog-card-link">Lire la suite<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg></span>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
      <?php else : ?>
        <p class="blog-empty">Aucun article publié pour le moment.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
