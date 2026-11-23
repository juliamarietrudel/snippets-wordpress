<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_installation', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--cream" id="sf-saunas-installation" aria-label="Préparer l’installation">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Avant la livraison</p>
                <h2 class="sf-title">Préparer l’emplacement</h2>
                <p>Avant de commander, prenez quelques photos de l’emplacement et du trajet depuis la rue. Elles aideront l’équipe à valider l’accès et la livraison.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Valider mon emplacement <span aria-hidden="true">→</span></a>
            </div>
            <ol class="sf-saunas__steps">
                <li><h3>Choisir une base stable</h3><p>Une dalle de béton, des pavés, une terrasse adaptée ou un lit de pierre peuvent convenir. Vérifiez que la base est de niveau et adaptée au modèle.</p></li>
                <li><h3>Mesurer le passage</h3><p>Pour un sauna baril livré préassemblé, prévoyez un dégagement d’environ 6 pi à confirmer avec l’équipe. Mesurez le point le plus étroit, incluant les portails et les virages.</p></li>
                <li><h3>Confirmer le mode de livraison</h3><p>Si l’accès est restreint, demandez si l’assemblage sur place ou la livraison en kit convient à votre projet.</p></li>
            </ol>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
