<?php
/** Bain froid section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_bain_froid_produit', static function () {
    $photo = home_url('/wp-content/uploads/2026/11/bain-froid-2.png');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" aria-label="Découvrir le bain froid">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Le modèle</p>
                <h2 class="sf-title">Un bain froid pour votre espace extérieur.</h2>
                <p>Installez-le près de votre sauna ou aménagez-lui un coin à part. Si les options affichées ne correspondent pas à votre installation, l’équipe peut discuter d’une configuration personnalisée.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/product/bain-froid-copie-2/')); ?>">Consulter les options du bain <span aria-hidden="true">→</span></a>
            </div>
            <div class="sf-saunas__model">
                <img src="<?php echo esc_url($photo); ?>" alt="Bain froid SaunaFab" loading="lazy" decoding="async">
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
