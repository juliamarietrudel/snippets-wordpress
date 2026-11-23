# Page Saunas

Le contenu reprend la [page Saunas actuelle](https://saunafab.ca/saunas/) et les fiches [baril](https://saunafab.ca/product/sauna-baril-82-pouces-4-places/) et [cube](https://saunafab.ca/product/nos-saunas-cube/). Le comparatif, la liste de préparation et la FAQ aident à passer du choix du modèle à la prise de contact.

## Installer dans WPCode

1. Importer [saunafab-page-saunas.json](../wpcode/saunafab-page-saunas.json) dans **WPCode → Tools → Import** et activer les snippets de la page. Chaque section PHP peut être activée séparément.
2. Garder **CSS — Variables** et **CSS — Sections** actifs pour la palette, la typographie, les boutons et les marges. Si le header et le footer SaunaFab sont utilisés, garder aussi leurs snippets actuels actifs.
3. Modifier la page **Saunas** dans Elementor. Sur une version brouillon ou dans l’aperçu, placer chaque shortcode dans son propre widget **Code court**, dans un conteneur pleine largeur.

| Shortcode | Contenu |
| --- | --- |
| `[saunafab_header]` | Menu partagé, si la page gère son propre en-tête |
| `[saunafab_saunas_hero]` | Bannière et CTA vers le comparatif et Contact |
| `[saunafab_saunas_modeles]` | Cartes baril et cube avec liens vers les fiches |
| `[saunafab_saunas_engagements]` | Fabrication, garanties et service |
| `[saunafab_saunas_installation]` | Préparation du terrain et de l’accès |
| `[saunafab_saunas_galerie]` | Carrousel photo pleine largeur |
| `[saunafab_saunas_faq]` | Questions fréquentes |
| `[saunafab_saunas_cta]` | Contact pour un projet et bouton d’appel |
| `[saunafab_footer]` | Pied de page partagé, si la page gère son propre pied de page |

Si la page Saunas est déjà installée, importer seulement [le JSON de la galerie](../wpcode/saunafab-saunas-galerie.json). Dans Elementor, enlever le rembourrage latéral du conteneur de la galerie pour que les images atteignent les bords.

Garder la bannière et le comparatif ensemble pour que le lien « Comparer les modèles » mène à sa section. Pour remplacer l’ancien en-tête Royal Addons sur une version de la page, ajouter son véritable ID WordPress au snippet de masquage déjà installé. Le menu partagé peut être placé dans un seul widget ou dans le modèle global.

Depuis la racine du projet, lancer `php -S 127.0.0.1:8765 -t .` et ouvrir [l’aperçu local](http://127.0.0.1:8765/apercu-local/saunas.php).
