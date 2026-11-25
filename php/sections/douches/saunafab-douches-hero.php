<?php
/** Douches section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_hero', static function () {
    $photo = home_url('/wp-content/uploads/2026/11/douche-1.png');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--hero sf-saunas--dark" aria-label="Douches extérieures SaunaFab">
        <img class="sf-saunas__cover" src="<?php echo esc_url($photo); ?>" alt="" fetchpriority="high">
        <div class="sf-width sf-saunas__hero-copy">
            <p class="sf-kicker sf-kicker-light">Fabriquées au Québec</p>
            <h1>Douches extérieures<br><em>en cèdre.</em></h1>
            <p>Une douche en plein air, près du sauna ou sur la terrasse. Choisissez un plafond ouvert ou fermé et les finitions qui conviennent à votre espace.</p>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url(home_url('/product/douche-copie/')); ?>">Voir la fiche produit <span aria-hidden="true">→</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Parler à l’équipe</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
