<?php /*Template Name: Página de Blog*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- blog -->
<section class="blog" id="blog">
    <div class="row" id="main-content">
        <div class="blog_content" id="post-container">
            <?php
            // Argumentos para la consulta inicial
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8, // Número inicial de posts a cargar
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <article class="blog_card">
                        <div class="blog_item_image">
                            <?php
                            if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                                echo '<img src="' . esc_url(get_the_post_thumbnail_url($post->ID, 'full')) . '" alt="' . esc_attr($alt) . '" title="' . esc_attr($alt) . '">';
                            }
                            ?>

                        </div>
                        <div class="blog_item_text">
                            <!-- <div class="blog_item_text_title">
                                <h2><?php the_title(); ?></h2>
                            </div> -->
                            <div class="blog_item_text_paragraph">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="blog_item_text_link">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="boton">Leer más... <span class="fa-solid fa-book-open-reader"></span></a>
                            </div>
                        </div>
                    </article>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <div id="loading" class="loading_blog"><span class="fa-solid fa-spinner fa-spin"></span></div>
</section>

<!-- //Footer -->
<?php get_footer(); ?>