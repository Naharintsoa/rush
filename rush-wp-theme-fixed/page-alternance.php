<?php
/**
 * Template Name: Alternance
 * Template Post Type: page
 */
get_header(); ?>

<main>

  <!-- HERO -->
  <section class="page-hero gradient-hero">
    <div class="glow-orb page-hero-glow-1" style="top:10%;left:15%"></div>
    <div class="container" style="position:relative">
      <div class="page-hero-split">

        <div>
          <p class="page-hero-eyebrow">L'alternance Rush</p>
          <h1 class="page-hero-title">
            Apprendre en <span class="text-gradient-rush">entreprise</span>
          </h1>
          <p class="page-hero-desc">
            100% de nos formations sont en alternance. Études financées, salaire chaque mois,
            expérience valorisante : c'est la formule gagnante pour réussir.
          </p>
        </div>

        <div>
          <img src="<?php echo esc_url( RUSH_URI . '/images/alternance.jpg' ); ?>" alt="Alternance en entreprise" class="rounded-3xl shadow-glow" loading="lazy" width="1280" height="960" style="width:100%;height:auto;display:block">
        </div>

      </div>
    </div>
  </section>

  <!-- AVANTAGES -->
  <section class="page-section bg-white">
    <div class="container">
      <div class="section-header-left">
        <p class="section-eyebrow">Pourquoi l'alternance</p>
        <h2 class="section-title">
          Les avantages de <span class="text-gradient-rush">l'alternance</span>
        </h2>
      </div>

      <div class="advantages-grid">
        <?php
        $advantages = [
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>',
            'title' => '0 € de frais',
            'desc'  => 'Votre formation est intégralement financée par l\'entreprise et l\'OPCO.',
          ],
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>',
            'title' => 'Salaire mensuel',
            'desc'  => 'Vous percevez un salaire dès le premier mois en alternance.',
          ],
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
            'title' => 'Diplôme reconnu',
            'desc'  => 'Tous nos titres sont reconnus par l\'État et inscrits au RNCP.',
          ],
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>',
            'title' => 'Expérience pro',
            'desc'  => '1 à 2 ans d\'expérience avant même votre diplôme.',
          ],
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>',
            'title' => 'Réseau professionnel',
            'desc'  => 'Rencontrez des dizaines de pros et bâtissez votre carnet d\'adresses.',
          ],
          [
            'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
            'title' => 'Insertion accélérée',
            'desc'  => '98 % de nos alternants trouvent un poste dès la sortie.',
          ],
        ];
        foreach ( $advantages as $a ) : ?>
        <div class="advantage-card">
          <div class="advantage-icon"><?php echo $a['icon']; ?></div>
          <h3 class="advantage-title"><?php echo esc_html( $a['title'] ); ?></h3>
          <p class="advantage-desc"><?php echo esc_html( $a['desc'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PARTENAIRES -->
  <!-- partners section removed (template part not found) -->

  <!-- 4 ÉTAPES -->
  <section class="page-section bg-mist">
    <div class="container">
      <div class="section-header-center">
        <p class="section-eyebrow">Comment ça marche</p>
        <h2 class="section-title">
          Votre parcours en <span class="text-gradient-rush">4 étapes</span>
        </h2>
      </div>

      <div class="steps-list steps-list--narrow">
        <?php
        $steps = [
          [ 'n' => '01', 'title' => 'Candidatez en ligne',     'desc' => 'Remplissez notre formulaire en quelques minutes.' ],
          [ 'n' => '02', 'title' => 'Entretien d\'admission',  'desc' => 'Échangez avec notre équipe pour valider votre projet.' ],
          [ 'n' => '03', 'title' => 'Recherche d\'entreprise', 'desc' => 'Nous vous accompagnons activement pour trouver votre alternance.' ],
          [ 'n' => '04', 'title' => 'Signature et rentrée',    'desc' => 'Vous démarrez votre formation et votre vie pro en même temps.' ],
        ];
        foreach ( $steps as $s ) : ?>
        <div class="step-card">
          <div class="step-number text-gradient-rush"><?php echo esc_html( $s['n'] ); ?></div>
          <div>
            <h3 class="step-title"><?php echo esc_html( $s['title'] ); ?></h3>
            <p class="step-desc"><?php echo esc_html( $s['desc'] ); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="rush-cta">
    <div class="container">
      <div class="cta-inner">
        <h2 class="cta-title">
          Prêt à <span class="text-gradient-rush">accélérer</span><br>votre carrière ?
        </h2>
        <p class="cta-desc">
          Candidatez en quelques minutes et rejoignez la promo Rush School.
          Notre équipe vous accompagne à chaque étape, de l'admission à la signature de votre alternance.
        </p>
        <div class="cta-actions">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-rush btn-xl">
            Candidater maintenant
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/formations' ) ); ?>" class="btn btn-rush-outline btn-xl">
            Voir les formations
          </a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
