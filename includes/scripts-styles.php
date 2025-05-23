<?php

/*
* Amaru FS Inmobiliaria
* @package Amaru FS Inmobiliaria
* @subpackage Amaru FS Inmobiliaria
* @since 1.0
*/


/*
Cargando estilos
*/

function ama_theme_styles()
{

    $theme_version = wp_get_theme()->get('Version');

    // Registrando estilos
    wp_enqueue_style('ama_styles_fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles', get_template_directory_uri() . '/assets/styles/base/general.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles_header', get_template_directory_uri() . '/assets/styles/layout/header.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles_breadcrumb', get_template_directory_uri() . '/assets/styles/components/breadcrumb.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles_menu', get_template_directory_uri() . '/assets/styles/layout/menu.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles_buscador', get_template_directory_uri() . '/assets/styles/components/buscador.min.css', false, $theme_version);
    wp_enqueue_style('ama_styles_footer', get_template_directory_uri() . '/assets/styles/layout/footer.min.css', false, $theme_version);

    if (is_front_page()) {
        wp_enqueue_style('inicio_style', get_template_directory_uri() . '/assets/styles/pages/inicio.min.css', false, $theme_version);
        wp_enqueue_style('card_style', get_template_directory_uri() . '/assets/styles/components/card.min.css', false, $theme_version);
        wp_enqueue_style('tags_style', get_template_directory_uri() . '/assets/styles/components/tags.min.css', false, $theme_version);
    }

    if (is_page_template('template-parts/template-lista-inmuebles.php')) {
        wp_enqueue_style('lista-inmueble-style', get_template_directory_uri() . '/assets/styles/components/filtro.min.css', false, $theme_version);
        wp_enqueue_style('card_style', get_template_directory_uri() . '/assets/styles/components/card.min.css', false, $theme_version);
        wp_enqueue_style('tags_style', get_template_directory_uri() . '/assets/styles/components/tags.min.css', false, $theme_version);
    }
    if (is_page_template('template-parts/template-inmueble.php')) {
        wp_enqueue_style('inmueble-style', get_template_directory_uri() . '/assets/styles/pages/inmueble.min.css', false, $theme_version);
        wp_enqueue_style('tags_style', get_template_directory_uri() . '/assets/styles/components/tags.min.css', false, $theme_version);
    }
    if (is_page_template('template-parts/template-servicios.php')) {
        wp_enqueue_style('servicios-style', get_template_directory_uri() . '/assets/styles/pages/servicios.min.css', false, $theme_version);
    }


    // BLOG
    if (is_single()) {
        wp_enqueue_style('singlePost-style', get_template_directory_uri() . '/assets/styles/pages/single.min.css', false, $theme_version);
    }
    if (is_home() || is_page('blog') || is_category() || is_tag() || is_search() || is_day() || is_month() || is_year() || is_author() || is_year()) {
        wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/styles/pages/blog.min.css', false, $theme_version);
    }

    if (is_archive()) {
        // wp_enqueue_style('archivePost-style', get_template_directory_uri() . '/assets/production/mincss/archivePost.min.css', false, $theme_version);
    }
    if (is_search()) {
        // wp_enqueue_style('search-style', get_template_directory_uri() . '/assets/production/mincss/search.min.css', false, $theme_version);
    }
    if (is_404()) {
        wp_enqueue_style('404-style', get_template_directory_uri() . '/assets/styles/layout/404.min.css', false, $theme_version);
    }
}



add_action('wp_enqueue_scripts', 'ama_theme_styles');


/*
Cargando scripts
*/

function ama_theme_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    // Registrando scripts
    wp_register_script('ama_scripts', get_template_directory_uri() . '/assets/js/dist/scripts.min.js', false, $theme_version, true);

    // Cola de scripts
    wp_enqueue_script('ama_scripts_aos');
    wp_enqueue_script('ama_scripts');

    if (is_page_template('template-parts/template-lista-inmuebles.php')) {
        wp_enqueue_script('filtro-js', get_template_directory_uri() . '/assets/js/dist/filtro-inmuebles.min.js', false, $theme_version, true);

        // Configura los scripts para que se carguen de forma asíncrona
        wp_script_add_data('filtro-js', 'async', true);
    }
    if (is_page_template('template-parts/template-inmueble.php')) {
        wp_enqueue_script('inmueble-js', get_template_directory_uri() . '/assets/js/dist/inmueble.min.js', false, $theme_version, true);

        // Configura los scripts para que se carguen de forma asíncrona
        wp_script_add_data('inmueble-js', 'async', true);
    }
}

add_action('wp_enqueue_scripts', 'ama_theme_scripts');



//------------------------
// INICIO SCROLL INFINITE
//------------------------
// En el archivo functions.php
function enqueue_infinite_scroll_script()
{
    if (is_page_template('template-parts/blog.php')) {
        wp_enqueue_script('infinite-scroll', get_template_directory_uri() . '/assets/js/dist/infinite-scroll.min.js', array('jquery'), null, true);
        wp_localize_script('infinite-scroll', 'ajax_params', array(
            'ajax_url' => admin_url('admin-ajax.php'),
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_infinite_scroll_script');


function loadmore_ajax_handler()
{
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 8, // Mantener la consistencia con el número de posts inicial
        'paged' => $_POST['page'] + 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <article class="blog_card">
                <div class="blog_item_image">
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id($post->ID);
                        $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                        echo '<img src="' . esc_url(get_the_post_thumbnail_url($post->ID, 'full')) . '" alt="' . esc_attr($alt) . '" title="' . esc_attr($alt) . '">';
                    }
                    ?>
                </div>
                <div class="blog_item_text">
                    <div class="blog_item_text_title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="blog_item_text_paragraph">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="blog_item_text_link">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="boton">Leer más... <span class="fa-solid fa-book-open-reader"></span></a>
                    </div>
                </div>
            </article>
<?php endwhile;
    endif;
    wp_reset_postdata();
    die();
}


add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');


function infinite_scroll_params()
{
    global $wp_query;

    // Sólo ejecutar en la plantilla de scroll infinito
    if (is_page_template('template-parts/blog.php')) {
        wp_localize_script('infinite-scroll', 'infinite_scroll_params', array(
            'posts' => json_encode($wp_query->query_vars),
            'current_page' => max(1, get_query_var('paged')),
            'max_page' => $wp_query->max_num_pages
        ));
    }
}
add_action('wp_enqueue_scripts', 'infinite_scroll_params');

//------------------------
// FIN SCROLL INFINITE
//------------------------
