<?php
/**
 * Independent SaunaFab sections. Enable this snippet once, then arrange its shortcodes in Elementor.
 * Load saunafab-variables.css and saunafab-sections.css for these sections.
 */
defined('ABSPATH') || exit;

add_shortcode('saunafab_hero', static function () {
    $images = [
        'hero' => defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
            ? '/snippets-wordpress/images/sauna-square-edited.png'
            : 'https://saunafab.ca/wp-content/uploads/2026/10/sauna-square-edited.png',
    ];
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-hero" id="sf-hero" aria-labelledby="sf-hero-title">
            <img src="<?php echo esc_url($images['hero']); ?>" alt="Sauna SaunaFab">
            <div class="sf-width sf-hero-content">
                <div class="sf-hero-copy">
                    <p class="sf-kicker sf-kicker-light">Un espace pour vous</p>
                    <h1 id="sf-hero-title">La chaleur<br>de la nature,<br><em>chez vous.</em></h1>
                    <p class="sf-hero-lede">Saunas en cèdre fabriqués au Québec, conçus pour votre bien-être.</p>
                    <div class="sf-actions">
                        <a class="sf-button sf-button-primary" href="<?php echo esc_url(is_front_page() ? '#sf-sur-mesure' : home_url('/#sf-sur-mesure')); ?>">Créer mon sauna <span aria-hidden="true">→</span></a>
                        <a class="sf-button sf-button-outline" href="<?php echo esc_url(is_front_page() ? '#sf-modeles' : home_url('/#sf-modeles')); ?>">Voir nos modèles</a>
                    </div>
                </div>
            </div>
            <a class="sf-scroll" href="<?php echo esc_url(is_front_page() ? '#sf-engagement' : home_url('/#sf-engagement')); ?>">Défiler pour découvrir</a>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_univers', static function () {
    // Embed the icons so WordPress does not need separate media uploads.
    $product_icons = [
        'sauna' => 'data:image/svg+xml,' . rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 210" fill="none" stroke="#FAF8F3" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M108 163c-38 0-65-28-65-64s27-65 65-65h29c38 0 65 29 65 65s-27 64-65 64Z"/><ellipse cx="108" cy="99" rx="54" ry="64"/><path d="M91 159V76a17 17 0 0 1 34 0v83M98 81h20v48H98Z M119 140v7M66 156l-5 17h31l4-11m49-1 4 12h31l-7-20"/><g stroke-width="1" opacity=".6"><path d="M141 41h18m-8 16h29m-22 21h38m-34 22h40m-44 23h39m-48 21h35M64 61l15 10M55 90h23m-20 32 20-8m-8 32 11-12M94 40v13m23-15v11"/></g><path d="M165 47c11 31 11 73-2 104" stroke-width="3" opacity=".65"/><path d="M46 180h154" stroke-width="1" opacity=".35"/></svg>'),
        'cold' => 'data:image/svg+xml,' . rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 210" fill="none" stroke="#FAF8F3" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="120" cy="75" rx="77" ry="25"/><ellipse cx="120" cy="75" rx="65" ry="17" stroke-width="1" opacity=".65"/><path d="M43 75l10 65c3 17 32 29 67 29s64-12 67-29l10-65M49 109c16 27 126 27 142 0M52 136c16 27 120 27 136 0"/><g stroke-width="1" opacity=".55"><path d="m67 94 8 65m19-60 4 68m22-67v69m26-70-4 68m31-73-8 65"/></g><path d="M82 72V43a8 8 0 0 1 16 0v10M82 57h16M112 77c12-6 21 6 34 0s18-3 23-1" stroke-width="1.4"/><path d="M157 24v15m-7-11 14 7m0-7-14 7" stroke-width="1.2" opacity=".7"/><path d="M48 181h144" stroke-width="1" opacity=".35"/></svg>'),
        'shower' => 'data:image/svg+xml,' . rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 210" fill="none" stroke="#FAF8F3" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M81 158V40a16 16 0 0 1 16-16h40a16 16 0 0 1 16 16v9M75 158V40a22 22 0 0 1 22-22h40a22 22 0 0 1 22 22v9M145 49h22l9 9h-40Z"/><path d="M75 103h12m-6-6v12M54 168l32-14h91l23 14-32 15H77Z M54 168v5l23 15h91l32-15v-5"/><g stroke-width="1" opacity=".55"><path d="m72 168 27-14m-9 23 44-23m-22 29 56-29m-30 29 46-21M144 72v9m12-9v9m12-9v9m-24 16v9m12-9v9m12-9v9m-24 16v9m12-9v9m12-9v9"/></g><path d="M48 194h157" stroke-width="1" opacity=".35"/></svg>'),
        'heater' => 'data:image/svg+xml,' . rawurlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 210" fill="none" stroke="#FAF8F3" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M65 81h88v82H65Z M153 81l24-13v81l-24 14M65 81l24-13h88M106 68V21h21v47M106 31h21M75 163v13h12v-13m55 0v13h12v-14m13-9v13"/><rect x="77" y="94" width="64" height="50" rx="4"/><path d="M92 134c-8-10 0-18 6-23-2 9 5 10 7 15 8-8 10-16 7-22 18 14 20 24 10 32M147 109v15M83 153h45"/><g stroke-width="1" opacity=".55"><path d="m160 92 10-5m-10 13 10-5m-10 13 10-5M85 138l17-5m-3 8 27-5M111 26h11M111 40v20"/></g><path d="M51 184h140" stroke-width="1" opacity=".35"/></svg>'),
    ];
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-section sf-blue-section" id="sf-univers" aria-labelledby="sf-univers-title">
            <div class="sf-width">
                <div class="sf-universe-intro"><div><p class="sf-kicker sf-kicker-light">Nos produits</p><h2 class="sf-title" id="sf-univers-title">Votre espace détente,<br><em>à votre façon.</em></h2></div><p>Saunas, bains froids, douches et foyers : découvrez nos produits pour créer un espace de bien-être qui vous ressemble.</p></div>
                <div class="sf-universe-grid">
                    <a class="sf-card sf-universe-card" href="<?php echo esc_url(is_front_page() ? '#sf-modeles' : home_url('/#sf-modeles')); ?>"><span class="sf-product-icon" aria-hidden="true" style="--sf-product-art: url('<?php echo $product_icons['sauna']; ?>')"></span><div class="sf-card-copy"><span>La détente</span><h3>Saunas</h3><p>Baril ou cube, trouvez votre modèle.</p></div></a>
                    <a class="sf-card sf-universe-card" href="https://saunafab.ca/bains-froids/"><span class="sf-product-icon" aria-hidden="true" style="--sf-product-art: url('<?php echo $product_icons['cold']; ?>')"></span><div class="sf-card-copy"><span>Récupération</span><h3>Bains froids</h3><p>Stimuler. Respirer. Recommencer.</p></div></a>
                    <a class="sf-card sf-universe-card" href="https://saunafab.ca/douches/"><span class="sf-product-icon" aria-hidden="true" style="--sf-product-art: url('<?php echo $product_icons['shower']; ?>')"></span><div class="sf-card-copy"><span>En plein air</span><h3>Douches</h3><p>Le cèdre, jusque sous la pluie.</p></div></a>
                    <a class="sf-card sf-universe-card" href="https://saunafab.ca/foyers-et-porte-buches/"><span class="sf-product-icon" aria-hidden="true" style="--sf-product-art: url('<?php echo $product_icons['heater']; ?>')"></span><div class="sf-card-copy"><span>La chaleur</span><h3>Foyers</h3><p>Bois ou électrique, à votre rythme.</p></div></a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_sur_mesure', static function () {
    $images = [
        'custom' => defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
            ? '/snippets-wordpress/images/saunas-baril-et-bains-edited.png'
            : 'https://saunafab.ca/wp-content/uploads/2026/10/saunas-baril-et-bains-edited.png',
    ];
    // Keep the SVG reference unique when this block is rendered more than once.
    $clip_id = wp_unique_id('sf-custom-wave-');
    ob_start();
    ?>
    <div class="sf-section-block">
        <svg class="sf-clip-defs" aria-hidden="true" focusable="false">
            <defs>
                <clipPath id="<?php echo esc_attr($clip_id); ?>" clipPathUnits="objectBoundingBox">
                    <path d="M0,0 H0.86 C0.68,0.33 1.04,0.67 0.78,1 H0 Z" />
                </clipPath>
            </defs>
        </svg>
        <section class="sf-section sf-custom" id="sf-sur-mesure" aria-labelledby="sf-custom-title">
            <div class="sf-width sf-custom-layout">
                <div class="sf-custom-copy" style="--sf-custom-clip: url(#<?php echo esc_attr($clip_id); ?>)">
                    <p class="sf-kicker">Sur mesure</p>
                    <h2 class="sf-title" id="sf-custom-title">Créez un sauna<br><em>à votre image.</em></h2>
                    <p class="sf-body-large">Discutez avec notre équipe des dimensions, de la façade, du foyer et des accessoires adaptés à votre espace.</p>
                    <a class="sf-button sf-button-primary" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>" style="width: 60%">Parler de mon projet <span aria-hidden="true">→</span></a>

                </div>
                <div class="sf-custom-image"><img src="<?php echo esc_url($images['custom']); ?>" alt="Saunas baril et bains froids SaunaFab"></div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_modeles', static function () {
    $images = [
        'baril' => defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
            ? '/snippets-wordpress/images/sauna-baril-edited.png'
            : 'https://saunafab.ca/wp-content/uploads/2026/10/sauna-baril-edited.png',
        'cube' => defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW
            ? '/snippets-wordpress/images/sauna-cube-2-edited.png'
            : 'https://saunafab.ca/wp-content/uploads/2026/10/sauna-cube-2-edited.png',
    ];
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-section sf-blue-section" id="sf-modeles" aria-labelledby="sf-modeles-title">
            <div class="sf-width">
                <div class="sf-heading-row">
                    <div><p class="sf-kicker sf-kicker-light">Nos saunas</p><h2 class="sf-title" id="sf-modeles-title">Des modèles pour<br><em>tous les espaces.</em></h2></div>
                </div>
                <div class="sf-model-grid">
                    <a class="sf-card" href="https://saunafab.ca/product/nos-sauna-baril/"><img src="<?php echo esc_url($images['baril']); ?>" alt="Sauna baril en cèdre massif"><div class="sf-card-copy"><span>01 / Le classique</span><h3>Sauna baril</h3><p>Authentique et chaleureux.</p></div><span class="sf-round-arrow">→</span></a>
                    <a class="sf-card" href="https://saunafab.ca/product/nos-saunas-cube-copie/"><img src="<?php echo esc_url($images['cube']); ?>" alt="Sauna cube SaunaFab"><div class="sf-card-copy"><span>02 / La ligne pure</span><h3>Sauna cube</h3><p>Moderne et élégant.</p></div><span class="sf-round-arrow">→</span></a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_engagements', static function () {
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-benefits" id="sf-engagement" aria-label="Engagements SaunaFab">
            <div class="sf-width sf-benefit-grid">
                <article class="sf-benefit"><span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m5 12 7-7 7 7M7 11v9h10v-9M10 20v-6h4v6M12 2v2M3 6l2 2m16-2-2 2"/></svg></span><div><h3>Fabriqué au Québec</h3><p>Des pièces pensées et assemblées chez nous.</p></div></article>
                <article class="sf-benefit"><span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 19c-5-4-5-10 0-14 5 4 5 10 0 14Zm0-10v10M14 5h7v14h-7M17 8h4m-4 4h4m-4 4h4"/></svg></span><div><h3>Cèdre massif 1 ½ po</h3><p>Une matière noble, isolante et durable.</p></div></article>
                <article class="sf-benefit"><span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 3 8 3v6c0 5-8 9-8 9s-8-4-8-9V6Z"/><path d="m8 12 3 3 5-6"/></svg></span><div><h3>Garantie 3 ans</h3><p>La tranquillité d'esprit, naturellement.</p></div></article>
                <article class="sf-benefit"><span class="sf-benefit-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 6h11v12H3Zm11 5h4l3 4v3h-7M3 10H1m2 4H1"/><circle cx="7" cy="18" r="2"/><circle cx="18" cy="18" r="2"/></svg></span><div><h3>Livraison disponible</h3><p>On vous accompagne jusqu'à la maison.</p></div></article>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_avis', static function () {
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-section sf-testimonials" aria-labelledby="sf-reviews-title">
            <div class="sf-width"><p class="sf-kicker">Ils en parlent</p><h2 class="sf-title" id="sf-reviews-title">Une chaleur qui<br><em>reste avec vous.</em></h2><div class="sf-testimonial-grid" style="margin-top:42px"><article class="sf-testimonial"><div class="sf-stars">★★★★★</div><blockquote>« J'ai fait l'achat d'un sauna chez SaunaFab : très bon choix qualité-prix, et que dire du service hors du commun. »</blockquote><cite>Christian Richer</cite></article><article class="sf-testimonial"><div class="sf-stars">★★★★★</div><blockquote>« Ils ont été d'une grande aide pour faire fonctionner l'appareil de chauffage de mon sauna. »</blockquote><cite>Geneviève Paré</cite></article><article class="sf-testimonial"><div class="sf-stars">★★★★★</div><blockquote>« Le produit est de qualité et Thomas est très réactif aux demandes. Je recommande vivement cette compagnie. »</blockquote><cite>Nicolas Lessard</cite></article></div></div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_appel_contact', static function () {
    ob_start();
    ?>
    <div class="sf-section-block">
        <section class="sf-section sf-contact" id="sf-contact" aria-labelledby="sf-contact-title">
            <div class="sf-width sf-contact-grid">
                <div class="sf-contact-copy"><p class="sf-kicker sf-kicker-light">Nous joindre</p><h2 class="sf-title" id="sf-contact-title">Votre moment<br><em>commence ici.</em></h2><p>Une question sur un modèle, une installation ou une configuration sur mesure? Thomas et son équipe vous répondent avec plaisir.</p><div class="sf-contact-details"><a href="tel:8193145586">819-314-5586</a><a href="mailto:saunafab@gmail.com">saunafab@gmail.com</a><span>250 route 139, porte 3, Local 5<br>Acton Vale, Québec, J0H 1A0</span><span>Disponible sur rendez-vous</span></div></div>
                <div class="sf-form">
                    <h3 class="sf-form-title">Parlons de votre projet</h3>
                    <p>Décrivez-nous votre projet dans le formulaire de la page Contact.</p>
                    <a class="sf-button sf-button-primary" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Accéder au formulaire <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
    </div>
    <?php
    return ob_get_clean();
});

add_shortcode('saunafab_footer', static function () {
    ob_start();
    ?>
    <div class="sf-section-block">
        <footer class="sf-footer"><div class="sf-width sf-footer-top"><a class="sf-brand" href="<?php echo esc_url(home_url('/')); ?>"><span>SaunaFab</span></a><p>La chaleur de la nature,<br><em>chez vous.</em></p><div class="sf-footer-links"><a href="<?php echo esc_url(is_front_page() ? '#sf-modeles' : home_url('/#sf-modeles')); ?>">Saunas</a><a href="<?php echo esc_url(is_front_page() ? '#sf-univers' : home_url('/#sf-univers')); ?>">Bains froids</a><a href="<?php echo esc_url(is_front_page() ? '#sf-contact' : home_url('/#sf-contact')); ?>">Nous joindre</a></div></div><div class="sf-width sf-footer-bottom"><span>© <?php echo esc_html(date('Y')); ?> SaunaFab.</span><span>Saunas non échangeables et non remboursables.</span><a href="https://saunafab.ca/en/">English ↗</a></div></footer>
    </div>
    <?php
    return ob_get_clean();
});
