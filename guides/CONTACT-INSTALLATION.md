# Installer la page Contact de SaunaFab

Les chemins de fichiers ci-dessous partent du dossier `snippets-wordpress/`.

1. Dans **Code Snippets**, créer un snippet PHP et coller le contenu de `php/sections/saunafab-contact.php` sans la première ligne `<?php`. Activer le snippet sur le site. Copier ensuite tout le contenu de `css/components/saunafab-contact.css` dans le **CSS additionnel** de WordPress ou dans un snippet CSS activé sur le site.
2. Dans Elementor, ouvrir la page Contact et masquer son titre automatique. Ajouter un conteneur pleine largeur, avec **Largeur du contenu → Pleine largeur**, sans arrière-plan ni marge, et lui donner la classe CSS `sf-contact-page` dans l’onglet **Avancé**.
3. Ajouter deux éléments directement dans ce conteneur, dans cet ordre.
   - Un widget **Code court** contenant `[saunafab_contact]` ou `[saunafab-contact]`.
   - Un conteneur vertical avec la classe CSS `sf-contact-card`. Dans ce conteneur, ajouter un titre H2 « Écrivez-nous », puis déplacer le widget de formulaire Royal Elementor existant. Les deux colonnes s’empilent automatiquement sur mobile.
4. Dans le widget Royal Elementor, garder **Nom**, **Courriel** et **Téléphone**, ainsi que l’action **Email**. Ajouter un champ multiligne « Votre projet », avec l’exemple « Quel produit vous intéresse? Dans quelle ville se trouve votre projet? ». Vérifier que le nouveau champ est inclus dans le corps du courriel et qu’une adresse de réception est configurée.
5. Prévisualiser sur ordinateur et mobile, puis envoyer une demande de test et vérifier sa réception.

Les deux snippets reprennent le style de `php/legacy/homepage.php`. Le formulaire reste un widget natif pour conserver la validation, le chargement et les messages d’envoi de Royal Elementor.

Le shortcode applique le style aux coordonnées même lorsqu’il est utilisé seul. Pour afficher le formulaire à côté des coordonnées, utiliser les classes Elementor des étapes 2 et 3. Si l’ancienne version reste visible après l’enregistrement, vider le cache de la page et recharger l’aperçu.

## En-tête sur la page Contact

Le shortcode Contact affiche automatiquement le menu SaunaFab lorsque le snippet PHP `php/components/saunafab-header.php` est actif. Charger aussi `css/legacy/index.css` et `css/components/saunafab-header.css` dans le CSS additionnel. Si un modèle Elementor affiche déjà le menu sur la page Contact, utiliser `[saunafab_contact header="no"]` pour conserver un seul en-tête.
