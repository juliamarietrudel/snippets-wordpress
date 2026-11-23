<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_hero', static function () {
    // Use the homepage hero photo from the Media Library on WordPress.
    $image = defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
        ? '/snippets-wordpress/images/sauna-square-edited.png'
        : home_url('/wp-content/uploads/2026/10/sauna-square-edited.png');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--hero sf-saunas--dark" aria-label="Saunas extérieurs SaunaFab">
        <img class="sf-saunas__cover" src="<?php echo esc_url($image); ?>" alt="" fetchpriority="high">
        <div class="sf-width sf-saunas__hero-copy">
            <p class="sf-kicker sf-kicker-light">Fabriqués au Québec</p>
            <h1>Saunas extérieurs<br><em>en cèdre.</em></h1>
            <p>Baril ou cube, trouvez un sauna qui convient à votre espace. Notre équipe vous accompagne du choix du modèle à l’installation.</p>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url('#sf-saunas-modeles'); ?>">Comparer les modèles <span aria-hidden="true">↓</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Parler à l’équipe</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
