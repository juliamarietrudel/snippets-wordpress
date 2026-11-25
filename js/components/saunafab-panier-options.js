(() => {
    const cartSelector = '.sf-panier-v2, #sf-panier-v2';
    const nameSelector = '.woocommerce-cart-form__contents td.product-name';
    const processed = 'sf-cart-product-ready';

    function addDisclosures(cart) {
        for (const cell of cart.querySelectorAll(nameSelector)) {
            if (cell.classList.contains(processed)) continue;

            const metadata = cell.querySelector('dl.variation, ul.wc-item-meta, .wcpa_cart_meta');
            const subtotalCell = cell.closest('tr')?.querySelector(':scope > td.product-subtotal');
            const hasSubtotal = Boolean(subtotalCell?.textContent.trim());
            if (!metadata && !hasSubtotal) continue;

            const productLink = cell.querySelector(':scope > a[href]');
            // Royal Addons can print the product name as plain text for a hidden product.
            const nameNodes = [];
            if (!productLink) {
                for (const node of cell.childNodes) {
                    if (node === metadata || (metadata && node.contains(metadata))) break;
                    if (node.nodeType === Node.TEXT_NODE && node.textContent.trim()) {
                        nameNodes.push(node);
                    }
                }
            }

            const name = (productLink?.textContent || nameNodes.map((node) => node.textContent.trim()).join(' ')).trim();
            if (!name) continue;

            // Use native details so the product name works as a keyboard-accessible toggle.
            const disclosure = document.createElement('details');
            disclosure.className = 'sf-cart-product-options';
            const summary = document.createElement('summary');
            summary.textContent = name;
            cell.classList.add(processed);
            (productLink || nameNodes[0]).before(disclosure);
            disclosure.append(summary);
            if (metadata) disclosure.append(metadata);

            if (hasSubtotal) {
                // Move the formatted price, including currency and tax markup, into the disclosure.
                const subtotal = document.createElement('div');
                subtotal.className = 'sf-cart-product-subtotal';
                const label = document.createElement('span');
                label.textContent = subtotalCell.dataset.title || 'Sous-total';
                const amount = document.createElement('span');
                amount.append(...subtotalCell.childNodes);
                subtotal.append(label, amount);
                disclosure.append(subtotal);
                subtotalCell.hidden = true;
            }

            if (productLink) {
                disclosure.append(productLink);
                productLink.textContent = 'Voir la fiche produit';
                productLink.classList.add('sf-cart-product-link');
            } else {
                for (const node of nameNodes) node.remove();
            }
        }
    }

    function init() {
        for (const cart of document.querySelectorAll(cartSelector)) {
            if (cart.parentElement?.closest(cartSelector)) continue;

            addDisclosures(cart);
            // WooCommerce can replace the cart table after a quantity update.
            const observer = new MutationObserver(() => addDisclosures(cart));
            observer.observe(cart, { childList: true, subtree: true });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init, { once: true });
    } else {
        init();
    }
})();
