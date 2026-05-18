# Rush School — Thème WordPress

## Structure du thème

```
rush-school/
├── style.css            ← Feuille de style principale + metadata du thème
├── functions.php        ← Enqueue assets, CPT, menus, setup
├── index.php            ← Page d'accueil (toutes les sections)
├── header.php           ← Header fixe + mega menu + bannière
├── footer.php           ← Footer 4 colonnes
├── page.php             ← Template de page standard
├── 404.php              ← Page d'erreur
├── images/              ← Toutes les images du projet React
│   ├── rush-logo.png
│   ├── rush-logo-footer.png
│   ├── hero-3d-1.jpg
│   ├── hero-3d-2.jpg
│   ├── hero-3d-3.jpg
│   ├── alternance.jpg
│   ├── campus-life.jpg
│   ├── hero-student.jpg
│   ├── joseph.jpg
│   ├── ryma.jpg
│   └── mohamed.jpg
└── assets/
    └── js/
        └── main.js      ← Slideshow hero + mega menu + animations
```

## Installation

1. Décompresser le dossier `rush-school` dans `wp-content/themes/`
2. Activer le thème dans **Apparence → Thèmes**
3. Définir le logo dans **Apparence → Personnaliser → Identité du site**
4. Créer les menus dans **Apparence → Menus**

## Custom Post Types inclus

| CPT | Slug | Usage |
|-----|------|-------|
| Formation | `formation` | Fiches formations BTS/Bachelor |
| Témoignage | `testimonial` | Avis alumni |
| Équipe | `team_member` | Membres de l'équipe |
| Partenaire | `partner` | Logos entreprises partenaires |

## Design System

- **Couleurs** : Rush Primary `#A89FE5`, Rush Deep `#8E83DF`, Rush Night `#151520`
- **Police** : Montserrat (Google Fonts)
- **Grille** : Flexbox + CSS Grid, container max-width 1400px
- **Breakpoints** : 640px / 768px / 1024px
