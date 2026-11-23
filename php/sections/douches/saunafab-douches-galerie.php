<?php
/** Douches gallery using the same carousel as the Saunas page. */
defined('ABSPATH') || exit;

add_shortcode('saunafab_douches_galerie', static function () {
    $media_base = home_url('/wp-content/uploads/2026/');
    $photos = [
        [$media_base . '11/douche-1.png', 'Douche extérieure SaunaFab, première vue'],
        [$media_base . '11/douche-2.png', 'Douche extérieure SaunaFab, deuxième vue'],
        [$media_base . '10/sauna-square-edited.png', 'Sauna SaunaFab en extérieur'],
    ];
    $id = wp_unique_id('sf-douches-galerie-');

    ob_start();
    ?>
    <section class="sf-sauna-gallery" id="<?php echo esc_attr($id); ?>" aria-label="Galerie de douches extérieures">
        <div class="sf-sauna-gallery__controls" hidden>
            <button type="button" data-step="-1" aria-controls="<?php echo esc_attr($id); ?>-photos" aria-label="Photo précédente"><span aria-hidden="true">←</span></button>
            <button type="button" data-step="1" aria-controls="<?php echo esc_attr($id); ?>-photos" aria-label="Photo suivante"><span aria-hidden="true">→</span></button>
        </div>
        <ul class="sf-sauna-gallery__track" id="<?php echo esc_attr($id); ?>-photos" tabindex="0" aria-label="Photos de douches et de saunas">
            <?php foreach ($photos as [$photo_url, $description]) : ?>
                <li><img src="<?php echo esc_url($photo_url); ?>" alt="<?php echo esc_attr($description); ?>" loading="lazy" decoding="async"></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <script>
    (() => {
        const gallery = document.getElementById(<?php echo wp_json_encode($id); ?>);
        if (!gallery) return;

        const track = gallery.querySelector('.sf-sauna-gallery__track');
        const controls = gallery.querySelector('.sf-sauna-gallery__controls');
        const photos = [...track.children];
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        let scrollTimer;
        let currentPhoto = 0;

        // Buffer both ends with decorative copies so wrapping has no visible jump.
        function copyPhoto(photo) {
            const copy = photo.cloneNode(true);
            copy.setAttribute('aria-hidden', 'true');
            copy.querySelector('img').alt = '';
            return copy;
        }

        track.prepend(...photos.map(copyPhoto));
        track.append(...photos.map(copyPhoto));

        function photoWidth() {
            return photos[0].getBoundingClientRect().width;
        }

        function snapToOriginal() {
            const width = photoWidth();
            if (!width) return;
            const index = Math.round(track.scrollLeft / width) - photos.length;
            currentPhoto = (index % photos.length + photos.length) % photos.length;
            if (index !== currentPhoto) {
                track.scrollLeft = (photos.length * photoWidth()) + currentPhoto * width;
            }
        }

        track.scrollLeft = (photos.length * photoWidth());
        track.addEventListener('scroll', () => {
            clearTimeout(scrollTimer);
            scrollTimer = setTimeout(snapToOriginal, 140);
        }, { passive: true });
        window.addEventListener('resize', () => {
            track.scrollLeft = (photos.length * photoWidth()) + currentPhoto * photoWidth();
        });

        controls.addEventListener('click', (event) => {
            const button = event.target.closest('button[data-step]');
            if (!button) return;

            const width = photoWidth();
            if (!width) return;
            const position = Math.round(track.scrollLeft / width) + Number(button.dataset.step);
            track.scrollTo({
                left: position * width,
                behavior: reducedMotion.matches ? 'instant' : 'smooth',
            });
        });

        controls.hidden = false;
    })();
    </script>
    <?php
    return ob_get_clean();
});
