<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="rush-header" id="rush-header">
  <div class="header-inner">
    <div class="header-bar">

      <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo" aria-label="Rush School — Accueil">
        <img src="<?php echo esc_url(RUSH_URI); ?>/images/rush-logo.png" alt="Rush School">
      </a>

      <nav class="header-nav" aria-label="Navigation principale">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Rush School</a></li>
          <li><a href="<?php echo esc_url(home_url('/decouvrir')); ?>">Découvrir</a></li>
          <li><a href="<?php echo esc_url(home_url('/formations')); ?>">Formations</a></li>
          <li><a href="<?php echo esc_url(home_url('/alternance')); ?>">Alternance</a></li>
          <li><a href="<?php echo esc_url(home_url('/jpo')); ?>">JPO</a></li>
          <li><a href="<?php echo esc_url(home_url('/assistance')); ?>">Assistance</a></li>
          <li><a href="https://blog.rush-school.com" target="_blank" rel="noreferrer">Blog</a></li>
          <li class="header-nav-lang"><button id="rush-lang-btn">FR</button></li>
        </ul>
      </nav>

      <button class="header-burger" id="rush-burger" aria-label="Ouvrir le menu">
        <div class="burger-lines">
          <span class="burger-line burger-line-top"></span>
          <span class="burger-line"></span>
          <span class="burger-line burger-line-bottom"></span>
        </div>
      </button>

      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="header-cta">Candidater</a>

    </div>
  </div>
</header>

<div class="mega-menu" id="rush-mega-menu" aria-hidden="true">
  <div class="mega-menu-bg" id="rush-menu-bg"></div>
  <div class="mega-menu-inner">
    <div class="mega-menu-header">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="mega-menu-logo" id="rush-menu-close-logo">
        <img src="<?php echo esc_url(RUSH_URI); ?>/images/rush-logo.png" alt="Rush School">
      </a>
      <button class="mega-menu-close" id="rush-menu-close" aria-label="Fermer le menu">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="24" height="24"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>

    <nav class="mega-menu-nav" aria-label="Menu complet">
      <?php
      $mega_links = [
        [ 'label' => 'Rush School',  'url' => home_url('/') ],
        [ 'label' => 'Découvrir',    'url' => home_url('/decouvrir') ],
        [ 'label' => 'Formations',   'url' => home_url('/formations') ],
        [ 'label' => 'Alternance',   'url' => home_url('/alternance') ],
        [ 'label' => 'Entreprises',  'url' => home_url('/alternance#entreprises') ],
        [ 'label' => 'JPO',          'url' => home_url('/jpo') ],
        [ 'label' => 'Blog',         'url' => 'https://blog.rush-school.com', 'external' => true ],
        [ 'label' => 'Contact',      'url' => home_url('/contact') ],
      ];
      foreach ( $mega_links as $i => $link ) :
        $num = str_pad( $i + 1, 2, '0', STR_PAD_LEFT );
        $target = ! empty( $link['external'] ) ? ' target="_blank" rel="noreferrer"' : '';
      ?>
        <a href="<?php echo esc_url($link['url']); ?>"<?php echo $target; ?> class="mega-menu-link" >
          <span class="num"><?php echo esc_html($num); ?></span>
          <span class="label"><?php echo esc_html($link['label']); ?></span>
        </a>
      <?php endforeach; ?>
    </nav>

    <div class="mega-menu-info">
      <div><div class="mega-menu-info-label">Adresse</div><p>15 bis rue des Goulvents<br>92000 Nanterre</p></div>
      <div><div class="mega-menu-info-label">Contact</div><p>+33 7 56 10 65 40<br>contact@rush-school.com</p></div>
      <div><div class="mega-menu-info-label">Suivez-nous</div><p>Instagram · TikTok · LinkedIn · Facebook</p></div>
    </div>
  </div>
</div>
