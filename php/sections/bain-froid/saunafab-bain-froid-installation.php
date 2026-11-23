<?php
/** Bain froid section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_bain_froid_installation', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--cream" aria-label="Préparer l’installation du bain froid">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Avant la livraison</p>
                <h2 class="sf-title">Préparer l’emplacement</h2>
                <p>Des photos et des mesures de l’espace aideront l’équipe à discuter de l’installation avec vous.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Valider mon emplacement <span aria-hidden="true">→</span></a>
            </div>
            <ol class="sf-saunas__steps">
                <li><h3>Choisir la base</h3><p>Identifiez une surface stable et de niveau. Faites confirmer qu’elle peut supporter le bain rempli.</p></li>
                <li><h3>Mesurer le passage</h3><p>Notez la largeur du portail, les marches et les virages sur le trajet entre la rue et l’emplacement.</p></li>
                <li><h3>Prévoir le remplissage et la vidange</h3><p>Repérez l’accès à l’eau et demandez à l’équipe de confirmer les exigences de votre configuration.</p></li>
            </ol>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
