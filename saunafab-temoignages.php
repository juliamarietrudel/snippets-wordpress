<?php
/** Shortcode : [saunafab_temoignages]. CSS : index.css + saunafab-temoignages.css.
 * Coller sans la première ligne PHP. Ajouter uniquement des avis réels autorisés. */
defined('ABSPATH') || exit;
add_shortcode('saunafab_temoignages', function () {
    $reviews = array();
    // Exemple de structure : array('texte' => 'Avis réel', 'nom' => 'Nom autorisé');
    // Ajouter les avis ci-dessus dans $reviews. Aucun exemple ne paraît sur WordPress.
    $demo = defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW;
    if (!$reviews && !$demo) return '';
    if (!$reviews) {
        $reviews = array_fill(0, 3, array('texte' => 'Votre témoignage client apparaîtra ici. Ajoutez un avis réel et son attribution dans le fichier de cette section.', 'nom' => 'Nom du client à ajouter'));
    }
    ob_start(); ?>
    <section class="sf-reviews" aria-label="Témoignages">
      <div class="sf-reviews__wrap"><p class="sf-reviews__eyebrow">Vos moments SaunaFab</p><h2>Une place dans votre quotidien.</h2>
      <?php if ($demo) : ?><p class="sf-reviews__demo">Aperçu de mise en page — ces textes sont des exemples, pas des avis clients.</p><?php endif; ?>
      <div class="sf-reviews__grid">
      <?php foreach ($reviews as $review) : ?>
        <figure class="sf-reviews__card"><span class="sf-reviews__quote" aria-hidden="true">“</span><blockquote><p><?php echo esc_html($review['texte']); ?></p></blockquote><figcaption><?php echo esc_html($review['nom']); ?></figcaption></figure>
      <?php endforeach; ?>
      </div></div>
    </section>
    <?php return ob_get_clean();
});
