<?php
/**
 * Template Name: Journées Portes Ouvertes
 * Template Post Type: page
 */
get_header(); ?>

<main>

  <!-- HERO -->
  <section class="page-hero gradient-hero">
    <div class="glow-orb page-hero-glow-1" style="top:33%;left:25%"></div>
    <div class="container" style="position:relative;max-width:48rem">
      <p class="page-hero-eyebrow">Journées portes ouvertes</p>
      <h1 class="page-hero-title">
        Venez visiter <span class="text-gradient-rush">le campus</span>
      </h1>
      <p class="page-hero-desc">
        Rencontrez l'équipe pédagogique, échangez avec des étudiants en alternance et
        découvrez nos formations en conditions réelles.
      </p>
    </div>
  </section>

  <!-- DATES + FORMULAIRE -->
  <section class="page-section bg-white">
    <div class="container">
      <div class="jpo-layout">

        <!-- Dates -->
        <aside class="jpo-dates">
          <h2 class="jpo-dates-title">Prochaines dates</h2>
          <?php
          $dates = [
            [ 'date' => 'Samedi 7 février 2026',  'time' => '10h — 16h', 'place' => 'Campus Nanterre' ],
            [ 'date' => 'Samedi 14 mars 2026',    'time' => '10h — 16h', 'place' => 'Campus Nanterre' ],
            [ 'date' => 'Samedi 11 avril 2026',   'time' => '10h — 16h', 'place' => 'Campus Nanterre' ],
          ];
          foreach ( $dates as $d ) : ?>
          <div class="jpo-date-card">
            <div class="jpo-date-label">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              <?php echo esc_html( $d['date'] ); ?>
            </div>
            <div class="jpo-date-meta">
              <span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                </svg>
                <?php echo esc_html( $d['time'] ); ?>
              </span>
              <span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                </svg>
                <?php echo esc_html( $d['place'] ); ?>
              </span>
            </div>
          </div>
          <?php endforeach; ?>
        </aside>

        <!-- Formulaire -->
        <div class="jpo-form-wrap">

          <?php if ( isset( $_GET['status'] ) && $_GET['status'] === 'success' ) : ?>

            <div class="form-success">
              <div class="form-success-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/>
                </svg>
              </div>
              <h3>Inscription envoyée !</h3>
              <p>Nous vous envoyons un email de confirmation avec toutes les infos pratiques.</p>
              <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-rush-outline btn-md">
                Inscrire une autre personne
              </a>
            </div>

          <?php elseif ( isset( $_GET['status'] ) && $_GET['status'] === 'error' ) : ?>

            <div class="form-error">Une erreur s'est produite. Veuillez réessayer.</div>

          <?php endif; ?>

          <?php if ( ! isset( $_GET['status'] ) || $_GET['status'] !== 'success' ) : ?>

            <form class="rush-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
              <?php wp_nonce_field( 'rush_jpo_register', 'rush_nonce' ); ?>
              <input type="hidden" name="action" value="rush_jpo_register">

              <h2 class="form-heading">Inscription à la JPO</h2>
              <p class="form-subheading">
                Quelques infos pour préparer votre venue. Gratuit et sans engagement.
              </p>

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
                <label for="session">Date de JPO *</label>
                <select id="session" name="session" required>
                  <option value="">Choisissez une date</option>
                  <?php foreach ( $dates as $d ) : ?>
                  <option value="<?php echo esc_attr( $d['date'] ); ?>">
                    <?php echo esc_html( $d['date'] . ' — ' . $d['time'] ); ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-field">
                <label for="formation">Formation qui vous intéresse</label>
                <select id="formation" name="formation">
                  <option value="">Je ne sais pas encore</option>
                  <option value="bts-mco">BTS MCO</option>
                  <option value="bts-ndrc">BTS NDRC</option>
                  <option value="tp-ntc">TP NTC</option>
                  <option value="bachelor-rdc">Bachelor RDC</option>
                </select>
              </div>

              <div class="form-field">
                <label for="message">Questions / remarques</label>
                <textarea id="message" name="message" rows="4" maxlength="500" placeholder="Optionnel"></textarea>
              </div>

              <button type="submit" class="btn btn-rush btn-lg">
                Valider mon inscription
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
                </svg>
              </button>
            </form>

          <?php endif; ?>
        </div><!-- /jpo-form-wrap -->

      </div><!-- /jpo-layout -->
    </div>
  </section>

</main>

<?php get_footer(); ?>
