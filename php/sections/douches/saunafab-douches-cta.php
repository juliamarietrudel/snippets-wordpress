<?php
/** Douches section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_cta', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark sf-saunas--cta" aria-label="Commander la douche ou nous joindre">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker sf-kicker-light">Votre projet</p>
                <h2 class="sf-title">Parlons de votre douche extérieure.</h2>
                <p>Consultez le modèle ou indiquez-nous où vous souhaitez l’installer et le type de plafond que vous préférez.</p>
            </div>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url(home_url('/product/douche-copie/')); ?>">Voir la fiche produit <span aria-hidden="true">→</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Discuter de mon projet</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
