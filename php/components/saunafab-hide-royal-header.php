<?php
/**
 * Hide the Royal Addons header on selected WordPress pages.
 * In WPCode, use a PHP snippet with Auto Insert → Run Everywhere.
 */
defined('ABSPATH') || exit;

// Add WordPress page IDs here, separated by commas. An empty list hides nothing.
$saunafab_hide_header_page_ids = [2911];

add_action('wp_head', static function () use ($saunafab_hide_header_page_ids) {
    if (!$saunafab_hide_header_page_ids || !is_page($saunafab_hide_header_page_ids)) {
        return;
    }

    // Target the Royal Addons container identified in the Elementor markup.
    echo '<style id="saunafab-hide-royal-header">.elementor-element-2fd8c55 { display: none !important; }</style>' . "\n";
});
