<?php
/** Douches section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_faq', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" aria-label="Questions fréquentes sur les douches extérieures">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Questions fréquentes</p>
                <h2 class="sf-title">Avant de commander</h2>
            </div>
            <div class="sf-saunas__faq">
                <details><summary>Puis-je personnaliser ma douche?</summary><p>Oui. Vous pouvez discuter du type de plafond, des finitions et des accessoires avec l’équipe.</p></details>
                <details><summary>Comment choisir son emplacement?</summary><p>Prévoyez une base stable, un accès pour la livraison, une arrivée d’eau et un endroit où l’eau pourra s’écouler.</p></details>
                <details><summary>La plomberie est-elle incluse?</summary><p>La plomberie est vendue séparément. Confirmez les raccords et accessoires nécessaires pour votre installation.</p></details>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
