<?php
/** Standalone Saunas section for Elementor. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_saunas_engagements', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark" aria-label="Fabrication, garantie et service">
        <div class="sf-width sf-saunas__stack">
            <div class="sf-saunas__heading">
                <p class="sf-kicker sf-kicker-light">Pourquoi SaunaFab</p>
                <h2 class="sf-title">Fabrication, garantie et service</h2>
            </div>
            <div class="sf-benefit-grid sf-saunas__benefits">
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 7-7 7 7M7 11v9h10v-9M10 20v-6h4v6M12 2v2M3 6l2 2m16-2-2 2"/></svg></span>
                    <div><h3>Fabrication québécoise</h3><p>Matériaux québécois, bois séché au séchoir, vitrage trempé et plancher à double base.</p></div>
                </article>
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 3 8 3v6c0 5-8 9-8 9s-8-4-8-9V6Z"/><path d="m8 12 3 3 5-6"/></svg></span>
                    <div><h3>Garanties</h3><p>Le sauna est garanti trois ans. Le foyer est couvert un an par son fabricant.</p></div>
                </article>
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h11v12H3Zm11 5h4l3 4v3h-7M3 10H1m2 4H1"/><circle cx="7" cy="18" r="2"/><circle cx="18" cy="18" r="2"/></svg></span>
                    <div><h3>Livraison et soutien</h3><p>Choisissez une livraison préassemblée, un assemblage sur place ou un ensemble à monter. L’équipe offre aussi du soutien technique.</p></div>
                </article>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
