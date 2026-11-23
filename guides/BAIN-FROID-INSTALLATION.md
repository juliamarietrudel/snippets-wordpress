# Bain froid — modèle Saunas

Les sept shortcodes reprennent la structure, les styles et le carrousel de Saunas. Le contenu produit est adapté de la [fiche Bain froid](https://saunafab.ca/product/bain-froid/).

1. Importer [le JSON Bain froid](../wpcode/saunafab-page-bain-froid.json) dans WPCode, puis activer les sept snippets. Garder **CSS — Variables**, **CSS — Sections**, **CSS — Saunas** et **CSS — Saunas — Galerie** actifs.
2. Dans le modèle Elementor du produit **Bain froid**, placer chaque shortcode dans un widget **Code court** distinct. Si ce modèle sert aussi à d’autres produits, créer une version appliquée uniquement à Bain froid.
3. Conserver les widgets WooCommerce du prix et de l’achat, avec leurs options et quantités. Dans Elementor, ajouter l’ID CSS `sf-bain-froid-achat` au conteneur qui regroupe ces widgets pour que les boutons y défilent. Le bloc d’achat de l’aperçu local est un lien de prévisualisation.
4. Régler le conteneur de la galerie sur pleine largeur et enlever son rembourrage latéral.

```text
[saunafab_bain_froid_hero]
[saunafab_bain_froid_produit]
```

Placer ici le conteneur WooCommerce portant l’ID `sf-bain-froid-achat`, puis ajouter les autres sections.

```text
[saunafab_bain_froid_engagements]
[saunafab_bain_froid_installation]
[saunafab_bain_froid_galerie]
[saunafab_bain_froid_faq]
[saunafab_bain_froid_cta]
```

[Aperçu local Bain froid](http://127.0.0.1:8765/apercu-local/bain-froid.php)
