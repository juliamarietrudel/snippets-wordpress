<?php
/** Shortcode: [saunafab_header]. Omit the opening tag when pasting into Code Snippets.
 * Load saunafab-variables.css before saunafab-header.css in WordPress. */
defined('ABSPATH') || exit;
add_shortcode('saunafab_header', function () {
    $id = wp_unique_id('sfh-');
    $logo_url = 'https://saunafab.ca/wp-content/uploads/2024/07/cropped-logo-saunafab.png';
    $groups = array(
        'Boutique' => array(
            'Sauna Cube' => '/product/nos-saunas-cube-copie/',
            'Sauna baril' => '/product/nos-sauna-baril/',
            'Douche' => '/product/douche-copie/',
            'Bain froid' => '/product/bain-froid-copie-2/',
        ),
        'Produits' => array(
            'Saunas' => '/saunas/',
            'Bains froids' => '/bains-froids/',
            'Douches' => '/douches/',
            'Foyers' => '/foyers-et-porte-buches/',
            'Accessoires' => '/accessoires/',
        ),
    );
    ob_start(); ?>
    <header class="sfh" id="<?php echo esc_attr($id); ?>">
        <div class="sfh__inner">
            <a class="sfh__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="SaunaFab — accueil">
                <img src="<?php echo esc_url($logo_url); ?>" alt="" width="64" height="64">
                <span class="sfh__wordmark">SaunaFab</span>
            </a>
            <button class="sfh__toggle" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr($id); ?>-nav" hidden>Menu <span aria-hidden="true">☰</span></button>
            <nav class="sfh__nav" id="<?php echo esc_attr($id); ?>-nav" aria-label="Navigation principale">
                <?php foreach ($groups as $label => $items) : ?>
                    <details class="sfh__dropdown">
                        <summary><?php echo esc_html($label); ?><svg class="sfh__chevron" viewBox="0 0 16 16" fill="none" aria-hidden="true" focusable="false"><path d="m4 6 4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></summary>
                        <ul class="sfh__submenu">
                            <?php foreach ($items as $text => $path) : ?>
                                <li><a href="<?php echo esc_url(home_url($path)); ?>"><?php echo esc_html($text); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </details>
                <?php endforeach; ?>
                <?php foreach (array_slice($groups['Boutique'], 0, 2, true) as $label => $path) : ?>
                    <a class="sfh__nav-link" href="<?php echo esc_url(home_url($path)); ?>"><?php echo esc_html($label); ?></a>
                <?php endforeach; ?>
                <a class="sfh__nav-link" href="<?php echo esc_url(home_url('/elementor-2911/')); ?>">Contact</a>
                <?php if (function_exists('wc_get_cart_url')) : ?>
                    <a class="sfh__cart" href="<?php echo esc_url(wc_get_cart_url()); ?>" aria-label="Voir le panier"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M2 3h3l3 13h11l3-9H6"/><circle cx="9" cy="21" r="1"/><circle cx="18" cy="21" r="1"/></svg></a>
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
        const mobile = window.matchMedia('(max-width: 980px)');
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
        root.addEventListener('focusout', event => {
            // Safari may leave relatedTarget empty while clicking a submenu link.
            if (event.relatedTarget && !root.contains(event.relatedTarget)) setOpen(false);
        });
        if (mobile.addEventListener) mobile.addEventListener('change', sync);
        else mobile.addListener(sync);
        sync();
    })();
    </script>
    <?php return ob_get_clean();
});
