<?php
/** Shortcode: [saunafab_header]. Omit the opening tag when pasting into Code Snippets.
 * Load index.css before saunafab-header.css in WordPress. */
defined('ABSPATH') || exit;
add_shortcode('saunafab_header', function () {
    $id = wp_unique_id('sfh-');
    // Use the site logo unless a Media Library URL is specified here.
    $logo_url = '';
    if (!$logo_url) {
        $logo_url = wp_get_attachment_image_url(get_theme_mod('custom_logo'), 'full');
    }
    $groups = array(
        'Boutique' => array(
            'Sauna baril' => '/product/sauna-baril-82-pouces-4-places/',
            'Sauna cube' => '/product/nos-saunas-cube/',
            'Bain froid' => '/product/bain-froid/',
            'Douches' => '/douches/',
        ),
        'Informations sur les produits' => array(
            'Saunas' => '/about-us/',
            'Bains froids' => '/product/bain-froid/',
            'Douches' => '/douches/',
            'Foyers' => '/foyers-et-porte-buches/',
        ),
    );
    ob_start(); ?>
    <header class="sfh" id="<?php echo esc_attr($id); ?>">
        <div class="sfh__inner">
            <a class="sfh__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="SaunaFab — accueil">
                <?php if ($logo_url) : ?>
                    <img src="<?php echo esc_url($logo_url); ?>" alt="SaunaFab" width="80" height="80">
                <?php else : ?>
                    <span>SaunaFab</span>
                <?php endif; ?>
            </a>
            <button class="sfh__toggle" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr($id); ?>-nav" hidden>Menu <span aria-hidden="true">☰</span></button>
            <nav class="sfh__nav" id="<?php echo esc_attr($id); ?>-nav" aria-label="Navigation principale">
                <a class="sfh__nav-link" href="<?php echo esc_url(home_url('/')); ?>" <?php if (is_front_page()) echo 'aria-current="page"'; ?>>Accueil</a>
                <?php foreach ($groups as $label => $items) : ?>
                    <details class="sfh__dropdown">
                        <summary><?php echo esc_html($label); ?><span aria-hidden="true">⌄</span></summary>
                        <ul class="sfh__submenu">
                            <?php foreach ($items as $text => $path) : ?>
                                <li><a href="<?php echo esc_url(home_url($path)); ?>"><?php echo esc_html($text); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </details>
                <?php endforeach; ?>
                <a class="sfh__nav-link" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Contact</a>
                <form class="sfh__search" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <label class="sfh__sr" for="<?php echo esc_attr($id); ?>-search">Rechercher sur le site</label>
                    <input id="<?php echo esc_attr($id); ?>-search" type="search" name="s" placeholder="Rechercher…" required>
                    <button type="submit" aria-label="Lancer la recherche"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/></svg></button>
                </form>
                <?php if (function_exists('wc_get_cart_url')) : ?>
                    <a class="sfh__cart" href="<?php echo esc_url(wc_get_cart_url()); ?>" aria-label="Voir le panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M2 3h3l3 13h11l3-9H6"/><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/></svg><span class="sfh__sr">Panier</span></a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <script>
    (() => {
        // Scope each menu controller to its own header instance.
        const root = document.getElementById(<?php echo wp_json_encode($id); ?>);
        if (!root) return;
        const toggle = root.querySelector('.sfh__toggle');
        const nav = root.querySelector('.sfh__nav');
        const mobile = window.matchMedia('(max-width: 1100px)');
        const dropdowns = [...root.querySelectorAll('details')];
        function closeDropdowns() { dropdowns.forEach(el => el.open = false); }
        function setOpen(open) {
            toggle.setAttribute('aria-expanded', String(open));
            nav.hidden = mobile.matches && !open;
            if (!open) closeDropdowns();
        }
        function sync() {
            const focused = nav.contains(document.activeElement);
            toggle.hidden = !mobile.matches;
            setOpen(false);
            if (mobile.matches && focused) toggle.focus();
        }
        toggle.addEventListener('click', () => setOpen(toggle.getAttribute('aria-expanded') !== 'true'));
        root.addEventListener('keydown', event => {
            if (event.key !== 'Escape') return;
            const opened = dropdowns.find(el => el.open);
            if (opened) { opened.open = false; opened.querySelector('summary').focus(); }
            else if (mobile.matches && !nav.hidden) { setOpen(false); toggle.focus(); }
        });
        dropdowns.forEach(el => el.addEventListener('toggle', () => {
            if (el.open) dropdowns.forEach(other => { if (other !== el) other.open = false; });
        }));
        document.addEventListener('click', event => {
            if (!root.contains(event.target)) setOpen(false);
        });
        root.addEventListener('focusout', () => {
            setTimeout(() => { if (!root.contains(document.activeElement)) setOpen(false); }, 0);
        });
        if (mobile.addEventListener) mobile.addEventListener('change', sync);
        else mobile.addListener(sync);
        sync();
    })();
    </script>
    <?php return ob_get_clean();
});
