<?php get_header(); ?>

<!-- ========================================================
     HERO
     ======================================================== -->
<section class="rush-hero" id="hero">

  <div class="hero-stage">
    <?php
    $slides = [
      [ 'src' => RUSH_URI . '/images/hero-3d-1.jpg', 'alt' => 'Étudiant Rush School en blazer dans un campus moderne' ],
      [ 'src' => RUSH_URI . '/images/hero-3d-2.jpg', 'alt' => 'Groupe d\'étudiants Rush School collaborant en classe' ],
      [ 'src' => RUSH_URI . '/images/hero-3d-3.jpg', 'alt' => 'Campus Rush School au coucher du soleil' ],
    ];
    foreach ( $slides as $i => $slide ) :
    ?>
    <div class="hero-slide<?php echo $i === 0 ? ' is-active' : ''; ?>" data-slide="<?php echo $i; ?>">
      <img src="<?php echo esc_url( $slide['src'] ); ?>"
           alt="<?php echo esc_attr( $slide['alt'] ); ?>"
           width="1920" height="1080"
           <?php echo $i === 0 ? 'loading="eager"' : 'loading="lazy"'; ?>>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="hero-overlay-lr"></div>
  <div class="hero-overlay-tb"></div>
  <div class="hero-grain"></div>
  <div class="hero-glow-1"></div>
  <div class="hero-glow-2"></div>

  <div class="hero-content">
    <div class="container">
      <div class="animate-hero-reveal" style="max-width:48rem">
        <p class="hero-eyebrow-1">École de Commerce et de Management</p>
        <p class="hero-eyebrow-2">Rush School</p>
        <h1 class="hero-title">
          Allez vers<br>la <span class="text-gradient-rush">réussite</span>
        </h1>
        <p class="hero-desc">
          Des formations certifiantes du BTS au Bachelor, 100% en alternance,
          pour booster votre carrière dans le commerce, le management et le digital.
        </p>
        <div class="hero-actions">
          <a href="<?php echo home_url('/'); ?>" class="btn btn-rush-light btn-lg">
            Découvrir nos formations
          </a>
          <a href="<?php echo home_url('/contact'); ?>" class="btn btn-rush btn-lg">
            Candidater
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide dots -->
  <div class="hero-dots" id="heroDots">
    <?php foreach ( $slides as $i => $slide ) : ?>
    <button class="hero-dot<?php echo $i === 0 ? ' is-active' : ''; ?>"
            data-goto="<?php echo $i; ?>"
            aria-label="Visuel <?php echo $i + 1; ?>"></button>
    <?php endforeach; ?>
  </div>

</section>

<!-- ========================================================
     FEATURES
     ======================================================== -->
<section class="rush-features">
  <div class="container">
    <div class="section-header-center">
      <p class="section-eyebrow">Pourquoi Rush School</p>
      <h2 class="section-title">Une école <span class="text-gradient-rush">nouvelle génération</span></h2>
      <p class="section-desc">
        Tout est pensé pour votre réussite : pédagogie moderne, alternance dès le départ,
        et un réseau d'entreprises partenaires solide.
      </p>
    </div>

    <div class="features-grid">

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
        <h3 class="feature-title">Diplômes reconnus</h3>
        <p class="feature-desc">Titres reconnus par l'État, inscrits au RNCP — du BAC+2 au BAC+3.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </div>
        <h3 class="feature-title">100% alternance</h3>
        <p class="feature-desc">Apprenez en entreprise dès le 1er jour, sans frais de scolarité.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h3 class="feature-title">Réseau d'entreprises</h3>
        <p class="feature-desc">Un réseau actif de partenaires : TPE, PME, grands groupes.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/></svg>
        </div>
        <h3 class="feature-title">Accompagnement sur-mesure</h3>
        <p class="feature-desc">Petites promos, suivi personnalisé, coaching alternance.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg>
        </div>
        <h3 class="feature-title">Pédagogie moderne</h3>
        <p class="feature-desc">Cours digitaux, projets concrets, intervenants pros.</p>
      </div>

      <div class="feature-card">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
        </div>
        <h3 class="feature-title">Sur Parcoursup</h3>
        <p class="feature-desc">Retrouvez tous nos BTS sur la plateforme officielle.</p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================
     FORMATIONS
     ======================================================== -->
<section class="rush-formations">
  <div class="glow-orb formations-glow" style="position:absolute;top:-10rem;right:0;width:31rem;height:31rem;opacity:0.4;"></div>

  <div class="container" style="position:relative">
    <div class="section-header-left">
      <p class="section-eyebrow">Nos programmes</p>
      <h2 class="section-title">Découvrez nos <span class="text-gradient-rush">formations</span></h2>
      <p class="section-desc">
        Une gamme complète de formations certifiantes, conçues pour dynamiser votre carrière
        dans la communication, le commercial, le management et le commerce international.
      </p>
    </div>

    <div class="formations-grid">

      <?php
      $formations = [
        [ 'code' => 'BTS MCO',       'title' => 'Management Commercial Opérationnel',
          'desc' => 'Formation tournée vers la gestion d\'unité commerciale, la relation client et le pilotage d\'équipe.',
          'level' => 'BAC+2', 'duration' => '2 ans' ],
        [ 'code' => 'BTS NDRC',      'title' => 'Négociation et Digitalisation de la Relation Client',
          'desc' => 'Idéal pour les profils orientés commerce, digital et gestion de clientèle.',
          'level' => 'BAC+2', 'duration' => '2 ans' ],
        [ 'code' => 'TP NTC',        'title' => 'Négociateur Technico-Commercial',
          'desc' => 'Un parcours professionnalisant pour allier technique produit et stratégie commerciale.',
          'level' => 'BAC+2', 'duration' => '1 an' ],
        [ 'code' => 'BACHELOR RDC',  'title' => 'Responsable Développement Commercial',
          'desc' => 'Une montée en compétences vers des fonctions commerciales à responsabilité.',
          'level' => 'BAC+3', 'duration' => '1 an' ],
      ];
      foreach ( $formations as $f ) :
      ?>
      <article class="formation-card">
        <div class="formation-badges">
          <div style="display:flex;gap:.5rem">
            <span class="badge badge-level"><?php echo esc_html($f['level']); ?></span>
            <span class="badge badge-duration"><?php echo esc_html($f['duration']); ?></span>
          </div>
          <svg class="formation-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
        </div>
        <div class="formation-code"><?php echo esc_html($f['code']); ?></div>
        <div class="formation-name"><?php echo esc_html($f['title']); ?></div>
        <p class="formation-desc"><?php echo esc_html($f['desc']); ?></p>
        <a href="<?php echo home_url('/formations'); ?>" class="btn btn-rush-outline btn-sm">
          Découvrir la formation
        </a>
      </article>
      <?php endforeach; ?>

    </div>

    <div class="formations-center">
      <a href="<?php echo home_url('/formations'); ?>" class="btn btn-rush btn-lg">
        Voir toutes les formations
      </a>
    </div>
  </div>
</section>

<!-- ========================================================
     STATS
     ======================================================== -->
<section class="rush-stats">
  <div class="container">
    <div class="section-header-left">
      <p class="section-eyebrow">Nos résultats</p>
      <h2 class="section-title">Des résultats <span class="text-gradient-rush">concrets</span></h2>
      <p class="section-desc">Des indicateurs transparents pour mesurer la qualité de notre pédagogie.</p>
    </div>

    <div class="stats-grid">
      <?php
      $stats = [
        [ 'value' => '—%', 'label' => 'Taux de réussite BTS',   'note' => 'Moyenne promo — donnée à confirmer',
          'icon'  => '<path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/>' ],
        [ 'value' => '—%', 'label' => 'Taux d\'insertion pro',   'note' => '6 mois après diplôme — donnée à confirmer',
          'icon'  => '<rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>' ],
        [ 'value' => '—',   'label' => 'Étudiants formés',        'note' => 'Depuis la création de l\'école',
          'icon'  => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>' ],
        [ 'value' => '—%', 'label' => 'Poursuite d\'études',     'note' => 'Vers un Bachelor ou un Master',
          'icon'  => '<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>' ],
      ];
      foreach ( $stats as $s ) :
      ?>
      <div class="stat-card">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <?php echo $s['icon']; ?>
          </svg>
        </div>
        <div class="stat-value"><?php echo esc_html($s['value']); ?></div>
        <div class="stat-label"><?php echo esc_html($s['label']); ?></div>
        <div class="stat-note"><?php echo esc_html($s['note']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========================================================
     AMBASSADORS
     ======================================================== -->
<section class="rush-ambassadors">
  <div class="container">
    <div class="section-header-left">
      <p class="section-eyebrow">Ceux qui nous représentent</p>
      <h2 class="section-title">Les visages de <span class="text-gradient-rush">Rush School</span></h2>
      <p class="section-desc">
        Une équipe de professionnels à votre écoute pour vous accompagner à chaque étape
        de votre formation.
      </p>
    </div>

    <div class="ambassadors-grid">
      <?php
      $people = [
        [ 'name' => 'Joseph NGUYEN',      'role' => 'Président',
          'tag'  => 'Équipe référente · Poursuite de formation',
          'quote'=> 'L\'éducation est la clé de l\'avenir professionnel. Nos programmes sont axés sur la pratique et alignés sur les besoins du marché, pour préparer nos étudiants à exceller dans le management commercial, le développement commercial et l\'influence.',
          'photo'=> 'joseph.jpg' ],
        [ 'name' => 'Ryma BELOUAR',       'role' => 'Marketing & commerciale',
          'tag'  => 'Référente Handicap · Alternance',
          'quote'=> 'J\'accompagne chaque étudiant dans la recherche et la signature de son contrat d\'alternance, et je veille à l\'accessibilité de nos formations.',
          'photo'=> 'ryma.jpg' ],
        [ 'name' => 'Mohamed OUMENKHACHE','role' => 'Ressources humaines',
          'tag'  => 'Équipe référente · Vie étudiante',
          'quote'=> 'Mon rôle est de faire le lien entre les étudiants, les entreprises partenaires et l\'équipe pédagogique tout au long de l\'année.',
          'photo'=> 'mohamed.jpg' ],
      ];
      foreach ( $people as $p ) :
      ?>
      <article class="ambassador-card">
        <img src="<?php echo RUSH_URI . '/images/' . esc_attr($p['photo']); ?>"
             alt="<?php echo esc_attr($p['name']); ?> — <?php echo esc_attr($p['role']); ?>"
             width="300" height="300" loading="lazy" class="ambassador-photo">
        <h3 class="ambassador-name"><?php echo esc_html($p['name']); ?></h3>
        <p class="ambassador-role"><?php echo esc_html($p['role']); ?></p>
        <p class="ambassador-tag"><?php echo esc_html($p['tag']); ?></p>
        <p class="ambassador-quote">"<?php echo esc_html($p['quote']); ?>"</p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========================================================
     PARCOURSUP
     ======================================================== -->
<section class="rush-parcoursup">
  <div class="container">
    <div class="parcoursup-inner">
      <div class="parcoursup-blob1"></div>
      <div class="parcoursup-blob2"></div>
      <div class="parcoursup-content">
        <div>
          <p class="parcoursup-eyebrow">Parcoursup</p>
          <h2 class="parcoursup-title">Rush School est sur Parcoursup</h2>
          <p class="parcoursup-desc">
            Retrouvez tous nos BTS sur la plateforme officielle. Tapez "Rush School" dans
            la barre de recherche et sélectionnez votre formation.
          </p>
          <a href="https://dossier.parcoursup.fr/Candidat/carte" target="_blank" rel="noreferrer"
             class="btn btn-rush-light btn-lg">
            Je me connecte à Parcoursup
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
        <div class="parcoursup-steps">
          <?php
          $steps = [
            [ 'n' => '01', 'title' => 'Tapez « Rush School »', 'desc' => 'Dans la barre de recherche Parcoursup.' ],
            [ 'n' => '02', 'title' => 'Choisissez votre BTS',   'desc' => 'MCO, NDRC ou NTC selon votre projet.' ],
            [ 'n' => '03', 'title' => 'Formulez vos vœux',      'desc' => 'Et rejoignez la promo Rush School !' ],
          ];
          foreach ( $steps as $s ) :
          ?>
          <div class="parcoursup-step">
            <div class="step-num"><?php echo esc_html($s['n']); ?></div>
            <div>
              <div class="step-title"><?php echo esc_html($s['title']); ?></div>
              <div class="step-desc"><?php echo esc_html($s['desc']); ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================
     PARTNERS
     ======================================================== -->
<section class="rush-partners">
  <div class="container">
    <div class="partners-header">
      <p class="section-eyebrow" style="margin-bottom:0">Entreprises partenaires</p>
      <p class="partners-subtitle">TPE, PME et grands groupes nous font confiance pour former leurs alternants.</p>
    </div>
  </div>
  <div class="partners-track-wrap">
    <div class="partners-fade-left"></div>
    <div class="partners-fade-right"></div>
    <div class="partners-track animate-marquee" id="partnersTrack">
      <?php
      $partners = [
        [ 'name' => 'Renault',      'domain' => 'renault.com' ],
        [ 'name' => 'Carrefour',    'domain' => 'carrefour.com' ],
        [ 'name' => 'Hello Bank',   'domain' => 'hellobank.fr' ],
        [ 'name' => 'Orange',       'domain' => 'orange.com' ],
        [ 'name' => 'KFC',          'domain' => 'kfc.com' ],
        [ 'name' => 'McDonald\'s',  'domain' => 'mcdonalds.com' ],
        [ 'name' => 'Burger King',  'domain' => 'burgerking.com' ],
      ];
      // Double the array for seamless marquee
      $all = array_merge($partners, $partners);
      foreach ( $all as $p ) :
      ?>
      <div class="partner-card">
        <img src="https://img.logo.dev/<?php echo esc_attr($p['domain']); ?>?token=pk_TCswMkhaQdyEMVQcTBqc2g&size=80&format=png"
             alt="<?php echo esc_attr($p['name']); ?>"
             loading="lazy"
             onerror="this.src='https://www.google.com/s2/favicons?domain=<?php echo esc_attr($p['domain']); ?>&sz=128';this.onerror=null;">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========================================================
     TESTIMONIALS
     ======================================================== -->
<section class="rush-testimonials">
  <div class="glow-orb testimonials-glow1" style="opacity:.5"></div>
  <div class="glow-orb testimonials-glow2" style="opacity:.4"></div>

  <div class="container">
    <div class="section-header-left">
      <p class="section-eyebrow" style="color:var(--rush-light)">Alumni</p>
      <h2 class="section-title" style="color:#fff">Ils sont passés par <span class="text-gradient-rush">Rush School</span></h2>
      <p class="section-desc" style="color:rgba(255,255,255,.7)">Des diplômés en poste aujourd'hui, qui racontent leur parcours.</p>
    </div>

    <div class="testimonials-grid">
      <?php
      $testimonials = [
        [ 'name' => 'Léa M.',    'initial' => 'L', 'role' => 'BTS NDRC — promo 2024', 'current' => 'Chargée de clientèle · Banque partenaire',
          'text'  => 'Rush School m\'a permis de trouver mon alternance en deux semaines. Aujourd\'hui je suis en poste dans l\'entreprise qui m\'a formée.' ],
        [ 'name' => 'Karim B.', 'initial' => 'K', 'role' => 'Bachelor RDC — promo 2023', 'current' => 'Business Developer · PME industrielle',
          'text'  => 'Une école qui colle vraiment au monde de l\'entreprise. J\'ai signé un CDI dès la fin de ma formation.' ],
        [ 'name' => 'Inès D.',   'initial' => 'I', 'role' => 'BTS MCO — promo 2024', 'current' => 'Assistante manager · Retail',
          'text'  => 'Petite promo, grand suivi. On n\'est pas un numéro, on progresse vraiment vite ici.' ],
      ];
      foreach ( $testimonials as $t ) :
      ?>
      <div class="testimonial-card">
        <svg class="testimonial-quote-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
        <p class="testimonial-text"><?php echo esc_html($t['text']); ?></p>
        <div class="testimonial-footer">
          <div class="testimonial-avatar"><?php echo esc_html($t['initial']); ?></div>
          <div>
            <div class="testimonial-name"><?php echo esc_html($t['name']); ?></div>
            <div class="testimonial-role"><?php echo esc_html($t['role']); ?></div>
            <div class="testimonial-current"><?php echo esc_html($t['current']); ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ========================================================
     CTA
     ======================================================== -->
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
        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-rush btn-xl">
          Candidater maintenant
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
        <a href="<?php echo home_url('/formations'); ?>" class="btn btn-rush-outline btn-xl">
          Voir les formations
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
