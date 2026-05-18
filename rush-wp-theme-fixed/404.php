<?php get_header(); ?>

<main style="min-height:70vh;display:flex;align-items:center;padding-top:7rem">
  <div class="container" style="text-align:center;padding:5rem 0">
    <h1 class="section-title">Page <span class="text-gradient-rush">introuvable</span></h1>
    <p style="color:#6b6b80;font-size:1.125rem;margin:1.5rem auto 2.5rem;max-width:28rem">
      La page que vous cherchez n'existe pas ou a été déplacée.
    </p>
    <a href="<?php echo home_url('/'); ?>" class="btn btn-rush btn-lg">Retour à l'accueil</a>
  </div>
</main>

<?php get_footer();
