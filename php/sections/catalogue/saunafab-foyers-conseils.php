<?php
/** Standalone guidance section for selecting a sauna heater. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_foyers_conseils', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--cream" aria-label="Choisir votre foyer">
        <div class="sf-width sf-saunas__split">
            <div class="sf-saunas__heading">
                <p class="sf-kicker">Préparer votre projet</p>
                <h2 class="sf-title">Quel foyer convient à votre sauna?</h2>
                <p>Pour comparer les modèles, indiquez à l’équipe les dimensions du sauna, les surfaces vitrées et le type d’énergie disponible.</p>
                <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Vérifier la compatibilité <span aria-hidden="true">→</span></a>
            </div>
            <div class="sf-saunas__faq">
                <details><summary>Quel format de foyer électrique choisir?</summary><p>Le Cilindro est autoportant et le KIP se fixe au mur. Demandez quel modèle convient à l’espace disponible et à la puissance requise.</p></details>
                <details><summary>Qu’est-ce qui distingue les foyers au bois M3 et M3 SL?</summary><p>Le M3 se charge par l’avant. Le M3 SL permet le chargement depuis une pièce adjacente ou l’extérieur.</p></details>
                <details><summary>Puis-je demander un autre modèle Harvia?</summary><p>Oui. Indiquez la référence qui vous intéresse pour vérifier sa disponibilité et sa compatibilité.</p></details>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
