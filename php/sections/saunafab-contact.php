<?php
$saunafab_contact_shortcode = static function ($attributes = []) {
    // A page that already has the custom menu can opt out with header="no".
    $attributes = shortcode_atts(['header' => 'yes'], $attributes);
    $address = '250 route 139, porte 3, local 5, Acton Vale, Québec J0H 1A0';
    $directions_url = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($address);

    $title_id = wp_unique_id('sf-contact-page-title-');

    ob_start();
    ?>
    <?php if ($attributes['header'] !== 'no' && shortcode_exists('saunafab_header')) : ?>
        <div class="sf-contact-header">
            <?php echo do_shortcode('[saunafab_header]'); ?>
        </div>
    <?php endif; ?>
    <section class="sf-contact-content" aria-labelledby="<?php echo esc_attr($title_id); ?>">
        <p class="sf-contact-kicker">Nous joindre</p>
        <h1 class="sf-contact-title" id="<?php echo esc_attr($title_id); ?>">Parlons de<br><em>votre projet.</em></h1>
        <p class="sf-contact-intro">Vous hésitez entre deux modèles ou vous avez une question sur l’installation? Thomas et son équipe vous aident à trouver une configuration adaptée à votre espace.</p>
        <address class="sf-contact-details">
            <a href="tel:+18193145586">819 314-5586</a>
            <a href="mailto:saunafab@gmail.com">saunafab@gmail.com</a>
            <p>250 route 139, porte 3, local 5<br>Acton Vale, Québec J0H 1A0<br>Visites sur rendez-vous</p>
            <a class="sf-contact-directions" href="<?php echo esc_url($directions_url); ?>">Voir l’itinéraire</a>
        </address>
    </section>
    <?php
    return ob_get_clean();
};

// Keep both spellings available for pages that already use either shortcode.
add_shortcode('saunafab_contact', $saunafab_contact_shortcode);
add_shortcode('saunafab-contact', $saunafab_contact_shortcode);


// The modular contact block leaves header placement to the page builder.
add_shortcode('saunafab_coordonnees', static function () use ($saunafab_contact_shortcode) {
    return $saunafab_contact_shortcode(['header' => 'no']);
});
