# Composer les pages SaunaFab dans Elementor

Les chemins de fichiers ci-dessous partent du dossier `snippets-wordpress/`.

## Installer les snippets

1. Dans **Code Snippets**, activer `php/sections/saunafab-sections.php`, `php/components/saunafab-header.php` et `php/sections/saunafab-contact.php`. Coller chaque fichier sans sa première ligne `<?php`. Si les snippets header et Contact existent déjà, mettre à jour leur contenu.
2. Dans le **CSS additionnel**, charger `css/variables/saunafab-variables.css` en premier, puis `css/components/saunafab-sections.css`, `css/components/saunafab-header.css` et `css/components/saunafab-contact.css`. Mettre à jour les blocs header et Contact existants. Le fichier de variables définit la palette, les polices et les largeurs. Les styles des sections sont regroupés par composant.
3. Dans Elementor, placer chaque shortcode dans son propre widget **Code court**. Mettre les conteneurs de sections en pleine largeur et régler leur espacement dans Elementor.

## Accueil

Ce sont les widgets à placer dans l’ordre proposé. Chaque widget peut être déplacé ou réutilisé.

| Shortcode | Section |
| --- | --- |
| `[saunafab_header]` | Menu SaunaFab |
| `[saunafab_hero]` | Bannière d’accueil |
| `[saunafab_univers]` | Catégories de produits |
| `[saunafab_sur_mesure]` | Projet sur mesure |
| `[saunafab_modeles]` | Saunas baril et cube |
| `[saunafab_engagements]` | Engagements SaunaFab |
| `[saunafab_avis]` | Avis repris de l’accueil |
| `[saunafab_appel_contact]` | Coordonnées et lien vers le formulaire |
| `[saunafab_footer]` | Pied de page SaunaFab |

Le snippet PHP des sections enregistre tous les blocs en une seule activation. Sur la page d’accueil, remplacer le widget `[saunafab_homepage]` par les widgets choisis. Les liens internes de la bannière renvoient aux sections **Sur mesure**, **Modèles** et **Engagements** sur l’accueil. Garder ces sections sur l’accueil si ces liens sont utilisés.

Si un modèle global Elementor affiche déjà le menu SaunaFab ou le pied de page, placer le shortcode correspondant une seule fois dans ce modèle ou dans la page.

## Contact

1. Placer `[saunafab_header]` dans son propre widget au-dessus du contenu, si le menu est géré à l’échelle de la page.
2. Dans un conteneur pleine largeur de classe `sf-contact-page`, placer `[saunafab_coordonnees]` dans un widget et le formulaire Royal Addons dans un conteneur `sf-contact-card` à côté. Le formulaire conserve son action d’envoi native. Les styles personnalisés du widget peuvent rester en place.
3. Remplacer l’ancien widget `[saunafab_contact]` par le widget coordonnées sur la page que tu migres. L’ancien shortcode reste disponible pour les autres pages.

## Aperçu local

Depuis la racine du projet, lancer `php -S 127.0.0.1:8765 -t .`, puis ouvrir [l’accueil assemblé](http://127.0.0.1:8765/apercu-local/sections.php).
