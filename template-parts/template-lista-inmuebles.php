<?php /*Template Name: Lista de Inmuebles*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- Filtro -->
<section class=" filtro row">
    <section class="propiedades">
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
            while ($subpaginas->have_posts()) : $subpaginas->the_post();
                // Obtener la imagen destacada (thumbnail) de tamaño personalizado (300x300)
                $imagen_destacada = get_the_post_thumbnail(get_the_ID(), array(300, 300), array(
                    'title' => get_the_title(), // Título del post como title
                    'alt'   => get_the_title(), // Título del post como alt
                ));
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
                                                                    echo $categoria->name . ' ';
                                                                }
                                                            endif;

                                                            if (!empty($tags)) :
                                                                foreach ($tags as $tag) {
                                                                    echo $tag->name . ' ';
                                                                }
                                                            endif;
                                                            ?>">
                            <div class="propiedad_imagen">
                                <?php echo $imagen_destacada; ?>
                            </div>
                            <div class="propiedad_text">
                                <div class="tag">
                                    <?php if (!empty($categorias)) :
                                        foreach ($categorias as $categoria) : ?>
                                            <a href="<?php echo get_category_link($categoria->term_id); ?>" title="<?php echo $categoria->name; ?>" class="<?php echo $categoria->name; ?>"><?php echo $categoria->name; ?></a>
                                    <?php endforeach;
                                    endif; ?>

                                    <?php if (!empty($tags)) :
                                        foreach ($tags as $tag) : ?>
                                            <a href="<?php echo get_tag_link($tag->term_id); ?>" title="<?php echo $tag->name; ?>" class="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a>
                                    <?php endforeach;
                                    endif; ?>
                                </div>
                                <h3><?php echo get_the_title(); ?></h3>
                                <p><?php echo get_the_excerpt(); ?></p>

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

                                <a class="propiedad_cta" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">Mirar propiedad <span class="fa-solid fa-house"></span></a>
                            </div>
                        </article>
        <?php
                    endwhile;
                endif;
            endwhile;
            wp_reset_postdata(); // Restaurar datos de la consulta original
        endif;
        ?>
    </section>
    <div id="mensaje" class="no_coincdencias">No se encontraron resultados</div>
</section>



<!-- //Footer -->
<?php get_footer(); ?>