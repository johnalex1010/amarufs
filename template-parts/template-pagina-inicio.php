<?php /*Template Name: Página de Incio*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- inicio -->
<h1 class="hide">Amaru FS Inmobiliaria</h1>
<section class="inicio">
    <?php
    // Obtiene la URL de la imagen destacada del areas-practica
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <header style="background-image: url('<?php echo IMAGES ?>/banner.avif');">
        <h2>El proceso de arrendamiento <strong>es fácil y sin estrés</strong></h2>
        <p>¡Ven y descubre las opciones que tenemos para ti!</p>
        <a href="inmuebles/" class="boton">¡Conoce nuestros tipos de vivienda!</a>
    </header>

    <span class="fa-solid fa-computer-mouse fa-bounce mouse"></span>
</section>

<!-- Items -->
<section class="items">
    <article class="item">
        <span class="fa-solid fa-user-tie icon"></span>
        <h2>GESTIÓN DE PROPIEDADES</h2>
        <p>En nuestra inmobiliaria ofrecemos un servicio completo de gestión de propiedades que garantiza tranquilidad y rentabilidad a los propietarios.</p>
    </article>
    <article class="item">
        <span class="fa-solid fa-building icon"></span>
        <h2>VENTAS DE INMUEBLES</h2>
        <p>Nos dedicamos a conectar vendedores con compradores potenciales de manera eficiente y transparente.</p>
    </article>
    <article class="item">
        <span class="fa-solid fa-house-circle-check icon"></span>
        <h2>SERVICIOS DE ARRIENDO</h2>
        <p>Ofrecemos un servicio integral de arriendo que abarca todo el proceso, desde la promoción del inmueble hasta la selección de arrendatarios confiables.</p>
    </article>
</section>

<!-- Info -->
<section class="info ">
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
            <img src="<?php echo IMAGES ?>/item1.svg" alt="Experiencia Local y Conocimiento del Mercado" title="Experiencia Local y Conocimiento del Mercado">
        </div>
    </article>
</section>
<section class="info">
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
            <img src="<?php echo IMAGES ?>/item2.svg" alt="Atención Personalizada y Servicios Integrados" title="Atención Personalizada y Servicios Integrados">
        </div>
    </article>
</section>

<!-- últimos Inmuebles -->
<section class="inmuebles row">
    <div class="inmuebles_title">
        <h2>Últimas propiedades</h2>
    </div>

    <section class="propiedades">
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
            while ($subpaginas->have_posts()) : $subpaginas->the_post();
                // Obtener la imagen destacada (thumbnail) de tamaño personalizado (300x300)
                $imagen_destacada = get_the_post_thumbnail(get_the_ID(), array(300, 300));
                // Obtener la categoría
                // $categorias = get_the_category();
                // $categoria = !empty($categorias) ? $categorias[0]->name : '';

                // // $tags = get_the_tags();
                // // $tags = !empty($tags) ? $tags[0]->name : '';

                // $tags = get_the_tags();
                // $tag = $tags[0];

                if (have_rows('grupo_detalle')) :
                    while (have_rows('grupo_detalle')) : the_row();

        ?>
                        <article class="propiedad">
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

                                <a class="propiedad_cta" href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">Mirar propiedad <span class="fa-solid fa-house"></span></a></a>
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


    <a href="inmuebles/" class="btn_mas_inmuebles">Ver más tipos de inmuebles <span class="fa-solid fa-house"></span></a>
</section>



<!-- //Footer -->
<?php get_footer(); ?>