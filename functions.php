<?php
add_theme_support('post-thumbnails');

the_post_thumbnail('thumbnail'); // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium'); // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large'); // Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail('large'); // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full'); // Original image resolution (unmodified)
the_post_thumbnail(array(100, 100)); // Other resolutions (height, width)
function esjd_enqueue_style()
{
    wp_enqueue_style(
        'header',
        get_parent_theme_file_uri('css/header.css')
    );
    wp_enqueue_style(
        'formularios',
        get_parent_theme_file_uri('css/formularios.css')
    );
    wp_enqueue_style(
        'index',
        get_parent_theme_file_uri('css/index.css')
    );
    wp_enqueue_style(
        'profesional-card',
        get_parent_theme_file_uri('css/profesional-card.css')
    );
    wp_enqueue_style(
        'card-actividad',
        get_parent_theme_file_uri('css/card-actividad.css')
    );
    wp_enqueue_style(
        'escuela',
        get_parent_theme_file_uri('css/escuela.css')
    );
    wp_enqueue_style(
        'style',
        get_parent_theme_file_uri('style.css')
    );
    wp_enqueue_style(
        'contacto_admision',
        get_parent_theme_file_uri('css/contacto_admision.css')
    );
    wp_enqueue_script(
        'navbar',
        get_parent_theme_file_uri('js/header.js')
    );
    if (is_page('escuela')) {
        wp_enqueue_script(
            'modalredes',
            get_parent_theme_file_uri('js/modalredes.js')
        );
    }
}
add_action('wp_enqueue_scripts', 'esjd_enqueue_style');

?>