<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ETDKJ2B5ZM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ETDKJ2B5ZM');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KD689NQ6');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php wp_head(); ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php
    if (is_single() && comments_open()) {
        wp_enqueue_script('comment-reply');
    }
    ?>

    <meta name="description" content="<?php echo esc_attr(get_the_excerpt()); ?>">
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD689NQ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- HEADER TOP -->
    <header id="header" class="header">
        <div class="row container_header">
            <!-- LOOG  -->
            <a href="<?php home_url() ?>" class="logo" id="logo">
                <img loading="lazy" src="<?php echo IMAGES ?>/logo.webp" alt="Logo Amaru FS Inmobiliaria" title="Logo Amaru FS Inmobiliaria">
            </a>

            <!-- NAV -->
            <nav class="nav">
                <div class="icon">
                    <span class="fa-solid fa-bars"></span>
                    <span class="fa-solid fa-xmark"></span>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'nav_items', //La clase del menú para css
                    'menu_id' => 'idmenu', //EL ID del menú para css/javascript
                )); ?>
            </nav>

            <!-- CTA y BUSCADOR -->
            <div class="search_cta">
                <!-- Buscador -->
                <?php get_search_form(); ?>

                <!-- CTA -->
                <a id="cta_menu_whatsapp" class="cta" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" target="_blank" title="Whastapp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <span>Contáctanos</span>
                </a>
            </div>
        </div>
    </header>


    <?php if (is_page() && !is_front_page()) : ?>
        <section class="header_secciones">
            <header class="header_secciones_header">

                <h1 class="wp-block-heading"><?php the_title(); ?></h1>



                <?php if (is_page("inmuebles")) : ?>
                    <form action="" class="filtro_inmuebles">
                        <div>
                            <label for="Tipo">Tipo</label>
                            <select name="tipo_inmueble" id="Tipo">
                                <option value="">Todos</option>
                                <?php
                                $parent_category_id = get_cat_ID('tipo-inmueble');
                                $categories = get_categories(['child_of' => $parent_category_id]);

                                foreach ($categories as $category) {
                                    if ($category->count > 0 && $category->slug !== 'sin-categoria') {
                                        echo '<option value="' . esc_attr($category->name) . '">' . esc_html($category->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label for="Inmueble">Inmueble</label>
                            <select name="inmueble_tag" id="Inmueble">
                                <option value="">Todos</option>
                                <?php
                                $tags = get_tags();
                                foreach ($tags as $tag) {
                                    if ($tag->count > 0) {
                                        echo '<option value="' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <button type="button" onclick="filtrar()">Filtrar <span class="fa-solid fa-magnifying-glass"></span></button>
                    </form>
                    <br>
                <?php endif; ?>

                <div class="breadcrumbs_header">
                    <div class="breadcrumbs">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<nav aria-label="breadcrumb"><ol class="breadcrumb">', '</ol></nav>');
                        }
                        ?>
                    </div>
                </div>
            </header>
        </section>
    <?php endif; ?>

    <?php if (is_404()) : ?>
        <section class="header_secciones">
            <header class="header_secciones_header">
                <h1 class="wp-block-heading">¡Ups! No encontramos lo que buscas...</h1>
                <div class="breadcrumbs_header">
                    <div class="breadcrumbs">
                        <?php
                        if (function_exists('yoast_breadcrumb')) {
                            yoast_breadcrumb('<nav aria-label="breadcrumb"><ol class="breadcrumb">', '</ol></nav>');
                        }
                        ?>
                    </div>
                </div>
            </header>
        </section>
    <?php endif; ?>




    <!-- Boton Flotante -->
    <a id="cta_flotante_whatsapp" href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Whatsapp' target="_blank"><span class='fa-brands fa-whatsapp float_btn'></span></a>