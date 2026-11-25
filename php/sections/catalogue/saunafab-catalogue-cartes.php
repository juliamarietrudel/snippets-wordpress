<?php
/** Cards for the written catalog pages. WooCommerce supplies purchasable items separately. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_catalogue_cartes', static function ($attributes = []) {
    $attributes = shortcode_atts(['sujet' => 'boutique'], $attributes);
    $pages = [
        'boutique' => ['sf-catalogue', 'Explorer les produits', [
            ['Saunas', 'Comparer les modèles baril et cube.', '/saunas/'],
            ['Bains froids', 'Découvrir le bain extérieur et préparer son installation.', '/bains-froids/'],
            ['Douches', 'Découvrir les douches extérieures en cèdre.', '/douches/'],
            ['Foyers', 'Comparer les options de chauffage Harvia.', '/foyers-et-porte-buches/'],
            ['Accessoires', 'Voir les appuis-tête et ensembles pour sauna.', '/accessoires/'],
        ]],
        'foyers' => ['sf-foyers', 'Comparer les foyers Harvia', [
            ['Cilindro', 'Un foyer électrique autoportant à finition en acier inoxydable. La gamme présentée comprend les modèles PC60, PC80, PC90 et PC110E.', '/elementor-2911/', '/wp-content/uploads/2024/10/Harvia-Cilindro-e1730485478642-199x300.jpg'],
            ['KIP', 'Un foyer électrique mural qui libère l’espace au sol. SaunaFab présente des versions de 6 et 8 kW.', '/elementor-2911/', '/wp-content/uploads/2024/10/Harvia-KIP-e1730485307261.jpg'],
            ['M3', 'Un foyer au bois avec porte vitrée et chargement frontal.', '/elementor-2911/', '/wp-content/uploads/2024/10/Harvia-M3-e1730485385497-199x300.jpeg'],
            ['M3 SL', 'Un foyer au bois à chargement depuis une pièce adjacente ou l’extérieur.', '/elementor-2911/'],
        ]],
        'accessoires' => ['sf-accessoires', 'Compléter votre sauna', [
            ['Appui-tête en bois', 'Un support pour la tête et la nuque sur le banc du sauna.', '/product/appui-tete/', '/wp-content/uploads/2024/10/461438436_2308098469535596_7459543548102236226_n-1024x768.jpg'],
            ['Kit de départ', 'Un ensemble avec seau, louche, thermomètre et hygromètre. Consultez la fiche pour vérifier le contenu exact.', '/product/kit-de-depart-sceau-louche-thermometre-hygrometre/', '/wp-content/uploads/2024/10/photo-1678988227223-45112511eca2-1024x683.jpg'],
            ['Lumière', 'Consultez la fiche de l’éclairage proposé pour le sauna.', '/product/lumiere/'],
            ['Porte-bûches', 'Gardez le bois à portée de main près de l’espace sauna.', '/product/porte-buche/'],
        ]],
    ];
    $subject = $attributes['sujet'];
    if (!isset($pages[$subject])) {
        return '';
    }

    [$id, $title, $cards] = $pages[$subject];
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--light" id="<?php echo esc_attr($id); ?>" aria-label="<?php echo esc_attr($title); ?>">
        <div class="sf-width sf-saunas__stack">
            <h2 class="sf-title"><?php echo esc_html($title); ?></h2>
            <div class="sf-saunas__models sf-catalogue__cards">
                <?php foreach ($cards as $card) : ?>
                    <?php [$name, $description, $path, $photo] = array_pad($card, 4, null); ?>
                    <article class="sf-saunas__model">
                        <?php if ($photo) : ?>
                            <img class="sf-catalogue__photo" src="<?php echo esc_url(home_url($photo)); ?>" alt="" loading="lazy" decoding="async">
                        <?php endif; ?>
                        <div class="sf-saunas__card-body">
                            <h3><?php echo esc_html($name); ?></h3>
                            <p><?php echo esc_html($description); ?></p>
                            <a class="sf-button sf-button-blue" href="<?php echo esc_url(home_url($path)); ?>" aria-label="<?php echo esc_attr(($subject === 'foyers' ? 'Se renseigner sur ' : 'Découvrir ') . $name); ?>"><?php echo $subject === 'foyers' ? 'Se renseigner' : 'Découvrir'; ?> <span aria-hidden="true">→</span></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
