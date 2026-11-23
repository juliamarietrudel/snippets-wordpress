<?php
/** Bain froid section using the Sauna page styles. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_bain_froid_faq', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" aria-label="Questions fréquentes sur le bain froid">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Questions fréquentes</p>
                <h2 class="sf-title">Avant de commander</h2>
            </div>
            <div class="sf-saunas__faq">
                <details><summary>Puis-je personnaliser mon bain froid?</summary><p>Oui. Si la configuration souhaitée ne figure pas parmi les options du produit, communiquez avec l’équipe pour en discuter.</p></details>
                <details><summary>Comment choisir son emplacement?</summary><p>Prévoyez une base stable, un accès pour la livraison et un moyen de remplir et de vider le bain. L’équipe peut examiner les photos et les dimensions de votre espace.</p></details>
                <details><summary>Quel entretien faut-il prévoir?</summary><p>Demandez les consignes de nettoyage et d’entretien de l’eau qui correspondent à votre configuration et à votre utilisation.</p></details>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
