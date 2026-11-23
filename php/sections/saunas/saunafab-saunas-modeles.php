<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_modeles', static function () {
    $media_base = defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
        ? '/snippets-wordpress/images/'
        : home_url('/wp-content/uploads/2026/10/');
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" id="sf-saunas-modeles" aria-label="Comparer les saunas">
        <div class="sf-width sf-saunas__stack">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Les modèles</p>
                <h2 class="sf-title">Sauna baril ou sauna cube?</h2>
                <p>Comparez leur forme et leur aménagement avant d’explorer les options.</p>
            </div>
            <div class="sf-saunas__models">
                <article class="sf-saunas__model">
                    <img src="<?php echo esc_url($media_base . 'sauna-baril-edited.png'); ?>" alt="Sauna baril SaunaFab" loading="lazy">
                    <div class="sf-saunas__card-body">
                        <h3>Sauna baril</h3>
                        <p>Sa forme arrondie réduit le volume à chauffer. Son format compact facilite la livraison préassemblée lorsque l’accès le permet.</p>
                        <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/product/sauna-baril-82-pouces-4-places/')); ?>">Voir les saunas baril <span aria-hidden="true">→</span></a>
                    </div>
                </article>
                <article class="sf-saunas__model">
                    <img src="<?php echo esc_url($media_base . 'sauna-cube-2-edited.png'); ?>" alt="Sauna cube SaunaFab" loading="lazy">
                    <div class="sf-saunas__card-body">
                        <h3>Sauna cube</h3>
                        <p>Des lignes droites et un format compact. Ses deux hauteurs de banc permettent de choisir où s’asseoir selon la chaleur recherchée.</p>
                        <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/product/nos-saunas-cube/')); ?>">Voir les saunas cube <span aria-hidden="true">→</span></a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
