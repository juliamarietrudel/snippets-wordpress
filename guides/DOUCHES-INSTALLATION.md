# Douches extérieures — modèle Saunas

1. Importer [le JSON Douches](../wpcode/saunafab-page-douches.json) dans **WPCode → Tools → Import**, puis activer les sept snippets. Garder **CSS — Variables**, **CSS — Sections**, **CSS — Saunas** et **CSS — Saunas — Galerie** actifs.
2. Dans Elementor, ouvrir la page **Douches** et placer un widget **Code court** par ligne, dans l’ordre ci-dessous.
3. Pour la galerie, choisir un conteneur pleine largeur avec rembourrage latéral à zéro. Réutiliser `[saunafab_header]` et `[saunafab_footer]` si la page gère son propre en-tête et pied de page.

```text
[saunafab_douches_hero]
[saunafab_douches_produit]
[saunafab_douches_engagements]
[saunafab_douches_installation]
[saunafab_douches_galerie]
[saunafab_douches_faq]
[saunafab_douches_cta]
```

Les appels à l’action d’achat mènent à [la fiche WooCommerce Douche](https://saunafab.ca/product/douche/), où se trouvent le prix, les options et le panier. Le contenu est adapté de la [page Douches existante](https://saunafab.ca/douches/).

[Ouvrir l’aperçu local](http://127.0.0.1:8765/apercu-local/douches.php)
