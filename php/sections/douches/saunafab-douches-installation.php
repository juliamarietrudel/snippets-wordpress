<?php
/** Douches section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_installation', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--cream" aria-label="Préparer l’installation de la douche">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Avant la livraison</p>
                <h2 class="sf-title">Préparer l’emplacement</h2>
                <p>Des photos et des mesures de l’espace aideront l’équipe à discuter de l’installation avec vous.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Valider mon emplacement <span aria-hidden="true">→</span></a>
            </div>
            <ol class="sf-saunas__steps">
                <li><h3>Choisir la base</h3><p>Identifiez une surface stable et de niveau. Faites valider l’espace nécessaire autour de la douche.</p></li>
                <li><h3>Mesurer le passage</h3><p>Notez la largeur du portail, les marches et les virages sur le trajet entre la rue et l’emplacement.</p></li>
                <li><h3>Prévoir l’arrivée d’eau et l’évacuation</h3><p>Repérez l’arrivée d’eau et l’endroit où elle s’écoulera. Demandez à l’équipe de confirmer les besoins de votre configuration.</p></li>
            </ol>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
