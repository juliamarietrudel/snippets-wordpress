<?php
/** Douches section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_produit', static function () {
    $photo = home_url('/wp-content/uploads/2026/11/douche-2.png');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" aria-label="Découvrir la douche extérieure">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Le modèle</p>
                <h2 class="sf-title">Une douche à ciel ouvert ou à l’abri des regards.</h2>
                <p>Avec 7 pi de hauteur et 42 po de diamètre, la douche laisse de la place pour bouger. Le plafond ouvert donne sur le ciel, tandis que le plafond fermé offre plus d’intimité. La plomberie est vendue séparément.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/product/douche-copie/')); ?>">Voir les options de la douche <span aria-hidden="true">→</span></a>
            </div>
            <div class="sf-saunas__model">
                <img src="<?php echo esc_url($photo); ?>" alt="Douche extérieure SaunaFab" loading="lazy" decoding="async">
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
