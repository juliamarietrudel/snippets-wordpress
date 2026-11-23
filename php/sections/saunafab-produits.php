<?php
/** Shortcode : [saunafab_produits]. Coller sans la première ligne PHP.
 * CSS : index.css + saunafab-produits.css. */
defined('ABSPATH') || exit;
add_shortcode('saunafab_produits', function () {
    // Set Media Library URLs here. The cards use illustrations when a photo is unavailable.
    $images = array('sauna' => '', 'bain' => '', 'douche' => '', 'foyer' => '');
    if (defined('SAUNAFAB_LOCAL_PREVIEW') && SAUNAFAB_LOCAL_PREVIEW) {
        $preview_images = array(
            'sauna' => 'saunas.png',
            'bain' => 'bains-froids.png',
            'douche' => 'douches.png',
            'foyer' => 'foyers.png',
        );
        foreach ($preview_images as $key => $filename) {
            if (is_file(dirname(__DIR__, 2) . '/images/edited/' . $filename)) {
                $images[$key] = '../snippets-wordpress/images/edited/' . $filename;
            }
        }
    }
    $products = array(
        array('Saunas', 'Découvrez les modèles et imaginez votre espace de détente.', '/about-us/', '01', 'sauna'),
        array('Bains froids', 'Explorez une autre façon de compléter votre rituel.', '/product/bain-froid/', '02', 'bain'),
        array('Douches', 'Découvrez nos douches pour votre espace extérieur.', '/douches/', '03', 'douche'),
        array('Foyers', 'Explorez les options de chauffage pour votre sauna.', '/foyers-et-porte-buches/', '04', 'foyer'),
    );
    ob_start(); ?>
    <section class="sf-products" aria-label="Nos produits">
      <div class="sf-products__wrap">
        <p class="sf-products__eyebrow">L’univers SaunaFab</p>
        <h2>Votre espace, votre rituel.</h2>
        <p class="sf-products__intro">Quatre façons de profiter de votre espace. Explorez chaque univers pour en savoir plus.</p>
        <div class="sf-products__grid">
        <?php foreach ($products as $product) : ?>
          <a class="sf-products__card sf-products__card--<?php echo esc_attr($product[4]); ?>" href="<?php echo esc_url(home_url($product[2])); ?>">
            <div class="sf-products__visual" aria-hidden="true"><span><?php echo esc_html($product[3]); ?></span>
            <?php if ($images[$product[4]]) : ?>
              <img src="<?php echo esc_url($images[$product[4]]); ?>" alt="" width="1200" height="900" loading="lazy" decoding="async">
            <?php else : ?><svg viewBox="0 0 160 120" fill="none" stroke="currentColor" stroke-width="2">
            <?php if ($product[4] === 'sauna') : ?><circle cx="80" cy="55" r="42"/><path d="M60 94V40h40v54M72 53h16M72 66h16M32 103h96"/>
            <?php elseif ($product[4] === 'bain') : ?><path d="M28 45h104l-10 49H38zM43 104v-10m74 10V94M44 58q12-12 24 0t24 0t24 0M57 18v15m23-21v21m23-15v15"/>
            <?php elseif ($product[4] === 'douche') : ?><path d="M53 104V27q0-13 15-13h22v16m-17 0h34M42 105h80M77 43v9m13-9v9m13-9v9M77 62v9m13-9v9m13-9v9"/>
            <?php else : ?><path d="M47 105V43h66v62zM67 43V12h26v31M58 95h44M80 86c-28-4-17-25-9-32-1 10 12 8 11-5 25 25 16 35-2 37z"/><?php endif; ?>
            </svg><?php endif; ?></div>
            <div class="sf-products__body"><h3><?php echo esc_html($product[0]); ?></h3><p><?php echo esc_html($product[1]); ?></p><span class="sf-products__link">Explorer <span aria-hidden="true">↗</span></span></div>
          </a>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php return ob_get_clean();
});
