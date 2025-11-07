<?php /*Template Name: Inmueble*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<?php
// Recopilar datos para structured data
$property_title = get_the_title();
$property_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30);
$property_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
$property_url = get_permalink();

// Datos de ubicación
$ubicacion_pais = '';
$ubicacion_ciudad = '';
$ubicacion_sector = '';
if (have_rows('grupo_ubicacion')) {
    while (have_rows('grupo_ubicacion')) {
        the_row();
        $ubicacion_pais = get_sub_field('ubicacion_pais');
        $ubicacion_ciudad = get_sub_field('ubicacion_ciudad');
        $ubicacion_sector = get_sub_field('ubicacion_sector');
    }
    reset_rows();
}

// Datos de precio
$precio_arriendo = '';
$precio_venta = '';
$es_arriendo = false;
$es_venta = false;
if (have_rows('grupo_arriendo_o_venta')) {
    while (have_rows('grupo_arriendo_o_venta')) {
        the_row();
        if (get_sub_field('arriendo') == 1) {
            $es_arriendo = true;
            $precio_arriendo = get_sub_field('valor_total_de_arriendo');
        }
        if (get_sub_field('venta') == 1) {
            $es_venta = true;
            $precio_venta = get_sub_field('valor_de_venta');
        }
    }
    reset_rows();
}

// Recopilar imágenes de galería
$gallery_images = array();
if (have_rows('grupo_galeria')) {
    while (have_rows('grupo_galeria')) {
        the_row();
        for ($i = 1; $i <= 30; $i++) {
            $imagen = get_sub_field('url_imagen_' . $i);
            if ($imagen) {
                $gallery_images[] = $imagen;
            }
        }
    }
    reset_rows();
}
?>

<!-- Structured Data - Real Estate Listing -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Accommodation",
    "name": "<?php echo esc_js($property_title); ?>",
    "description": "<?php echo esc_js($property_description); ?>",
    "url": "<?php echo esc_url($property_url); ?>",
    "image": [
        <?php 
        if (!empty($gallery_images)) {
            foreach ($gallery_images as $index => $img) {
                echo '"' . esc_url($img) . '"';
                if ($index < count($gallery_images) - 1) echo ',';
            }
        } elseif ($property_image) {
            echo '"' . esc_url($property_image) . '"';
        }
        ?>
    ],
    <?php if ($ubicacion_pais || $ubicacion_ciudad || $ubicacion_sector) : ?>
    "address": {
        "@type": "PostalAddress",
        <?php if ($ubicacion_pais) : ?>"addressCountry": "<?php echo esc_js($ubicacion_pais); ?>",<?php endif; ?>
        <?php if ($ubicacion_ciudad) : ?>"addressLocality": "<?php echo esc_js($ubicacion_ciudad); ?>",<?php endif; ?>
        <?php if ($ubicacion_sector) : ?>"addressRegion": "<?php echo esc_js($ubicacion_sector); ?>"<?php endif; ?>
    },
    <?php endif; ?>
    <?php if ($es_arriendo || $es_venta) : ?>
    "offers": [
        <?php if ($es_arriendo && $precio_arriendo) : ?>
        {
            "@type": "Offer",
            "price": "<?php echo esc_js($precio_arriendo); ?>",
            "priceCurrency": "COP",
            "availability": "https://schema.org/InStock",
            "priceSpecification": {
                "@type": "UnitPriceSpecification",
                "price": "<?php echo esc_js($precio_arriendo); ?>",
                "priceCurrency": "COP",
                "unitText": "MONTH"
            }
        }<?php if ($es_venta) echo ','; ?>
        <?php endif; ?>
        <?php if ($es_venta && $precio_venta) : ?>
        {
            "@type": "Offer",
            "price": "<?php echo esc_js($precio_venta); ?>",
            "priceCurrency": "COP",
            "availability": "https://schema.org/InStock"
        }
        <?php endif; ?>
    ],
    <?php endif; ?>
    "provider": {
        "@type": "RealEstateAgent",
        "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
        "telephone": "+573158774545",
        "url": "<?php echo esc_url(home_url('/')); ?>"
    }
}
</script>

<!-- Galería -->
<section class="section_galeria row" role="region" aria-label="Galería de imágenes de la propiedad">

    <?php
    // Obtener las categorías
    $categorias = get_the_category();

    // Obtener las etiquetas
    $tags = get_the_tags();
    ?>
    <div class="tag" role="navigation" aria-label="Categorías y etiquetas">
        <?php if (!empty($categorias)) : ?>
            <?php foreach ($categorias as $categoria) : ?>
                <a href="<?php echo get_category_link($categoria->term_id); ?>" title="Ver propiedades de tipo <?php echo esc_attr($categoria->name); ?>" class="<?php echo esc_attr($categoria->name); ?>" aria-label="Categoría: <?php echo esc_attr($categoria->name); ?>"><?php echo esc_html($categoria->name); ?></a>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($tags)) : ?>
            <?php foreach ($tags as $tag) : ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" title="Ver propiedades con etiqueta <?php echo esc_attr($tag->name); ?>" class="<?php echo esc_attr($tag->name); ?>" aria-label="Etiqueta: <?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>


    <!-- Galeria -->
    <?php if (have_rows('grupo_galeria')) : ?>
        <?php while (have_rows('grupo_galeria')) : the_row(); ?>
            <article class="gallery parent" itemscope itemtype="https://schema.org/ImageGallery">
                <?php
                for ($i = 1; $i <= 30; $i++) {
                    $imagen = get_sub_field('url_imagen_' . $i);
                    if ($imagen) {
                        echo '<div class="div' . $i . '">';
                        echo '<img loading="lazy" src="' . esc_url($imagen) . '" alt="' . esc_attr(get_the_title()) . ' - Imagen ' . $i . ' de la galería" title="' . esc_attr(get_the_title()) . ' - Vista ' . $i . '" itemprop="image">';
                        echo '</div>';
                    }
                }
                ?>

            </article>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- Modal Galeria -->
    <div id="myModalGallery" class="modal_gallery" role="dialog" aria-modal="true" aria-label="Visor de imágenes en pantalla completa">
        <span class="close" role="button" aria-label="Cerrar galería" tabindex="0">&times;</span>
        <div class="modal_content_image">
            <img loading="lazy" class="modal-content" id="modalImage" />
        </div>
        <a class="prev" role="button" aria-label="Imagen anterior" tabindex="0">&#10094;</a>
        <a class="next" role="button" aria-label="Imagen siguiente" tabindex="0">&#10095;</a>
    </div>
</section>

<!-- descripcion -->
<section class="descripcion row" role="main" itemscope itemtype="https://schema.org/Accommodation">
    <article class="descripcion_content">
        <!-- Descripción -->
        <?php if (have_rows('grupo_descripcion')) : ?>
            <?php while (have_rows('grupo_descripcion')) : the_row(); ?>
                <article>
                    <div class="title">
                        <h2>Descripción</h2>
                    </div>
                    <div class="text" itemprop="description">
                        <?php the_sub_field('descripcion_texto'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Detalle -->
        <?php if (have_rows('grupo_detalle')) : ?>
            <?php while (have_rows('grupo_detalle')) : the_row(); ?>
                <article>
                    <div class="title">
                        <h2>Detalle</h2>
                    </div>
                    <div class="text">
                        <ul class="detalle_items" role="list" aria-label="Características y detalles de la propiedad">

                            <!-- Item1 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_1')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_1'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_1'); ?></p>
                                </li>
                            <?php endif; ?>


                            <!-- Item2 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_2')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_2'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_2'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item3 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_3')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_3'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_3'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item4 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_4')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_4'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_4'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item5 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_5')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_5'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_5'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item6 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_6')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_6'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_6'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item8 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_7')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_7'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_7'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item8 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_8')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_8'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_8'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item9 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_9')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_9'); ?>" aria-hidden="true"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_9'); ?></p>
                                </li>
                            <?php endif; ?>


                        </ul>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Video -->
        <?php if (have_rows('grupo_video')) : ?>
            <?php while (have_rows('grupo_video')) : the_row(); ?>
                <?php if (get_sub_field('video')) : ?>
                    <article>
                        <div class="title">
                            <h2>Video</h2>
                        </div>
                        <div class="ubicacion">
                            <div class="map">
                                <iframe width="560" height="315" src="<?php the_sub_field('video'); ?>" title="Video de la propiedad <?php echo esc_attr(get_the_title()); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Ubicación -->
        <?php if (have_rows('grupo_ubicacion')) : ?>
            <?php while (have_rows('grupo_ubicacion')) : the_row(); ?>
                <article>
                    <div class="title">
                        <h2>Ubicación</h2>
                    </div>
                    <div class="ubicacion" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <ul>
                            <li><strong>País:</strong> <span itemprop="addressCountry"><?php the_sub_field('ubicacion_pais'); ?></span></li>
                            <li><strong>Ciudad:</strong> <span itemprop="addressLocality"><?php the_sub_field('ubicacion_ciudad'); ?></span></li>
                            <li><strong>Sector:</strong> <span itemprop="addressRegion"><?php the_sub_field('ubicacion_sector'); ?></span></li>
                        </ul>
                        <?php if (get_sub_field('url_mapa_google')) : ?>
                            <div class="map">
                                <iframe src="<?php the_sub_field('url_mapa_google'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Ubicación de <?php echo esc_attr(get_the_title()); ?> en Google Maps" aria-label="Mapa de ubicación de la propiedad"></iframe>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- Zonas aledañas -->
        <?php if (have_rows('grupo_zonas_aledanas')) : ?>
            <?php while (have_rows('grupo_zonas_aledanas')) : the_row(); ?>
                <article>
                    <div class="title">
                        <h2>Zonas aledañas</h2>
                    </div>
                    <div class="zonas">
                        <ul role="list" aria-label="Lugares de interés cercanos">
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                $zona = get_sub_field('zonas_aledanas_' . $i);
                                if ($zona) {
                                    // echo '<img loading="lazy" src="' . $zona . '" alt="Imagen ' . $i . '" title="Imagen ' . $i . '">';
                                    echo '<li><span class="fa-regular fa-circle-check" aria-hidden="true"></span> ' . esc_html($zona) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>

    </article>

    <!-- Descripción CTA -->
    <aside class="descripcion_cta" role="complementary" aria-label="Información de contacto y precios">
        <?php if (have_rows('grupo_arriendo_o_venta')) : ?>
            <?php while (have_rows('grupo_arriendo_o_venta')) : the_row(); ?>
                <article class="coste">
                    <ul>
                        <li class="coste_total">
                            <span class="coste_text">Código Inmueble:</span>
                            <span class="coste_number" itemprop="productID"><?php the_field('codigo_inmueble'); ?></span>
                        </li>
                    </ul>
                </article>

                <?php if (get_sub_field('arriendo') == 1) : ?>
                    <article class="coste" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="COP">
                        <meta itemprop="availability" content="https://schema.org/InStock">
                        <ul>
                            <li>
                                <span class="coste_text">Canon:</span>
                                <span class="coste_number">$<?php the_sub_field('valor_del_canon'); ?> COP / Mes</span>
                            </li>
                            <li>
                                <span class="coste_text">Administración:</span>
                                <span class="coste_number">$<?php the_sub_field('valor_de_la_administracion'); ?> COP / Mes</span>
                            </li>
                            <li class="coste_total">
                                <span class="coste_text">Total:</span>
                                <span class="coste_number" itemprop="price">$<?php the_sub_field('valor_total_de_arriendo'); ?> COP / Mes</span>
                            </li>
                        </ul>
                    </article>
                <?php endif; ?>

                <?php if (get_sub_field('venta') == 1) : ?>
                    <article class="coste" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                        <meta itemprop="priceCurrency" content="COP">
                        <meta itemprop="availability" content="https://schema.org/InStock">
                        <ul>
                            <li class="coste_total">
                                <span class="coste_text">Valor de venta:</span>
                                <span class="coste_number" itemprop="price">$<?php the_sub_field('valor_de_venta'); ?> COP</span>
                            </li>
                        </ul>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <article class="cta_inmueble">
            <h3>Agenda una cita</h3>
            <div>
                <a id="cta_inmueble_whatsapp" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20propiedad%20*<?php the_title(); ?>*%20con%20c%C3%B3digo: *<?php the_field('codigo_inmueble'); ?>*.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" class="cta_whatsapp" title="Comunicarse vía WhatsApp con un Asesor" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp sobre esta propiedad">WhatsApp <span class="fa-brands fa-whatsapp" aria-hidden="true"></span></a>
                <a href="tel:+573158774545" title="Llamar a Asesor" class="cta_call" aria-label="Llamar por teléfono a un asesor">Llamar <span class="fa-solid fa-phone" aria-hidden="true"></span></a>
            </div>
        </article>

        <article class="elegirnos">
            <h3>¿Por qué elegirnos?</h3>
            <ul>
                <li>Acompañamiento en todas las etapas</li>
                <li>Amplia cartera de propiedades</li>
                <li>Asesoramiento integral</li>
            </ul>
        </article>

    </aside>
</section>

<!-- //Footer -->
<?php get_footer(); ?>