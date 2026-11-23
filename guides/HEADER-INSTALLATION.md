# Header SaunaFab — bleu nuit

Les chemins de fichiers ci-dessous partent du dossier `snippets-wordpress/`.

1. Dans **Code Snippets**, créer un snippet PHP et coller `php/components/saunafab-header.php` sans la première ligne `<?php`. Activer sur le site.
2. Copier `css/legacy/index.css` (variables partagées, une seule fois), puis `css/components/saunafab-header.css` dans le **CSS additionnel** de WordPress. Ne pas ajouter de balises `<style>`. Pour afficher aussi l’autre composant, ajouter son CSS après `css/legacy/index.css`.
3. Dans **Elementor Pro → Constructeur de thème → Header**, créer ou modifier le modèle d'en-tête. Ajouter un widget **Shortcode** contenant `[saunafab_header]`.
4. Régler le conteneur sur pleine largeur, avec marges et espacements internes à zéro, et débordement visible pour les sous-menus. Définir les conditions d'affichage du modèle sur le site entier. Vérifier que l'ancien en-tête n'est plus affiché.
5. Sans Elementor Pro, utiliser la zone d'en-tête du thème si elle exécute les shortcodes. Sinon, un thème enfant peut afficher `echo do_shortcode('[saunafab_header]');` à la place du header existant. Ne pas modifier le thème parent. Dans l'éditeur de site, essayer un bloc Shortcode dans la partie de modèle En-tête.

Pour une prévisualisation en brouillon, insérer le shortcode au-dessus de `[saunafab_accueil]`. Cela ne remplace pas à lui seul le header du thème.

## Personnalisation

- Logo : celui défini dans l'identité du site WordPress. Sinon remplir `$logo_url` en haut du PHP. Sans logo, le nom SaunaFab s'affiche en texte.
- Liens et intitulés : tableau `$groups` dans le PHP. Le lien Contact est `/elementor-2911/`, destination du menu actuel ; vérifier cette page avant mise en ligne. Le lien d'informations Saunas est `/about-us/`, également présent sur le site actuel.
- Couleurs et police : variables partagées dans `:root` de `css/legacy/index.css`. Bleu `#224767`.
- Taille du logo : section 02 et section 07 pour mobile.
- Menus : sections 03 et 04. Recherche et panier : section 05.
- Seuil mobile : `1100px`, à modifier **dans le CSS et dans le JavaScript du PHP** ensemble.

Les styles sont limités à `.sfh`. Le panier s'affiche seulement lorsque WooCommerce est actif ; aucun compteur susceptible de devenir périmé avec le cache n'est utilisé. La recherche est la recherche native WordPress. Le sélecteur FR/EN n'est pas inclus : il nécessite le branchement au plugin de traduction du site et à ses URL réelles.

Le petit JavaScript est déjà inclus dans le PHP. Il gère l'ouverture mobile, la fermeture extérieure et la touche Échap. Sans JavaScript, la navigation reste visible et les menus déroulants natifs restent utilisables. Aucun script externe n'est chargé.

## Vérification avant publication

Syntaxe PHP vérifiée localement. Vérifier dans WordPress : logo, menus au clavier et au toucher, ouverture/fermeture mobile, destinations, recherche et panier. L'intégration au thème et le rendu navigateur n'ont pas été testés sur le site actif. Aucun changement publié.

Les couleurs, polices et réglages partagés sont dans `css/legacy/index.css`. Les règles des composants restent dans `css/components/saunafab-header.css` et `css/legacy/saunafab-accueil.css`. Palette : bleu `#224767`, crème `#f3eee4`, accent `#B94F2F`, beige clair `#FAF8F3`, noir `#000000`.
