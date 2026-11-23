<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_cta', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark sf-saunas--cta" aria-label="Parler de votre projet sauna">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker sf-kicker-light">Votre projet</p>
                <h2 class="sf-title">Parlons de votre sauna.</h2>
                <p>Indiquez-nous votre modèle préféré, votre ville et les dimensions de l’espace. Nous pourrons vous guider sur la configuration et la livraison.</p>
            </div>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Discuter de mon projet <span aria-hidden="true">→</span></a>
                <a class="sf-button sf-button-outline" href="tel:+18193145586">Appeler le 819 314-5586</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
