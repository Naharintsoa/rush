<?php
/**
 * Template Name: Assistance administrative
 * Template Post Type: page
 */
get_header(); ?>

<main>

  <!-- HERO -->
  <section class="page-hero gradient-hero">
    <div class="glow-orb page-hero-glow-1" style="top:33%;right:25%"></div>
    <div class="container" style="position:relative;max-width:48rem">

      <div class="page-hero-badge">
        <!-- LifeBuoy icon -->
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10"/>
          <circle cx="12" cy="12" r="4"/>
          <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/>
          <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/>
          <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/>
          <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/>
        </svg>
        Assistance
      </div>

      <h1 class="page-hero-title">
        Assistance <span class="text-gradient-rush">administrative</span>
      </h1>
      <p class="page-hero-desc">
        Un document à récupérer, une question sur votre contrat d'alternance, un souci de
        dossier ? Notre équipe vous répond sous 48h ouvrées.
      </p>
    </div>
  </section>

  <!-- FORMULAIRE -->
  <section class="page-section bg-white">
    <div class="container" style="max-width:48rem">

      <?php if ( isset( $_GET['status'] ) && $_GET['status'] === 'success' ) : ?>

        <!-- Succès -->
        <div class="form-success">
          <div class="form-success-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
          </div>
          <h3>Demande envoyée</h3>
          <p>
            Un accusé de réception a été envoyé à votre adresse email. Notre équipe revient
            vers vous rapidement.
          </p>
          <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-rush-outline btn-md">
            Envoyer une nouvelle demande
          </a>
        </div>

      <?php elseif ( isset( $_GET['status'] ) && $_GET['status'] === 'error' ) : ?>

        <div class="form-error">Une erreur s'est produite. Veuillez réessayer.</div>

      <?php endif; ?>

      <?php if ( ! isset( $_GET['status'] ) || $_GET['status'] !== 'success' ) : ?>

        <form class="rush-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
          <?php wp_nonce_field( 'rush_assistance_request', 'rush_nonce' ); ?>
          <input type="hidden" name="action" value="rush_assistance_request">

          <div class="form-grid-2">
            <div class="form-field">
              <label for="firstname">Prénom *</label>
              <input type="text" id="firstname" name="firstname" required minlength="2" maxlength="80" placeholder="Léa">
            </div>
            <div class="form-field">
              <label for="lastname">Nom *</label>
              <input type="text" id="lastname" name="lastname" required minlength="2" maxlength="80" placeholder="Martin">
            </div>
          </div>

          <div class="form-grid-2">
            <div class="form-field">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" required maxlength="255" placeholder="lea@exemple.com">
            </div>
            <div class="form-field">
              <label for="phone">Téléphone</label>
              <input type="tel" id="phone" name="phone" maxlength="30" placeholder="06 12 34 56 78">
            </div>
          </div>

          <div class="form-field">
            <label for="topic">Sujet *</label>
            <select id="topic" name="topic" required>
              <option value="">Choisissez un sujet</option>
              <option value="certificat">Certificat de scolarité</option>
              <option value="convention">Convention de stage / alternance</option>
              <option value="dossier">Problème de dossier administratif</option>
              <option value="diplome">Attestation de diplôme</option>
              <option value="autre">Autre demande</option>
            </select>
          </div>

          <div class="form-field">
            <label for="message">Votre message *</label>
            <textarea id="message" name="message" required minlength="10" maxlength="1500" rows="6"
                      placeholder="Décrivez votre demande en quelques lignes…"></textarea>
          </div>

          <button type="submit" class="btn btn-rush btn-lg">
            Envoyer ma demande
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="22" y1="2" x2="11" y2="13"/>
              <polygon points="22 2 15 22 11 13 2 9 22 2"/>
            </svg>
          </button>
        </form>

      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
