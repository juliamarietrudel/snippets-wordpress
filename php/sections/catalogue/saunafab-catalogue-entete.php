<?php
/** Reusable editorial heading. Select the page copy with the sujet attribute. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_catalogue_entete', static function ($attributes = []) {
    $attributes = shortcode_atts(['sujet' => 'boutique'], $attributes);
    $pages = [
        'boutique' => ['Boutique', 'Saunas et équipements pour aménager votre espace extérieur.', '#sf-catalogue', 'Voir les catégories'],
        'foyers' => ['Foyers pour sauna', 'Comparez les foyers électriques et au bois Harvia pour votre sauna.', '#sf-foyers', 'Comparer les foyers'],
        'accessoires' => ['Accessoires pour sauna', 'Appuis-tête, kits de départ et autres accessoires pour compléter votre sauna.', '#sf-accessoires', 'Voir les accessoires'],
        'bains-froids' => ['Bains froids', 'Découvrez le bain extérieur SaunaFab et les points à prévoir avant de l’installer.', '/product/bain-froid-copie-2/', 'Voir la fiche produit'],
    ];
    if (!isset($pages[$attributes['sujet']])) {
        return '';
    }

    [$title, $description, $destination, $label] = $pages[$attributes['sujet']];
    $url = str_starts_with($destination, '#') ? $destination : home_url($destination);
    ob_start();
    ?>
    <section class="sf-section-block sf-saunas sf-saunas--dark" aria-label="<?php echo esc_attr($title); ?>">
        <div class="sf-width sf-saunas__heading sf-catalogue__heading">
            <h1 class="sf-title"><?php echo esc_html($title); ?></h1>
            <p><?php echo esc_html($description); ?></p>
            <div class="sf-saunas__actions">
                <a class="sf-button sf-saunas__primary" href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?> <span aria-hidden="true">→</span></a>
                <a class="sf-button sf-button-outline" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Parler à l’équipe</a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
});
