<?php
/** Dynamic heading for an Elementor Single Product template. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_produit_entete', static function () {
    if (!function_exists('is_product') || !is_product()) {
        return '';
    }

    $product = wc_get_product(get_queried_object_id());
    if (!$product) {
        return '';
    }

    // Leave pricing, options, gallery and purchase actions to the native product widgets.
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark" aria-label="<?php echo esc_attr($product->get_name()); ?>">
        <div class="sf-width sf-saunas__heading sf-catalogue__heading">
            <h1 class="sf-title"><?php echo esc_html($product->get_name()); ?></h1>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="#sf-produit-achat">Voir le prix et les options <span aria-hidden="true">↓</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Parler à l’équipe</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
