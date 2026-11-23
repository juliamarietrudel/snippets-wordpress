<?php
/** Bain froid section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_bain_froid_cta', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark sf-saunas--cta" aria-label="Commander le bain froid ou nous joindre">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker sf-kicker-light">Votre projet</p>
                <h2 class="sf-title">Prêt à choisir votre bain froid?</h2>
                <p>Consultez les options du modèle ou envoyez-nous vos questions sur la configuration et l’installation.</p>
            </div>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="#sf-bain-froid-achat">Voir le prix et les options <span aria-hidden="true">→</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Discuter de mon projet</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
