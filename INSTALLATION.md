# Accueil SaunaFab — design A, bleu nuit

## Installation avec Code Snippets

1. Créer un snippet PHP dans Code Snippets. Copier `saunafab-accueil.php` **sans la première ligne `<?php`**. Activer le snippet sur le site.
2. Copier `index.css` (variables partagées, une seule fois), puis `saunafab-accueil.css` dans le **CSS additionnel** de WordPress. Ne pas ajouter de balises `<style>`. Pour afficher aussi l’autre composant, ajouter son CSS après `index.css`.
3. Sur une page de brouillon, ajouter un bloc **Code court / Shortcode** contenant `[saunafab_accueil]`. Dans Elementor, utiliser le widget **Shortcode**.
4. Choisir un modèle de page pleine largeur et désactiver le titre automatique de cette page. Garder le menu et le pied de page du thème. Ne pas insérer le nouveau shortcode sous l'ancien contenu : il le remplace.
5. Prévisualiser sur ordinateur et mobile avant de sélectionner la page comme accueil.

Le HTML est inclus dans le PHP. Aucun JavaScript supplémentaire n'est nécessaire. Les liens mènent aux produits existants, au téléphone ou au courriel. Aucun formulaire fictif ni configurateur n'est inclus.

## Typographies

Dans les réglages typographiques du thème ou d'Elementor, charger **Cormorant Garamond 600** et **Inter 400/500/600**, idéalement depuis des fichiers locaux. Le CSS les utilisera automatiquement lorsqu'elles sont chargées. Sans ces polices, Georgia et Arial servent de remplacement.

## Personnalisation

- Couleurs, largeur et polices : variables partagées dans `:root` de `index.css`.
- Espacement des sections : **03**.
- Boutons : **04**.
- Grande photo et superposition bleu nuit : **05**.
- Cartes : **06**.
- Sections produits : **07**.
- Contact : **08**.
- Mobile : **09**.
- Photos et destinations : tableaux `$photos` et `$links` en haut du PHP.

Le bleu nuit est `#224767`. Le cuivre est légèrement assombri (`#B94F2F`) pour améliorer la lisibilité des boutons blancs. Tous les styles sont limités à `.sf-home` et ne modifient pas le menu du thème. Pour accorder ce menu au nouveau design, régler son fond sur `#224767` dans le constructeur de thème.

## Contenu et images

Source : https://saunafab.ca/ consultée le 9 octobre 2026, avec les pages produits liées. Textes reformulés et condensés. Les affirmations thérapeutiques des bains froids ne sont pas reprises. Les avis clients ne sont pas retranscrits dans cette première version ; le bloc de contact présente le service sans inventer de témoignages.

Les photos utilisent deux URL présentes sur le site actuel. Leur disponibilité et leur cadrage restent à vérifier dans WordPress ; elles peuvent être remplacées par des URL de la médiathèque. Le cube est présenté sur une carte typographique bleu nuit, sans lui attribuer une photo de sauna baril. Les images de la maquette ne sont pas des fichiers photo séparés dans le projet.

## Vérification

Syntaxe PHP vérifiée localement. Le shortcode a été rendu avec des fonctions WordPress simulées pour contrôler le HTML produit. L'intégration au thème, les photos distantes et le rendu visuel final doivent être vérifiés sur la page de brouillon. Aucun changement n'a été publié sur le site.

Les couleurs, polices et réglages partagés sont dans `index.css`. Les règles des composants restent dans `saunafab-header.css` et `saunafab-accueil.css`. Palette : bleu `#224767`, crème `#f3eee4`, accent `#B94F2F`, beige clair `#FAF8F3`, noir `#000000`.
