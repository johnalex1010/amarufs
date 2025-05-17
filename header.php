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

    <?php
    $options = get_theme_mod('ama_settings');

    //Logo
    if (!empty($options['logo'])) {
        $logo = $options['logo'];
    }
    ?>

    <!-- NAV -->
    <header id="header" class="header">
        <nav class="nav row">
            <div class="logo" id="logo">
                <!-- <img src="<?php echo $logo ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"> -->
                <img src="<?php echo IMAGES ?>/logo.webp" alt="Logo Amaru FS Inmobiliaria" title="Logo Amaru FS Inmobiliaria">
            </div>

            <!-- Menú -->
            <div class="content_nav">
                <div class="icon">
                    <span class="fa-solid fa-bars"></span>
                    <span class="fa-solid fa-xmark"></span>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'nav_items', //La clase del menú para css
                    'menu_id' => 'idmenu', //EL ID del menú para css/javascript
                )); ?>
                <div class="cta">
                    <a id="cta_menu_whatsapp" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" target="_blank" title="Whastapp"><i class="fa-brands fa-whatsapp"></i> Contáctanos</a>
                </div>
            </div>


        </nav>
    </header>

    <!-- Solo se muestra en las internas -->
    <?php if (!is_front_page()) : ?>
        <!-- header_secciones -->
        <section class="header_secciones">
            <?php if (!is_single()) : ?>
                <header class="header_secciones_header">
                    <div class="header_bg"></div>
                    <h1 class="wp-block-heading"><?php the_title(); ?></h1>
                    <?php if (is_page("inmuebles")) : ?>
                        <form action="" class="filtro_inmuebles">
                            <div>
                                <label for="Tipo">Tipo</label>
                                <select name="" id="Tipo">
                                    <option value="">Todos</option>
                                    <?php
                                    // Obtener el ID de la categoría padre llamada "tipo"
                                    $parent_category_id = get_cat_ID('tipo-inmueble');

                                    // Obtener todas las subcategorías de la categoría padre "tipo"
                                    $category_args = array(
                                        'child_of' => $parent_category_id,
                                    );

                                    $categories = get_categories($category_args);

                                    foreach ($categories as $category) {
                                        if ($category->count > 0 && $category->slug !== 'sin-categoria') {
                                            echo '<option value="' . $category->name . '">' . $category->name . '</option>';
                                        }
                                    }
                                    ?>


                                </select>
                            </div>
                            <div>
                                <label for="Inmueble">Inmueble</label>
                                <select name="" id="Inmueble">
                                    <option value="">Todos</option>
                                    <?php
                                    $tags = get_tags();
                                    foreach ($tags as $tag) {
                                        if ($tag->count > 0) {
                                            echo '<option value="' . $tag->name . '">' . $tag->name . '</option>';
                                        }
                                    }
                                    ?>
                                </select>


                            </div>
                            <button type="button" onclick="filtrar()">Filtrar <span class="fa-solid fa-magnifying-glass"></span></button>
                        </form>
                    <?php endif; ?>
                </header>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <!-- Boton Flotante -->
    <a id="cta_flotante_whatsapp" href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Whatsapp' target="_blank"><span class='fa-brands fa-whatsapp float_btn'></span></a>