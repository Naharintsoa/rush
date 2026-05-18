<?php
/**
 * Template Name: Découvrir
 * Template Post Type: page
 */
get_header(); ?>

<main>

  <!-- HERO -->
  <section class="page-hero gradient-hero">
    <div class="glow-orb page-hero-glow-1" style="top:50%;left:25%"></div>
    <div class="glow-orb page-hero-glow-2" style="bottom:0;right:25%"></div>
    <div class="container" style="position:relative">
      <p class="page-hero-eyebrow">Découvrez Rush School</p>
      <h1 class="page-hero-title">
        L'école <span class="text-gradient-rush">vue de l'intérieur</span>
      </h1>
      <p class="page-hero-desc" style="max-width:40rem">
        TAY mihitsy ny équipe, nos profs, nos événements : plongez dans l'ambiance Rush School
        et rencontrez celles et ceux qui font vivre l'école au quotidien.
      </p>s
    </div>
  </section>

  <!-- AMBASSADEURS — Ceux qui nous représentent -->
  <section class="page-section bg-mist">
    <div class="container">
      <div class="section-header-left">
        <p class="section-eyebrow">Ceux qui nous représentent</p>
        <h2 class="section-title">
          Les visages de <span class="text-gradient-rush">Rush School</span>
        </h2>
        <p class="section-desc">
          Une équipe de professionnels à votre écoute pour vous accompagner à chaque étape de votre formation.
        </p>
      </div>

      <div class="ambassadors-grid">
        <?php
        $ambassadors = [
          [
            'name'  => 'Joseph NGUYEN',
            'role'  => 'Président',
            'tag'   => 'Équipe référente · Poursuite de formation',
            'quote' => 'L\'éducation est la clé de l\'avenir professionnel. Nos programmes sont axés sur la pratique et alignés sur les besoins du marché, pour préparer nos étudiants à exceller dans le management commercial, le développement commercial et l\'influence.',
            'photo' => 'joseph.jpg',
          ],
          [
            'name'  => 'Ryma BELOUAR',
            'role'  => 'Marketing & commerciale',
            'tag'   => 'Référente Handicap · Alternance',
            'quote' => 'J\'accompagne chaque étudiant dans la recherche et la signature de son contrat d\'alternance, et je veille à l\'accessibilité de nos formations.',
            'photo' => 'ryma.jpg',
          ],
          [
            'name'  => 'Mohamed OUMENKHACHE',
            'role'  => 'Ressources humaines',
            'tag'   => 'Équipe référente · Vie étudiante',
            'quote' => 'Mon rôle est de faire le lien entre les étudiants, les entreprises partenaires et l\'équipe pédagogique tout au long de l\'année.',
            'photo' => 'mohamed.jpg',
          ],
        ];
        foreach ( $ambassadors as $p ) : ?>
        <article class="ambassador-card">
          <img src="<?php echo esc_url( RUSH_URI . '/images/' . $p['photo'] ); ?>"
               alt="<?php echo esc_attr( $p['name'] . ' — ' . $p['role'] ); ?>"
               width="300" height="300" loading="lazy"
               class="ambassador-photo">
          <h3 class="ambassador-name"><?php echo esc_html( $p['name'] ); ?></h3>
          <p class="ambassador-role"><?php echo esc_html( $p['role'] ); ?></p>
          <p class="ambassador-tag"><?php echo esc_html( $p['tag'] ); ?></p>
          <p class="ambassador-quote">"<?php echo esc_html( $p['quote'] ); ?>"</p>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ÉQUIPE PÉDAGOGIQUE -->
  <section class="page-section bg-white">
    <div class="container">
      <div class="section-header-left">
        <p class="section-eyebrow">Équipe pédagogique</p>
        <h2 class="section-title">
          Des profs qui <span class="text-gradient-rush">viennent du terrain</span>
        </h2>
        <p class="section-desc">
          Nos intervenants sont des professionnels en activité dans le commerce,
          le management et le digital.
        </p>
      </div>

      <div class="teachers-grid">
        <?php
        $teachers = [
          [ 'name' => 'Prénom Nom', 'role' => 'Responsable pédagogique',     'bio' => '15 ans d\'expérience en management commercial, intervenant en BTS MCO.' ],
          [ 'name' => 'Prénom Nom', 'role' => 'Intervenant · Négociation',   'bio' => 'Directeur commercial en poste, partage un enseignement 100 % terrain.' ],
          [ 'name' => 'Prénom Nom', 'role' => 'Intervenante · Marketing digital', 'bio' => 'Consultante digital et growth, forme nos étudiants NDRC et Bachelor RDC.' ],
          [ 'name' => 'Prénom Nom', 'role' => 'Coach alternance',            'bio' => 'Accompagne chaque étudiant dans sa recherche d\'entreprise et son intégration.' ],
        ];
        foreach ( $teachers as $t ) :
          $initials = implode( '', array_map( fn($w) => strtoupper( $w[0] ), explode( ' ', $t['name'] ) ) );
        ?>
        <article class="teacher-card">
          <div class="teacher-avatar-placeholder"><?php echo esc_html( $initials ); ?></div>
          <h3 class="teacher-name"><?php echo esc_html( $t['name'] ); ?></h3>
          <p class="teacher-role"><?php echo esc_html( $t['role'] ); ?></p>
          <p class="teacher-bio"><?php echo esc_html( $t['bio'] ); ?></p>
          <a href="#" aria-label="LinkedIn de <?php echo esc_attr( $t['name'] ); ?>" class="teacher-linkedin">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
              <rect x="2" y="9" width="4" height="12"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- GALERIE ÉVÉNEMENTS -->
  <section class="page-section bg-mist">
    <div class="container">
      <div class="section-header-left">
        <p class="section-eyebrow">Vie de l'école</p>
        <h2 class="section-title">
          Nos <span class="text-gradient-rush">événements</span>
        </h2>
        <p class="section-desc">
          JPO, remises de diplômes, hackathons, forums entreprises… Rush School,
          c'est aussi une vie étudiante riche et engageante.
        </p>
      </div>

      <div class="events-grid">
        <?php
        $events = [
          [ 'title' => 'Journée portes ouvertes', 'date' => 'Mars 2025',      'color' => 'linear-gradient(135deg,var(--rush-mist),rgba(207,232,255,.4))' ],
          [ 'title' => 'Remise des diplômes',     'date' => 'Juillet 2024',   'color' => 'linear-gradient(135deg,rgba(207,232,255,.5),rgba(195,183,238,.4))' ],
          [ 'title' => 'Hackathon commercial',    'date' => 'Mai 2024',       'color' => 'linear-gradient(135deg,rgba(195,183,238,.4),var(--rush-mist))' ],
          [ 'title' => 'Forum entreprises',       'date' => 'Octobre 2024',   'color' => 'linear-gradient(135deg,rgba(207,232,255,.3),var(--rush-mist))' ],
          [ 'title' => 'Soirée d\'intégration',  'date' => 'Septembre 2024', 'color' => 'linear-gradient(135deg,var(--rush-mist),rgba(195,183,238,.3))' ],
          [ 'title' => 'Conférence métiers',      'date' => 'Janvier 2025',   'color' => 'linear-gradient(135deg,rgba(195,183,238,.3),rgba(207,232,255,.4))' ],
        ];
        foreach ( $events as $e ) : ?>
        <article class="event-card" style="background:<?php echo $e['color']; ?>">
          <div class="event-date-badge"><?php echo esc_html( $e['date'] ); ?></div>
          <h3 class="event-title"><?php echo esc_html( $e['title'] ); ?></h3>
        </article>
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
