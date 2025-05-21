<?php
// Hook global para insertar snippets al final del <body>
add_action('wp_footer', 'cargar_rich_snippets');

function cargar_rich_snippets()
{
    $templates_con_snippet = [
        'template-parts/template-servicios.php',
        'template-parts/template-lista-inmuebles.php'
    ];

    if (is_front_page() || (is_page() && is_page_template($templates_con_snippet))) {
        require get_stylesheet_directory() . '/includes/rich-snippets/rich-gobal.php';
    }

    // if (is_page_template('oferta-academica.php')) {
    //     require get_stylesheet_directory() . '/inc/rich-snippets/rich-oferta-academica.php';
    // }


}
