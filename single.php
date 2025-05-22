<?php get_header(); ?>

<section class="single_page">
    <h1><?php the_title(); ?></h1>


    <div class="fecha">Fecha de publicación: <?php the_date(); ?></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</section>

<!-- blog -->
<section class="blog" id="blog">
    <div class="row">
        <div class="blog_title">
            <h2>También te pueden interesar</h2>
            <div class="blog_content">
                <?php
                // Obtener las últimas 4 entradas de blog
                $ultimas_entradas = wp_get_recent_posts(array(
                    'numberposts' => 4, // Número de entradas que deseas mostrar
                    'post_status' => 'publish', // Solo mostrar entradas publicadas
                ));
                ?>

                <?php if ($ultimas_entradas) : ?>
                    <?php foreach ($ultimas_entradas as $entrada) : ?>
                        <article class="blog_card">
                            <div class="blog_item_image">
                                <?php
                                $imagen_destacada_info = wp_get_attachment_image_src(get_post_thumbnail_id($entrada['ID']), 'full');
                                $imagen_destacada_url = $imagen_destacada_info[0];
                                ?>
                                <img loading="lazy" src="<?php echo esc_url($imagen_destacada_url); ?>" alt="<?php echo esc_attr($entrada['post_title']) ?>" title="<?php echo esc_attr($entrada['post_title']) ?>">
                            </div>
                            <div class="blog_item_text">
                                <!-- <div class="blog_item_text_title">
                                    <h3><?php echo esc_html($entrada['post_title']) ?></h3>
                                </div> -->
                                <div class="blog_item_text_paragraph">
                                    <p><?php echo esc_html($entrada['post_excerpt']) ?></p>
                                </div>
                                <div class="blog_item_text_link">
                                    <a href="<?php echo esc_url(get_permalink($entrada['ID'])) ?>" target="_self" title="<?php echo esc_html($entrada['post_title']) ?>" class="boton">Leer más... <span class="fa-solid fa-book-open-reader"></span></a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <a href="../blog/" title="Ver más blog" class="btn_blogs boton align-center">Ver más contenido <span class="fa-solid fa-book-open-reader"></span></a>
</section>

<?php get_footer(); ?>