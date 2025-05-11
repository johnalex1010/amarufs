<?php /*Template Name: Inmueble*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- Galería -->
<section class="section_galeria row">

    <?php
    // Obtener las categorías
    $categorias = get_the_category();

    // Obtener las etiquetas
    $tags = get_the_tags();
    ?>
    <div class="tag">
        <?php if (!empty($categorias)) : ?>
            <?php foreach ($categorias as $categoria) : ?>
                <a href="<?php echo get_category_link($categoria->term_id); ?>" title="<?php echo $categoria->name; ?>" class="<?php echo $categoria->name; ?>"><?php echo $categoria->name; ?></a>
            <?php endforeach; ?>
        <?php endif; ?>

        <?php if (!empty($tags)) : ?>
            <?php foreach ($tags as $tag) : ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" title="<?php echo $tag->name; ?>" class="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>


    <!-- Galeria -->
    <?php if (have_rows('grupo_galeria')) : ?>
        <?php while (have_rows('grupo_galeria')) : the_row(); ?>
            <article class="gallery parent">
                <?php
                for ($i = 1; $i <= 30; $i++) {
                    $imagen = get_sub_field('url_imagen_' . $i);
                    if ($imagen) {
                        echo '<div class="div' . $i . '">';
                        echo '<img src="' . $imagen . '" alt="Imagen ' . $i . '" title="Imagen ' . $i . '">';
                        echo '</div>';
                    }
                }
                ?>

            </article>
        <?php endwhile; ?>
    <?php endif; ?>

    <!-- Modal Galeria -->
    <div id="myModalGallery" class="modal_gallery">
        <span class="close">&times;</span>
        <div class="modal_content_image">
            <img class="modal-content" id="modalImage" />
        </div>
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
    </div>
</section>

<!-- descripcion -->
<section class="descripcion row">
    <article class="descripcion_content">
        <!-- Descripción -->
        <?php if (have_rows('grupo_descripcion')) : ?>
            <?php while (have_rows('grupo_descripcion')) : the_row(); ?>
                <article>
                    <div class="title">
                        <h2>Descripción</h2>
                    </div>
                    <div class="text">
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
                        <ul class="detalle_items">

                            <!-- Item1 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_1')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_1'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_1'); ?></p>
                                </li>
                            <?php endif; ?>


                            <!-- Item2 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_2')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_2'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_2'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item3 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_3')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_3'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_3'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item4 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_4')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_4'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_4'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item5 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_5')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_5'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_5'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item6 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_6')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_6'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_6'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item8 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_7')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_7'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_7'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item8 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_8')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_8'); ?>"></span>
                                    <p><?php the_sub_field('acordeon_detalle_item_texto_8'); ?></p>
                                </li>
                            <?php endif; ?>

                            <!-- Item9 -->
                            <?php if (get_sub_field('acordeon_detalle_icon_9')) : ?>
                                <li>
                                    <span class="<?php the_sub_field('acordeon_detalle_icon_9'); ?>"></span>
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
                                <iframe width="560" height="315" src="<?php the_sub_field('video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <div class="ubicacion">
                        <ul>
                            <li><strong>Pais:</strong> <?php the_sub_field('ubicacion_pais'); ?></li>
                            <li><strong>Ciudad:</strong> <?php the_sub_field('ubicacion_ciudad'); ?></li>
                            <li><strong>Sector:</strong> <?php the_sub_field('ubicacion_sector'); ?></li>
                        </ul>
                        <?php if (get_sub_field('url_mapa_google')) : ?>
                            <div class="map">
                                <iframe src="<?php the_sub_field('url_mapa_google'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <ul>
                            <?php
                            for ($i = 1; $i <= 10; $i++) {
                                $zona = get_sub_field('zonas_aledanas_' . $i);
                                if ($zona) {
                                    // echo '<img src="' . $zona . '" alt="Imagen ' . $i . '" title="Imagen ' . $i . '">';
                                    echo '<li><span class="fa-regular fa-circle-check"></span> ' . $zona . '</li>';
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
    <aside class="descripcion_cta">
        <?php if (have_rows('grupo_arriendo_o_venta')) : ?>
            <?php while (have_rows('grupo_arriendo_o_venta')) : the_row(); ?>
                <article class="coste">
                    <ul>
                        <li class="coste_total">
                            <span class="coste_text">Código Inmueble:</span>
                            <span class="coste_number"><?php the_field('codigo_inmueble'); ?></span>
                        </li>
                    </ul>
                </article>

                <?php if (get_sub_field('arriendo') == 1) : ?>
                    <article class="coste">
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
                                <span class="coste_number">$<?php the_sub_field('valor_total_de_arriendo'); ?> COP / Mes</span>
                            </li>
                        </ul>
                    </article>
                <?php endif; ?>

                <?php if (get_sub_field('venta') == 1) : ?>
                    <article class="coste">
                        <ul>
                            <li class="coste_total">
                                <span class="coste_text">Valor de venta:</span>
                                <span class="coste_number">$<?php the_sub_field('valor_de_venta'); ?> COP</span>
                            </li>
                        </ul>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <article class="cta_inmueble">
            <h3>Agenda una cita</h3>
            <div>
                <a id="cta_inmueble_whatsapp" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20la%20propiedad%20*<?php the_title(); ?>*%20con%20c%C3%B3digo: *<?php the_field('codigo_inmueble'); ?>*.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" class="cta_whatsapp" title="Comunicase vía Whatsapp con un Asesor" target="_blank">Whatsapp <span class="fa-brands fa-whatsapp"></span></a>
                <a href="tel:+573158774545" title="Llamar a Asesor" class="cta_call">Llamar <span class="fa-solid fa-phone"></span></a>
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