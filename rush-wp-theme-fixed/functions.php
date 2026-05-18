<?php
/**
 * Rush School — WordPress Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'RUSH_VERSION', '1.0.0' );
define( 'RUSH_DIR', get_template_directory() );
define( 'RUSH_URI', get_template_directory_uri() );

/* ============================================================
   SETUP
   ============================================================ */
add_action( 'after_setup_theme', function () {
    load_theme_textdomain( 'rush-school', RUSH_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form','comment-form','comment-list','gallery','caption','script','style' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 80,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( [
        'primary'  => __( 'Menu principal', 'rush-school' ),
        'footer'   => __( 'Menu footer', 'rush-school' ),
    ] );
} );

/* ============================================================
   ASSETS
   ============================================================ */
add_action( 'wp_enqueue_scripts', function () {
    // Google Fonts — Montserrat
    wp_enqueue_style(
        'rush-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'rush-style',
        get_stylesheet_uri(),
        [ 'rush-fonts' ],
        RUSH_VERSION
    );

    // Additional stylesheet
    wp_enqueue_style(
        'rush-school',
        RUSH_URI . '/assets/rush-school.css',
        [ 'rush-style' ],
        RUSH_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'rush-main',
        RUSH_URI . '/assets/js/main.js',
        [],
        RUSH_VERSION,
        true
    );

    wp_localize_script( 'rush-main', 'rushData', [
        'themeUrl' => RUSH_URI,
        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'rush_nonce' ),
    ] );
} );

/* ============================================================
   MENUS
   ============================================================ */
// Nav principale — liste d'items pour le header React-like
function rush_get_nav_items() {
    return [
        [ 'label' => 'Rush School',  'url' => home_url('/') ],
        [ 'label' => 'Découvrir',    'url' => home_url('/decouvrir') ],
        [ 'label' => 'Formations',   'url' => home_url('/formations') ],
        [ 'label' => 'Alternance',   'url' => home_url('/alternance') ],
        [ 'label' => 'JPO',          'url' => home_url('/jpo') ],
        [ 'label' => 'Assistance',   'url' => home_url('/assistance') ],
        [ 'label' => 'Blog',         'url' => 'https://blog.rush-school.com', 'external' => true ],
    ];
}

/* ============================================================
   VIRTUAL PAGES — pages PHP sans entr�e dans la base WP
   ============================================================ */
add_action( 'init', function () {
    add_rewrite_rule( '^formations/?$', 'index.php?rush_page=formations', 'top' );
} );

add_filter( 'query_vars', function ( $vars ) {
    $vars[] = 'rush_page';
    return $vars;
} );

add_filter( 'template_include', function ( $template ) {
    $page = get_query_var( 'rush_page' );
    if ( $page === 'formations' ) {
        $file = RUSH_DIR . '/page-formations.php';
        if ( file_exists( $file ) ) return $file;
    }
    return $template;
} );

add_filter( 'body_class', function ( $classes ) {
    if ( get_query_var( 'rush_page' ) === 'formations' ) {
        $classes[] = 'page';
        $classes[] = 'page-template';
        $classes[] = 'page-template-formations';
    }
    return $classes;
} );

// Flush on theme switch + first visit
add_action( 'after_switch_theme', function () {
    flush_rewrite_rules();
} );
add_action( 'init', function () {
    if ( get_option( 'rush_rewrite_flush' ) !== '1' ) {
        flush_rewrite_rules();
        update_option( 'rush_rewrite_flush', '1' );
    }
}, 999 );

/* ============================================================
   WIDGET AREAS
   ============================================================ */
add_action( 'widgets_init', function () {
    register_sidebar( [
        'name'          => __( 'Sidebar principale', 'rush-school' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ] );
    register_sidebar( [
        'name'          => __( 'Footer — colonne 1', 'rush-school' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-col-title">',
        'after_title'   => '</h4>',
    ] );
} );

/* ============================================================
   CUSTOM POST TYPES
   ============================================================ */
add_action( 'init', function () {

    // Formations
    register_post_type( 'formation', [
        'labels' => [
            'name'          => 'Formations',
            'singular_name' => 'Formation',
            'add_new_item'  => 'Ajouter une formation',
            'edit_item'     => 'Modifier la formation',
        ],
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-mortarboard',
        'supports'      => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'show_in_rest'  => true,
        'rewrite'       => [ 'slug' => 'formations' ],
    ] );

    // Témoignages
    register_post_type( 'testimonial', [
        'labels' => [
            'name'          => 'Témoignages',
            'singular_name' => 'Témoignage',
        ],
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => [ 'title', 'editor', 'custom-fields' ],
        'show_in_rest' => true,
    ] );

    // Équipe
    register_post_type( 'team_member', [
        'labels' => [
            'name'          => 'Équipe',
            'singular_name' => 'Membre de l\'équipe',
        ],
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'show_in_rest' => true,
    ] );

    // Partenaires
    register_post_type( 'partner', [
        'labels' => [
            'name'          => 'Partenaires',
            'singular_name' => 'Partenaire',
        ],
        'public'       => false,
        'show_ui'      => true,
        'menu_icon'    => 'dashicons-building',
        'supports'     => [ 'title', 'thumbnail', 'custom-fields' ],
        'show_in_rest' => true,
    ] );
} );

/* ============================================================
   CUSTOM FIELDS (ACF-style via get_post_meta)
   Champs attendus sur les CPT :
   Formation : _formation_code, _formation_level, _formation_duration
   Testimonial : _testimonial_role, _testimonial_current
   Team_member : _member_role, _member_tag, _member_quote, _member_linkedin
   Partner : _partner_domain, _partner_color
   ============================================================ */

/* ============================================================
   EXCERPT LENGTH
   ============================================================ */
add_filter( 'excerpt_length', fn() => 25 );
add_filter( 'excerpt_more',   fn() => '…' );

/* ============================================================
   SECURITY
   ============================================================ */
/* ============================================================
   FORM HANDLERS — JPO & Assistance
   ============================================================ */
add_action( 'admin_post_rush_jpo_register', 'rush_handle_jpo_register' );
add_action( 'admin_post_nopriv_rush_jpo_register', 'rush_handle_jpo_register' );
function rush_handle_jpo_register() {
  if ( ! isset( $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['session'] ) ) {
    wp_redirect( add_query_arg( 'status', 'error', wp_get_referer() ) );
    exit;
  }

  $firstname = sanitize_text_field( $_POST['firstname'] );
  $lastname  = sanitize_text_field( $_POST['lastname'] );
  $email     = sanitize_email( $_POST['email'] );
  $phone     = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
  $session   = sanitize_text_field( $_POST['session'] );
  $formation = isset( $_POST['formation'] ) ? sanitize_text_field( $_POST['formation'] ) : '';
  $message   = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

  $to      = get_option( 'admin_email' );
  $subject = sprintf( '[Rush School] Nouvelle inscription JPO — %s %s', $firstname, $lastname );
  $body    = "Prénom : $firstname\nNom : $lastname\nEmail : $email\nTéléphone : $phone\nSession : $session\nFormation : $formation\nMessage : $message";
  wp_mail( $to, $subject, $body );

  wp_redirect( add_query_arg( 'status', 'success', wp_get_referer() ) );
  exit;
}

add_action( 'admin_post_rush_assistance_request', 'rush_handle_assistance_request' );
add_action( 'admin_post_nopriv_rush_assistance_request', 'rush_handle_assistance_request' );
function rush_handle_assistance_request() {
  if ( ! isset( $_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['topic'], $_POST['message'] ) ) {
    wp_redirect( add_query_arg( 'status', 'error', wp_get_referer() ) );
    exit;
  }

  $firstname = sanitize_text_field( $_POST['firstname'] );
  $lastname  = sanitize_text_field( $_POST['lastname'] );
  $email     = sanitize_email( $_POST['email'] );
  $phone     = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
  $topic     = sanitize_text_field( $_POST['topic'] );
  $message   = sanitize_textarea_field( $_POST['message'] );

  $to      = get_option( 'admin_email' );
  $subject = sprintf( '[Rush School] Demande assistance — %s — %s %s', $topic, $firstname, $lastname );
  $body    = "Sujet : $topic\nPrénom : $firstname\nNom : $lastname\nEmail : $email\nTéléphone : $phone\n\nMessage :\n$message";
  wp_mail( $to, $subject, $body );

  wp_redirect( add_query_arg( 'status', 'success', wp_get_referer() ) );
  exit;
}

remove_action( 'wp_head', 'wp_generator' );
add_filter( 'the_generator', '__return_empty_string' );
