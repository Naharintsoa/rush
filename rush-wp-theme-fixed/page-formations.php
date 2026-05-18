<?php
/**
 * Template Name: Formations
 * Template Post Type: page
 */
get_header(); ?>

<main>

  <!-- HERO -->
  <section class="page-hero gradient-hero">
    <div class="glow-orb page-hero-glow-1" style="top:50%;left:25%"></div>
    <div class="glow-orb page-hero-glow-2" style="bottom:0;right:25%"></div>
    <div class="container" style="position:relative">
      <p class="page-hero-eyebrow">Nos programmes</p>
      <h1 class="page-hero-title">
        Nos <span class="text-gradient-rush">formations</span>
      </h1>
      <p class="page-hero-desc" style="max-width:40rem">
        Rush School offre une gamme complète de formations qualifiantes, conçues pour booster
        votre carrière. Nos programmes incluent des BTS et un titre professionnel reconnus
        par l'État dans les domaines de la communication, du commercial, du management et du
        commerce international.
      </p>
    </div>
  </section>

  <!-- FORMATIONS -->
  <section class="page-section bg-white">
    <div class="container formations-list">

      <?php
      $formations = [
        [
          'code'       => 'BACHELOR RDC',
          'full'       => 'Responsable Développement Commercial',
          'level'      => 'BAC+3',
          'duration'   => '1 an en alternance',
          'parcoursup' => false,
          'skills'     => [ 'Stratégie commerciale', 'Analyse de marché', 'Pilotage KPIs', 'Négociation B2B' ],
          'tabs'       => [
            'presentation' => 'Les responsables du développement commercial sont préparés à analyser les marchés, structurer un plan d\'actions commerciales, suivre les indicateurs de performance et optimiser la relation client. Un diplôme reconnu de niveau 6 (BAC+3) qui ouvre les portes de fonctions commerciales à responsabilité.',
            'admission'    => [ 'Être titulaire d\'un BAC+2 (BTS, DUT, L2…)', 'Étude du dossier scolaire et professionnel', 'Entretien individuel de motivation', 'Admission ouverte toute l\'année jusqu\'à fin septembre' ],
            'alternance'   => [ 'Rythme : 1 semaine école / 3 semaines entreprise', 'Contrat d\'apprentissage ou de professionnalisation', 'Formation 100% prise en charge par l\'OPCO de l\'entreprise', 'Rémunération entre 43 % et 100 % du SMIC selon âge et année' ],
            'initial'      => [ 'Possibilité de suivre la formation en initial avec stage', 'Stage de 12 à 16 semaines en entreprise', 'Frais de scolarité : nous consulter' ],
          ],
        ],
        [
          'code'       => 'BTS NDRC',
          'full'       => 'Négociation et Digitalisation de la Relation Client',
          'level'      => 'BAC+2',
          'duration'   => '2 ans en alternance',
          'parcoursup' => true,
          'skills'     => [ 'Négociation', 'CRM', 'Marketing digital', 'Prospection' ],
          'tabs'       => [
            'presentation' => 'Axée sur la relation client, cette formation vous permet de maîtriser les techniques de négociation et les outils numériques pour optimiser la gestion des relations commerciales. Un BTS reconnu par l\'État (niveau 5) idéal pour les profils orientés commerce et digital.',
            'admission'    => [ 'Lycéens : candidature via Parcoursup', 'Étudiants en réorientation : dossier + entretien', 'Tous BAC acceptés (général, techno, pro)', 'Rentrée : septembre' ],
            'alternance'   => [ 'Rythme : 2 jours école / 3 jours entreprise', 'Contrat d\'apprentissage (jusqu\'à 29 ans) ou de professionnalisation', 'Aucun frais de scolarité pour l\'étudiant', 'Salaire mensuel garanti pendant les 2 ans' ],
            'initial'      => [ 'Format initial avec stages en entreprise', 'Stages de 14 semaines réparties sur les 2 ans', 'Accompagnement à la recherche de stage' ],
          ],
        ],
        [
          'code'       => 'BTS MCO',
          'full'       => 'Management Commercial Opérationnel',
          'level'      => 'BAC+2',
          'duration'   => '2 ans en alternance',
          'parcoursup' => true,
          'skills'     => [ 'Management d\'équipe', 'Gestion d\'unité', 'Pilotage performance', 'Relation client' ],
          'tabs'       => [
            'presentation' => 'Ce programme forme des managers opérationnels capables de prendre en charge la gestion commerciale d\'une unité, avec un focus sur le développement de la performance commerciale et la satisfaction client. Diplôme reconnu par l\'État (niveau 5).',
            'admission'    => [ 'Lycéens : candidature via Parcoursup', 'Étudiants en réorientation : dossier + entretien', 'Tous BAC acceptés', 'Rentrée : septembre' ],
            'alternance'   => [ 'Rythme : 2 jours école / 3 jours entreprise', 'Contrat d\'apprentissage ou de professionnalisation', 'Formation gratuite et rémunérée', 'Réseau d\'entreprises partenaires pour vous placer' ],
            'initial'      => [ 'Format initial possible avec stages', 'Stages obligatoires sur les 2 années', 'Suivi pédagogique individualisé' ],
          ],
        ],
        [
          'code'       => 'TP NTC',
          'full'       => 'Négociateur Technico-Commercial',
          'level'      => 'BAC+2',
          'duration'   => '1 an en alternance',
          'parcoursup' => true,
          'skills'     => [ 'Vente technique', 'Solutions B2B', 'Conseil client', 'Suivi commercial' ],
          'tabs'       => [
            'presentation' => 'Obtenez un titre professionnel reconnu (niveau 5) avec ce programme axé sur la négociation et la vente de solutions techniques. Apprenez à identifier les besoins des clients et à proposer des solutions adaptées en B2B.',
            'admission'    => [ 'BAC requis (général, techno ou pro)', 'Étude du dossier + entretien de motivation', 'Lycéens : également disponible sur Parcoursup', 'Rentrée : septembre / possibilité d\'entrée décalée' ],
            'alternance'   => [ 'Rythme : 1 semaine école / 3 semaines entreprise', 'Contrat de professionnalisation ou apprentissage', 'Formation gratuite, salaire mensuel', 'Insertion professionnelle rapide à l\'issue du titre' ],
            'initial'      => [ 'Format initial avec stages', 'Stage final de 8 à 12 semaines', 'Préparation intensive aux épreuves du titre' ],
          ],
        ],
      ];

      foreach ( $formations as $idx => $f ) :
        $slug = sanitize_title( $f['code'] );
      ?>

      <article class="formation-card" id="formation-<?php echo esc_attr( $slug ); ?>">

        <!-- En-tête formation -->
        <div class="formation-header">
          <div class="formation-header-left">
            <div class="formation-badges">
              <span class="badge badge-level">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
                </svg>
                <?php echo esc_html( $f['level'] ); ?>
              </span>
              <span class="badge badge-duration">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                </svg>
                <?php echo esc_html( $f['duration'] ); ?>
              </span>
            </div>
            <h2 class="formation-code text-gradient-rush"><?php echo esc_html( $f['code'] ); ?></h2>
            <h3 class="formation-full"><?php echo esc_html( $f['full'] ); ?></h3>
            <div class="formation-skills">
              <?php foreach ( $f['skills'] as $skill ) : ?>
              <span class="skill-tag"><?php echo esc_html( $skill ); ?></span>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="formation-header-right">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-rush btn-lg">
              Candidater
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
              </svg>
            </a>
            <?php if ( $f['parcoursup'] ) : ?>
            <a href="https://dossier.parcoursup.fr/Candidat/carte" target="_blank" rel="noopener noreferrer"
               class="btn btn-rush-outline btn-lg">
              Sur Parcoursup
            </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Onglets (CSS-only tabs via radio buttons) -->
        <div class="formation-tabs">
          <?php
          $tab_labels = [
            'presentation' => 'Présentation',
            'admission'    => 'Admission',
            'alternance'   => 'Alternance',
            'initial'      => 'Initial',
          ];
          foreach ( $tab_labels as $tab_key => $tab_label ) : ?>
          <input type="radio" name="tabs-<?php echo esc_attr( $slug ); ?>"
                 id="tab-<?php echo esc_attr( $slug . '-' . $tab_key ); ?>"
                 <?php echo $tab_key === 'presentation' ? 'checked' : ''; ?>>
          <?php endforeach; ?>

          <div class="formation-tabs-nav">
            <?php foreach ( $tab_labels as $tab_key => $tab_label ) : ?>
            <label for="tab-<?php echo esc_attr( $slug . '-' . $tab_key ); ?>"
                   class="formation-tab-label">
              <?php echo esc_html( $tab_label ); ?>
            </label>
            <?php endforeach; ?>
          </div>

          <?php foreach ( $f['tabs'] as $tab_key => $content ) : ?>
          <div class="formation-tab-panel" data-tab="<?php echo esc_attr( $tab_key ); ?>">
            <?php if ( is_string( $content ) ) : ?>
              <p class="tab-presentation"><?php echo esc_html( $content ); ?></p>
            <?php else : ?>
              <ul class="tab-list">
                <?php foreach ( $content as $item ) : ?>
                <li>
                  <span class="tab-list-arrow">→</span>
                  <?php echo esc_html( $item ); ?>
                </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <?php endforeach; ?>

        </div><!-- /formation-tabs -->

      </article>

      <?php endforeach; ?>

    </div><!-- /container -->
  </section>

  <!-- CTA FINAL -->
  <section class="page-section bg-mist" style="text-align:center">
    <div class="container" style="max-width:48rem;margin-left:auto;margin-right:auto">
      <h2 class="section-title">
        Une formation vous <span class="text-gradient-rush">intéresse</span> ?
      </h2>
      <p class="section-desc" style="margin-bottom:2rem">
        Candidatez en quelques minutes, notre équipe revient vers vous sous 48h.
      </p>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-rush btn-xl">
        Candidater maintenant
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/>
        </svg>
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
