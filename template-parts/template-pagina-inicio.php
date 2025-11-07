<?php /*Template Name: Página de Incio*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- Structured Data - WebSite -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
        "url": "<?php echo esc_url(home_url('/')); ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "<?php echo esc_url(home_url('/')); ?>?s={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
</script>

<!-- inicio -->
<h1 class="hide">Amaru FS Inmobiliaria - Gestión de Propiedades, Ventas y Arriendos</h1>
<section class="inicio" role="banner" aria-label="Banner principal">
    <?php
    // Obtiene la URL de la imagen destacada del areas-practica
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <header style="background-image: url('<?php echo IMAGES ?>/banner.avif');">
        <h2>El proceso de arrendamiento <strong>es fácil y sin estrés</strong></h2>
        <p>¡Ven y descubre las opciones que tenemos para ti!</p>
        <a href="inmuebles/" class="boton" title="Ver todos los tipos de vivienda disponibles" aria-label="Conoce nuestros tipos de vivienda">¡Conoce nuestros tipos de vivienda!</a>
    </header>

    <span class="fa-solid fa-computer-mouse fa-bounce mouse"></span>
</section>

<!-- Items -->
<section class="items" role="region" aria-label="Nuestros servicios">
    <!-- Structured Data - Services -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "itemListElement": [{
                    "@type": "Service",
                    "name": "Gestión de Propiedades",
                    "description": "Servicio completo de gestión de propiedades que garantiza tranquilidad y rentabilidad a los propietarios",
                    "provider": {
                        "@type": "RealEstateAgent",
                        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
                    },
                    "serviceType": "Property Management"
                },
                {
                    "@type": "Service",
                    "name": "Ventas de Inmuebles",
                    "description": "Conectamos vendedores con compradores potenciales de manera eficiente y transparente",
                    "provider": {
                        "@type": "RealEstateAgent",
                        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
                    },
                    "serviceType": "Real Estate Sales"
                },
                {
                    "@type": "Service",
                    "name": "Servicios de Arriendo",
                    "description": "Servicio integral de arriendo desde la promoción del inmueble hasta la selección de arrendatarios confiables",
                    "provider": {
                        "@type": "RealEstateAgent",
                        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
                    },
                    "serviceType": "Property Rental"
                }
            ]
        }
    </script>

    <article class="item" itemscope itemtype="https://schema.org/Service">
        <span class="fa-solid fa-user-tie icon" aria-hidden="true"></span>
        <h2 itemprop="name">GESTIÓN DE PROPIEDADES</h2>
        <p itemprop="description">En nuestra inmobiliaria ofrecemos un servicio completo de gestión de propiedades que garantiza tranquilidad y rentabilidad a los propietarios.</p>
    </article>
    <article class="item" itemscope itemtype="https://schema.org/Service">
        <span class="fa-solid fa-building icon" aria-hidden="true"></span>
        <h2 itemprop="name">VENTAS DE INMUEBLES</h2>
        <p itemprop="description">Nos dedicamos a conectar vendedores con compradores potenciales de manera eficiente y transparente.</p>
    </article>
    <article class="item" itemscope itemtype="https://schema.org/Service">
        <span class="fa-solid fa-house-circle-check icon" aria-hidden="true"></span>
        <h2 itemprop="name">SERVICIOS DE ARRIENDO</h2>
        <p itemprop="description">Ofrecemos un servicio integral de arriendo que abarca todo el proceso, desde la promoción del inmueble hasta la selección de arrendatarios confiables.</p>
    </article>
</section>

<!-- Info Left-->
<section class="info" role="region" aria-label="Experiencia y conocimiento">
    <article class="info_content">
        <div class="info_text">
            <div class="info_text_title">
                <h2>Experiencia Local y Conocimiento del Mercado</h2>
            </div>
            <div class="info_text_parrafo">
                <p>Entendemos las <strong>tendencias del mercado</strong>, los factores económicos y sociales que influyen en los precios de las propiedades y las <strong>preferencias de los clientes</strong> en distintas áreas.</p>
                <p>Este conocimiento nos permite asesorar a nuestros clientes no solo sobre el valor actual de <strong>sus propiedades</strong>, sino también sobre las perspectivas a largo plazo de sus inversiones, asegurando decisiones bien informadas y rentables.</p>
            </div>
        </div>
        <div class="info_image">
            <img loading="lazy" src="<?php echo IMAGES ?>/item1.svg" alt="Experiencia Local y Conocimiento del Mercado" title="Experiencia Local y Conocimiento del Mercado">
        </div>
    </article>
</section>

<!-- Info Right-->
<section class="info" role="region" aria-label="Atención personalizada">
    <article class="info_content">
        <div class="info_text">
            <div class="info_text_title">
                <h2>Atención Personalizada y Servicios Integrados</h2>
            </div>
            <div class="info_text_parrafo">
                <p>Nos destacamos por ofrecer una <strong>atención personalizada</strong> a cada uno de nuestros clientes, adaptando nuestros servicios a sus necesidades específicas.</p>
                <p>Desde la <strong>búsqueda de la propiedad</strong> ideal hasta el cierre de la transacción, proporcionamos un soporte continuo y personalizado.</p>
                <p>Además, integramos servicios adicionales como <strong>gestión de propiedades</strong> y remodelaciones, lo que nos permite ofrecer una solución completa en un solo lugar, simplificando el proceso y reduciendo el estrés para nuestros clientes.</p>
            </div>
        </div>
        <div class="info_image">
            <img loading="lazy" src="<?php echo IMAGES ?>/item2.svg" alt="Atención Personalizada y Servicios Integrados" title="Atención Personalizada y Servicios Integrados">
        </div>
    </article>
</section>

<!-- últimos Inmuebles -->
<section class="inmuebles row" role="region" aria-label="Últimas propiedades">
    <div class="inmuebles_title">
        <h2>Últimas propiedades</h2>
    </div>

    <?php
    // Preparar datos para structured data de propiedades
    $propiedades_data = array();
    ?>

    <section class="propiedades" itemscope itemtype="https://schema.org/ItemList">
        <?php
        // Obtener las últimas 4 subpáginas de http://localhost/amarufs/inmuebles/
        $args = array(
            'post_type'         => 'page',
            'post_parent'       => get_page_by_path('inmuebles')->ID,
            'posts_per_page'    => 4,
            'orderby'           => 'date',
            'order'             => 'DESC'
        );
        $subpaginas = new WP_Query($args);

        if ($subpaginas->have_posts()) :
            $position = 1;
            while ($subpaginas->have_posts()) : $subpaginas->the_post();
                $imagen_destacada = get_the_post_thumbnail(get_the_ID(), 'medium', array(
                    'title'   => get_the_title(),
                    'alt'     => get_the_title() . ' - Imagen de la propiedad',
                    'loading' => 'lazy',
                ));

                // Recopilar datos para structured data
                $propiedades_data[] = array(
                    'position' => $position,
                    'name' => get_the_title(),
                    'url' => get_permalink(),
                    'image' => get_the_post_thumbnail_url(get_the_ID(), 'large'),
                    'description' => get_the_excerpt()
                );
                $position++;
                if (have_rows('grupo_detalle')) :
                    while (have_rows('grupo_detalle')) : the_row();

        ?>
                        <article class="propiedad" itemscope itemtype="https://schema.org/Accommodation" itemprop="itemListElement">
                            <?php if ($imagen_destacada) : ?>
                                <div class="propiedad_imagen">
                                    <?php echo $imagen_destacada; ?>
                                </div>
                            <?php endif; ?>
                            <div class="propiedad_text">
                                <?php
                                // Obtener las categorías
                                $categorias = get_the_category();

                                // Obtener las etiquetas
                                $tags = get_the_tags();
                                ?>
                                <meta itemprop="url" content="<?php echo esc_url(get_permalink()); ?>">
                                <?php if (get_the_post_thumbnail_url(get_the_ID(), 'large')) : ?>
                                    <meta itemprop="image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
                                <?php endif; ?>

                                <div class="tag">
                                    <?php if (!empty($categorias)) : ?>
                                        <?php foreach ($categorias as $categoria) : ?>
                                            <a href="<?php echo get_category_link($categoria->term_id); ?>" title="Ver propiedades de tipo <?php echo esc_attr($categoria->name); ?>" class="<?php echo $categoria->name; ?>" aria-label="Categoría: <?php echo esc_attr($categoria->name); ?>"><?php echo $categoria->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php if (!empty($tags)) : ?>
                                        <?php foreach ($tags as $tag) : ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>" title="Ver propiedades con etiqueta <?php echo esc_attr($tag->name); ?>" class="<?php echo $tag->name; ?>" aria-label="Etiqueta: <?php echo esc_attr($tag->name); ?>"><?php echo $tag->name; ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <h3 class="propiedad_titulo" itemprop="name"><?php echo get_the_title(); ?></h3>
                                <p itemprop="description"><?php echo get_the_excerpt(); ?></p>

                                <ul>
                                    <li>
                                        <span class="<?php the_sub_field('acordeon_detalle_icon_1'); ?>"></span>
                                        <p><?php the_sub_field('acordeon_detalle_item_texto_1'); ?></p>
                                    </li>
                                    <li>
                                        <span class="<?php the_sub_field('acordeon_detalle_icon_2'); ?>"></span>
                                        <p><?php the_sub_field('acordeon_detalle_item_texto_2'); ?></p>
                                    </li>
                                    <li>
                                        <span class="<?php the_sub_field('acordeon_detalle_icon_3'); ?>"></span>
                                        <p><?php the_sub_field('acordeon_detalle_item_texto_3'); ?></p>
                                    </li>

                                    <li>
                                        <span class="<?php the_sub_field('acordeon_detalle_icon_4'); ?>"></span>
                                        <p><?php the_sub_field('acordeon_detalle_item_texto_4'); ?></p>
                                    </li>
                                </ul>

                                <a class="propiedad_cta" href="<?php echo get_permalink(); ?>" title="Ver detalles de <?php echo esc_attr(get_the_title()); ?>" aria-label="Ver detalles completos de <?php echo esc_attr(get_the_title()); ?>">Mirar propiedad <span class="fa-solid fa-house" aria-hidden="true"></span></a>
                            </div>
                        </article>
        <?php
                    endwhile;
                endif;
            endwhile;
            wp_reset_postdata(); // Restaurar datos de la consulta original
        endif;
        ?>

        <?php if (!empty($propiedades_data)) : ?>
            <!-- Structured Data - Property Listings -->
            <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "ItemList",
                    "name": "Últimas Propiedades Disponibles",
                    "description": "Listado de las propiedades más recientes disponibles para arriendo o venta",
                    "numberOfItems": <?php echo count($propiedades_data); ?>,
                    "itemListElement": [
                        <?php foreach ($propiedades_data as $index => $propiedad) : ?> {
                                "@type": "ListItem",
                                "position": <?php echo $propiedad['position']; ?>,
                                "item": {
                                    "@type": "Accommodation",
                                    "name": "<?php echo esc_js($propiedad['name']); ?>",
                                    "url": "<?php echo esc_url($propiedad['url']); ?>",
                                    "description": "<?php echo esc_js($propiedad['description']); ?>"
                                    <?php if (!empty($propiedad['image'])) : ?>,
                                        "image": "<?php echo esc_url($propiedad['image']); ?>"
                                    <?php endif; ?>
                                }
                            }
                            <?php echo ($index < count($propiedades_data) - 1) ? ',' : ''; ?>
                        <?php endforeach; ?>
                    ]
                }
            </script>
        <?php endif; ?>
    </section>


    <a href="inmuebles/" class="btn_mas_inmuebles" title="Ver todos los tipos de inmuebles disponibles" aria-label="Ver más tipos de inmuebles">Ver más tipos de inmuebles <span class="fa-solid fa-house" aria-hidden="true"></span></a>
</section>



<!-- //Footer -->
<?php get_footer(); ?>