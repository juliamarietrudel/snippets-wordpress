<?php
/** Bain froid section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_bain_froid_hero', static function () {
    $photo = home_url('/wp-content/uploads/2026/11/bain-froid-1.png');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--hero sf-saunas--dark" aria-label="Bain froid SaunaFab">
        <img class="sf-saunas__cover" src="<?php echo esc_url($photo); ?>" alt="" fetchpriority="high">
        <div class="sf-width sf-saunas__hero-copy">
            <p class="sf-kicker sf-kicker-light">Bain extérieur</p>
            <h1>Bain froid<br><em>SaunaFab.</em></h1>
            <p>Un bain d’immersion pour votre espace extérieur, seul ou à côté de votre sauna. Découvrez le modèle et discutez des options avec notre équipe.</p>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url(home_url('/product/bain-froid-copie-2/')); ?>">Voir le prix et les options <span aria-hidden="true">↓</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Parler à l’équipe</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
