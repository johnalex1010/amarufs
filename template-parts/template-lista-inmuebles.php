<?php /*Template Name: Lista de Inmuebles*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- Filtro -->
<section class="filtro row" role="main" aria-label="Listado de inmuebles">
    <?php
    // Preparar datos para structured data de propiedades
    $propiedades_data = array();
    ?>
    
    <section class="propiedades" itemscope itemtype="https://schema.org/ItemList">
        <?php
        // Obtener las subpáginas directas de la página actual utilizando WP_Query
        $args = array(
            'post_type'         => 'page',
            'post_parent'       => get_queried_object_id(),
            'posts_per_page'    => -1, // Obtener todas las subpáginas
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

                // Obtener todas las categorías y etiquetas
                $categorias = get_the_category();
                $tags = get_the_tags();

                // Obtener los campos personalizados de ACF
                if (have_rows('grupo_detalle')) :
                    while (have_rows('grupo_detalle')) : the_row();
        ?>
                        <article class="inmueble propiedad <?php
                                                            if (!empty($categorias)) :
                                                                foreach ($categorias as $categoria) {
                                                                    echo esc_attr($categoria->name) . ' ';
                                                                }
                                                            endif;

                                                            if (!empty($tags)) :
                                                                foreach ($tags as $tag) {
                                                                    echo esc_attr($tag->name) . ' ';
                                                                }
                                                            endif;
                                                            ?>" itemscope itemtype="https://schema.org/Accommodation" itemprop="itemListElement">
                            <div class="propiedad_imagen">
                                <?php echo $imagen_destacada; ?>
                            </div>
                            <div class="propiedad_text">
                                <meta itemprop="url" content="<?php echo esc_url(get_permalink()); ?>">
                                <?php if (get_the_post_thumbnail_url(get_the_ID(), 'large')) : ?>
                                <meta itemprop="image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
                                <?php endif; ?>
                                <div class="tag">
                                    <?php if (!empty($categorias)) :
                                        foreach ($categorias as $categoria) : ?>
                                            <a href="<?php echo get_category_link($categoria->term_id); ?>" title="Ver propiedades de tipo <?php echo esc_attr($categoria->name); ?>" class="<?php echo esc_attr($categoria->name); ?>" aria-label="Categoría: <?php echo esc_attr($categoria->name); ?>"><?php echo esc_html($categoria->name); ?></a>
                                    <?php endforeach;
                                    endif; ?>

                                    <?php if (!empty($tags)) :
                                        foreach ($tags as $tag) : ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>" title="Ver propiedades con etiqueta <?php echo esc_attr($tag->name); ?>" class="<?php echo esc_attr($tag->name); ?>" aria-label="Etiqueta: <?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                    <?php endforeach;
                                    endif; ?>
                                </div>
                                <h2 class="propiedad_titulo" itemprop="name"><?php echo get_the_title(); ?></h2>
                                    <p itemprop="description"><?php echo get_the_excerpt(); ?></p>

                                    <ul role="list" aria-label="Características de la propiedad">
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
            "name": "<?php echo esc_js(get_the_title()); ?>",
            "description": "Listado completo de propiedades disponibles para arriendo o venta",
            "numberOfItems": <?php echo count($propiedades_data); ?>,
            "itemListElement": [
                <?php foreach ($propiedades_data as $index => $propiedad) : ?>
                {
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
                }<?php echo ($index < count($propiedades_data) - 1) ? ',' : ''; ?>
                <?php endforeach; ?>
            ]
        }
        </script>
        <?php endif; ?>
    </section>
    <div id="mensaje" class="no_coincdencias" role="status" aria-live="polite">No se encontraron resultados</div>
</section>



<!-- //Footer -->
<?php get_footer(); ?>