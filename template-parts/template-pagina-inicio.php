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
<section class="inicio" role="banner" aria-label="Banner principal">
    <?php
    // Obtiene la URL de la imagen destacada del areas-practica
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <header style="background-image: url('<?php echo IMAGES ?>/banner.avif');">
        <h1>Compra tu CASA en Bogotá</h1>
        <p>Nos encargamos de todo el proceso para que tomes decisiones seguras.</p>
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
                    "name": "Ventas de Inmuebles",
                    "description": "Nos encargamos del proceso completo, desde la promoción hasta la firma.",
                    "provider": {
                        "@type": "RealEstateAgent",
                        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
                    },
                    "serviceType": "Real Estate Sales"
                },
                {
                    "@type": "Service",
                    "name": "Administración de propiedades",
                    "description": "Tu propiedad en manos expertas, con seguimiento, mantenimiento y control de rentas.",
                    "provider": {
                        "@type": "RealEstateAgent",
                        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
                    },
                    "serviceType": "Property Management"
                }
            ]
        }
    </script>

    <article class="item" itemscope itemtype="https://schema.org/Service">
        <span class="fa-solid fa-building icon" aria-hidden="true"></span>
        <h2 itemprop="name">VENTAS DE INMUEBLES</h2>
        <p itemprop="description">Nos encargamos del proceso completo, desde la promoción hasta la firma.</p>
    </article>

    <article class="item" itemscope itemtype="https://schema.org/Service">
        <span class="fa-solid fa-user-tie icon" aria-hidden="true"></span>
        <h2 itemprop="name">Administración de propiedades</h2>
        <p itemprop="description">Tu propiedad en manos expertas, con seguimiento, mantenimiento y control de rentas.</p>
    </article>

</section>

<!-- Info Left-->
<section class="info" role="region" aria-label="Experiencia y conocimiento">
    <article class="info_content">
        <div class="info_text">
            <div class="info_text_title">
                <h2>Experiencia inmobiliaria local en Bogotá</h2>
            </div>
            <div class="info_text_parrafo">
                <p>Analizamos de manera continua los movimientos del mercado inmobiliario para identificar los sectores con mayor valorización y las zonas con mejor calidad de vida.</p>
                <p><strong>Acompañamos</strong> a cada cliente en la toma de decisiones informadas, ayudándolos a elegir propiedades con alto potencial de valorización o a vender en el momento y precio adecuados, garantizando una inversión segura y rentable.</p>
            </div>
        </div>
        <div class="info_image">
            <img loading="lazy" src="<?php echo IMAGES ?>/item1.svg" alt="Experiencia inmobiliaria local en Bogotá" title="Experiencia inmobiliaria local en Bogotá">
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
                <p>Cada cliente recibe una asesoría adaptada a sus necesidades, con acompañamiento constante desde la búsqueda de la propiedad ideal hasta la firma final.</p>
                <p>Además, integramos servicios complementarios como <strong>administración de propiedades</strong>, mantenimiento y remodelaciones, para ofrecer una solución completa en un solo lugar.
                    Así garantizamos procesos más ágiles, decisiones seguras y una experiencia de compra o arriendo totalmente personalizada.</p>
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