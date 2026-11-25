# SaunaFab — plan de montage WordPress

Inventaire relevé le 25 novembre 2026 à partir des pages publiques WordPress, du menu et des [sitemaps](https://saunafab.ca/sitemap_index.xml). Le sitemap français recense 15 pages WordPress, dont cinq pages de test, huit produits et quatre archives de catégories. Les pages de test reprennent les mêmes sections que leur destination finale.

## Installation WPCode

Importer uniquement les ensembles qui manquent. Les imports créent des copies inactives. Activer une seule version de chaque snippet.

- [Base SaunaFab](../wpcode/saunafab-wpcode.json) pour Accueil, Contact, le menu et le pied de page.
- [Saunas](../wpcode/saunafab-page-saunas.json), [Bain froid](../wpcode/saunafab-page-bain-froid.json) et [Douches](../wpcode/saunafab-page-douches.json) pour les sections déjà créées.
- [Complément catalogue](../wpcode/saunafab-catalogue-complement.json) pour Boutique, Foyers, Accessoires, Bains froids et l’en-tête dynamique des fiches produit.

Activer **CSS — Variables**, **CSS — Sections**, **CSS — Header**, **CSS — Contact**, **CSS — Saunas**, **CSS — Saunas — Galerie** et **CSS — Catalogue** selon les sections utilisées. Dans Elementor, placer un widget **Code court** par shortcode. Ajouter `[saunafab_header]` et `[saunafab_footer]` une fois si la page gère son propre en-tête et pied de page.

## Pages et ordre des sections

| Page | Widgets dans l’ordre |
| --- | --- |
| [Accueil](https://saunafab.ca/) · test 2943 | `[saunafab_hero]`, `[saunafab_univers]`, `[saunafab_sur_mesure]`, `[saunafab_modeles]`, `[saunafab_engagements]`, `[saunafab_avis]`, `[saunafab_appel_contact]` |
| [Contact](https://saunafab.ca/elementor-2911/) · test 2992 | `[saunafab_coordonnees]` et formulaire Royal Addons existant côte à côte dans `sf-contact-page`. Le conteneur du formulaire utilise `sf-contact-card`. |
| [Saunas](https://saunafab.ca/saunas/) · test 3096 | `[saunafab_saunas_hero]`, `[saunafab_saunas_modeles]`, `[saunafab_saunas_engagements]`, `[saunafab_saunas_installation]`, `[saunafab_saunas_galerie]`, `[saunafab_saunas_faq]`, `[saunafab_saunas_cta]` |
| [Douches](https://saunafab.ca/douches/) · test 3140 | `[saunafab_douches_hero]`, `[saunafab_douches_produit]`, `[saunafab_douches_engagements]`, `[saunafab_douches_installation]`, `[saunafab_douches_galerie]`, `[saunafab_douches_faq]`, `[saunafab_douches_cta]` |
| [Bains froids](https://saunafab.ca/bains-froids/) | `[saunafab_catalogue_entete sujet="bains-froids"]`, `[saunafab_bain_froid_installation]`, `[saunafab_bain_froid_galerie]`, `[saunafab_bain_froid_faq]`, `[saunafab_appel_contact]`. Le CTA de la bannière mène à la fiche d’achat. |
| [Foyers](https://saunafab.ca/foyers-et-porte-buches/) | `[saunafab_catalogue_entete sujet="foyers"]`, `[saunafab_catalogue_cartes sujet="foyers"]`, `[saunafab_foyers_conseils]`, `[saunafab_appel_contact]` |
| [Accessoires](https://saunafab.ca/accessoires/) | `[saunafab_catalogue_entete sujet="accessoires"]`, `[saunafab_catalogue_cartes sujet="accessoires"]`, `[saunafab_appel_contact]` |
| [Boutique](https://saunafab.ca/boutique/) | `[saunafab_catalogue_entete sujet="boutique"]`, `[saunafab_catalogue_cartes sujet="boutique"]`, puis conserver le catalogue WooCommerce et ses filtres actuels dans le modèle Boutique. |
| [Bain froid, fiche d’achat](https://saunafab.ca/product/bain-froid/) · test 3116 | `[saunafab_bain_froid_hero]`, `[saunafab_bain_froid_produit]`, bloc WooCommerce avec l’ID `sf-bain-froid-achat`, `[saunafab_bain_froid_engagements]`, `[saunafab_bain_froid_installation]`, `[saunafab_bain_froid_galerie]`, `[saunafab_bain_froid_faq]`, `[saunafab_bain_froid_cta]` |

Sur un brouillon de test Bain froid qui ne possède pas de bloc d’achat WooCommerce, garder un lien vers la fiche de production depuis la section d’achat. Sur la fiche produit finale, les boutons défilent jusqu’au véritable bloc WooCommerce.

## Fiches produit et archives WooCommerce

Créer un modèle de fiche produit partagé avec `[saunafab_produit_entete]`, puis un conteneur portant l’ID CSS `sf-produit-achat` avec la galerie, le prix et le formulaire d’ajout au panier **natifs du produit**. Placer la description WooCommerce ensuite, puis `[saunafab_appel_contact]`. L’en-tête dynamique affiche le nom de la fiche active. Conserver l’intégration qui gère les options et le calcul des prix des saunas.

Appliquer ce modèle à [Sauna baril](https://saunafab.ca/product/sauna-baril-82-pouces-4-places/), [Sauna cube](https://saunafab.ca/product/nos-saunas-cube/), [Douche](https://saunafab.ca/product/douche/), [Appui-tête](https://saunafab.ca/product/appui-tete/), [Kit de départ](https://saunafab.ca/product/kit-de-depart-sceau-louche-thermometre-hygrometre/), [Lumière](https://saunafab.ca/product/lumiere/) et [Porte-bûches](https://saunafab.ca/product/porte-buche/). La fiche Bain froid peut utiliser son modèle dédié indiqué plus haut.

Dans les données publiques, les descriptions d’Appui-tête et du Kit de départ contiennent du texte de test, et Lumière et Porte-bûches n’ont pas de description. Sur ces fiches, masquer le widget Description jusqu’à ce qu’un texte validé soit disponible.

Pour les quatre archives [Accessoires](https://saunafab.ca/product-category/accessoires/), [Bain froid](https://saunafab.ca/product-category/bain-froid/), [Douche](https://saunafab.ca/product-category/douche/) et [Saunas](https://saunafab.ca/product-category/saunas/), utiliser un modèle d’archive partagé avec le **titre dynamique de l’archive**, les **produits de l’archive** et les filtres existants. Le même modèle continue de suivre le catalogue quand un produit est ajouté ou retiré.

Sur le [Panier](https://saunafab.ca/panier-saunafab/) et la [Commande](https://saunafab.ca/checkout-wedding-v2/), conserver les blocs transactionnels déjà assignés dans WooCommerce et ajouter le menu et le pied de page via le modèle de site si nécessaire. Un test d’achat nécessite l’installation WordPress et sa configuration.

## Versions et vérifications

- Les pages anglophones sous [`/en/`](https://saunafab.ca/en/) utilisent le même plan de montage. Il reste à intégrer et vérifier la traduction des nouveaux textes dans le système multilingue du site.
- Les URL techniques des modèles Royal Addons et du méga-menu sont des composants internes. Les cinq pages de test sont des brouillons de design publiés.
- Les pages catalogue ont un [aperçu local](../../apercu-local/README.md). L’affichage final des filtres, options produit, formulaires, panier et paiement se vérifie dans WordPress.
