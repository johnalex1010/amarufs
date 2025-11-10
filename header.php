<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script async>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Preconnect para optimización de carga -->
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://api.whatsapp.com">

    <?php wp_head(); ?>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo esc_url(get_permalink()); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php
    if (is_single() && comments_open()) {
        wp_enqueue_script('comment-reply');
    }

    // Variables para SEO
    $site_name = get_bloginfo('name');
    $site_description = get_bloginfo('description');
    $page_title = is_front_page() ? $site_name : wp_get_document_title();
    $page_description = '';
    $page_image = get_template_directory_uri() . '/images/logo.webp';
    $page_keywords = '';

    // Keywords base para el sitio
    $base_keywords = 'inmobiliaria, bienes raíces, propiedades, inmuebles, venta, arriendo, Amaru FS';

    if (is_singular()) {
        $page_description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30, '...');
        if (has_post_thumbnail()) {
            $page_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
        }

        // Obtener keywords de categorías y tags
        $categories = get_the_category();
        $tags = get_the_tags();
        $keywords_array = [];

        if ($categories) {
            foreach ($categories as $category) {
                $keywords_array[] = $category->name;
            }
        }
        if ($tags) {
            foreach ($tags as $tag) {
                $keywords_array[] = $tag->name;
            }
        }

        $page_keywords = !empty($keywords_array) ? implode(', ', $keywords_array) . ', ' . $base_keywords : $base_keywords;
    } else {
        $page_description = $site_description;
        $page_keywords = $base_keywords;
    }
    ?>

    <!-- Meta Description -->
    <meta name="description" content="<?php echo esc_attr($page_description); ?>">
    <meta name="keywords" content="<?php echo esc_attr($page_keywords); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo is_singular('post') ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:title" content="<?php echo esc_attr($page_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($page_description); ?>">
    <meta property="og:image" content="<?php echo esc_url($page_image); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($page_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($page_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($page_image); ?>">

    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "RealEstateAgent",
            "name": "<?php echo esc_js($site_name); ?>",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "logo": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.webp'); ?>",
            "description": "<?php echo esc_js($site_description); ?>",
            "telephone": "+573158774545",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+573158774545",
                "contactType": "Customer Service",
                "availableLanguage": "Spanish"
            },
            "sameAs": [
                "https://api.whatsapp.com/send?phone=573158774545"
            ]
        }
    </script>

    <?php if (is_singular('post') || is_singular('page')) : ?>
        <!-- Structured Data - Article/WebPage -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "<?php echo is_singular('post') ? 'Article' : 'WebPage'; ?>",
                "headline": "<?php echo esc_js(get_the_title()); ?>",
                "description": "<?php echo esc_js($page_description); ?>",
                "image": "<?php echo esc_url($page_image); ?>",
                "datePublished": "<?php echo get_the_date('c'); ?>",
                "dateModified": "<?php echo get_the_modified_date('c'); ?>",
                "author": {
                    "@type": "Organization",
                    "name": "<?php echo esc_js($site_name); ?>"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "<?php echo esc_js($site_name); ?>",
                    "logo": {
                        "@type": "ImageObject",
                        "url": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.webp'); ?>"
                    }
                }
            }
        </script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD689NQ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager -->


    <!-- HEADER TOP -->
    <header id="header" class="header">
        <div class="row container_header">
            <!-- LOOG  -->
            <a href="<?php echo home_url() ?>" class="logo" id="logo" title="Amaru FS Inmobiliaria" aria-label="Amaru FS Inmobiliaria">
                <img loading="lazy" src="<?php echo IMAGES ?>/logo.webp" alt="Logo Amaru FS Inmobiliaria" title="Logo Amaru FS Inmobiliaria">
            </a>

            <!-- NAV -->
            <nav class="nav" role="navigation" aria-label="Menú principal">
                <div class="icon">
                    <span class="fa-solid fa-bars"></span>
                    <span class="fa-solid fa-xmark"></span>
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_class' => 'nav_items', //La clase del menú para css
                    'menu_id' => 'idmenu', //EL ID del menú para css/javascript
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )); ?>
            </nav>

            <!-- CTA y BUSCADOR -->
            <div class="search_cta">
                <!-- Buscador -->
                <?php get_search_form(); ?>

                <!-- CTA -->
                <a id="cta_menu_whatsapp" class="cta" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" target="_blank" rel="noopener noreferrer" title="Contactar por WhatsApp" aria-label="Contactar por WhatsApp">
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
    <a id="cta_flotante_whatsapp" href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Contactar por WhatsApp' target="_blank" rel="noopener noreferrer" aria-label="Botón flotante de WhatsApp"><span class='fa-brands fa-whatsapp float_btn' aria-hidden="true"></span></a>