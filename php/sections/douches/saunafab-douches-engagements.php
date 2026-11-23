<?php
/** Douches section using the shared benefit cards. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_engagements', static function () {
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark" aria-label="Fabrication, personnalisation et plomberie">
        <div class="sf-width sf-saunas__stack">
            <div class="sf-saunas__heading">
                <p class="sf-kicker sf-kicker-light">Pourquoi SaunaFab</p>
                <h2 class="sf-title">Fabrication, personnalisation et plomberie</h2>
            </div>
            <div class="sf-benefit-grid sf-saunas__benefits">
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 7-7 7 7M7 11v9h10v-9M10 20v-6h4v6M12 2v2M3 6l2 2m16-2-2 2"/></svg></span>
                    <div><h3>Fabriquée au Québec</h3><p>Des artisans d’ici façonnent le cèdre, un bois choisi pour sa résistance à l’humidité.</p></div>
                </article>
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20V4h16v16Z"/><path d="M8 16l8-8m-3 0h3v3M8 13v3h3"/></svg></span>
                    <div><h3>Finitions à choisir</h3><p>Choisissez le type de plafond, les finitions et les accessoires adaptés à votre aménagement.</p></div>
                </article>
                <article class="sf-benefit">
                    <span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h11v12H3Zm11 5h4l3 4v3h-7M3 10H1m2 4H1"/><circle cx="7" cy="18" r="2"/><circle cx="18" cy="18" r="2"/></svg></span>
                    <div><h3>Plomberie séparée</h3><p>La plomberie est vendue à part pour vous laisser choisir l’équipement qui convient à votre installation.</p></div>
                </article>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
