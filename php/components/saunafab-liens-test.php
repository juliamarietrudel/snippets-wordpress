<?php
/** Route SaunaFab shortcode links between the test pages without changing the public pages. */
defined('ABSPATH') || exit;

add_filter('do_shortcode_tag', static function ($output, $tag) {
    if (!str_starts_with($tag, 'saunafab_') && $tag !== 'saunafab-contact') {
        return $output;
    }

    // Only test pages and the four WooCommerce product copies use test destinations.
    $test_pages = [2943, 2992, 3096, 3116, 3140, 3152, 3157, 3166, 3201];
    $product_copies = [
        '/product/nos-saunas-cube' => '/product/nos-saunas-cube-copie/',
        '/product/sauna-baril-82-pouces-4-places' => '/product/nos-sauna-baril/',
        '/product/douche' => '/product/douche-copie/',
        '/product/bain-froid' => '/product/bain-froid-copie-2/',
    ];
    $page_id = get_queried_object_id();
    $is_product_copy = is_singular('product')
        && in_array('/product/' . get_post_field('post_name', $page_id) . '/', $product_copies, true);
    if ((!is_page($test_pages) && !$is_product_copy) || !class_exists('WP_HTML_Tag_Processor')) {
        return $output;
    }

    $destinations = [
        '/' => '/test-accueil/',
        '/elementor-2911' => '/test-contact/',
        '/saunas' => '/test-sauna/',
        '/about-us' => '/test-sauna/',
        '/bains-froids' => '/test-bain-froid/',
        '/douches' => '/test-douche/',
        '/foyers-et-porte-buches' => '/test-foyer/',
        '/accessoires' => '/test-accessoire/',
        '/panier-saunafab' => '/test-cart/',
        '/cart' => '/test-cart/',
    ] + $product_copies;
    $site_host = wp_parse_url(home_url('/'), PHP_URL_HOST);
    $html = new WP_HTML_Tag_Processor($output);
    while ($html->next_tag('a')) {
        $href = $html->get_attribute('href');
        if (!is_string($href) || $href === '') {
            continue;
        }

        // The Bain froid design page has no purchase form to scroll to.
        if ($page_id === 3116 && $href === '#sf-bain-froid-achat') {
            $html->set_attribute('href', home_url($product_copies['/product/bain-froid']));
            continue;
        }

        $url = wp_parse_url($href);
        if (!$url || ($url['host'] ?? $site_host) !== $site_host || isset($url['query'])) {
            continue;
        }
        $path = $url['path'] ?? '';
        if (!str_starts_with($path, '/')) {
            continue;
        }

        $destination = $destinations[rtrim($path, '/') ?: '/'] ?? null;
        if ($destination !== null) {
            $fragment = isset($url['fragment']) ? '#' . $url['fragment'] : '';
            $html->set_attribute('href', home_url($destination) . $fragment);
        }
    }

    return $html->get_updated_html();
}, 10, 2);
