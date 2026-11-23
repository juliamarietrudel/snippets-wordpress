<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_faq', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" aria-label="Questions fréquentes sur les saunas">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Questions fréquentes</p>
                <h2 class="sf-title">Avant de choisir</h2>
            </div>
            <div class="sf-saunas__faq">
                <details><summary>Puis-je personnaliser mon sauna?</summary><p>Oui. Si vous ne trouvez pas la configuration souhaitée sur la fiche du modèle, communiquez avec l’équipe pour discuter des options.</p></details>
                <details><summary>Des dalles individuelles peuvent-elles servir de base?</summary><p>Pour certains modèles, des dalles de 16 po ou de 24 po placées sous les appuis peuvent convenir. Faites confirmer leur nombre et leur disposition pour votre modèle et votre terrain.</p></details>
                <details><summary>Quel foyer choisir?</summary><p>Discutez des options au bois et électriques avec l’équipe. L’emplacement, l’accès à l’électricité et les exigences d’installation peuvent orienter votre choix.</p></details>
                <details><summary>Puis-je voir un sauna avant de commander?</summary><p>Les visites à Acton Vale se font sur rendez-vous. Communiquez avec l’équipe pour connaître les modèles disponibles à voir.</p></details>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
