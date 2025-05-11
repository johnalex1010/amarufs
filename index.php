<!-- //cabecera -->
<?php get_header(); ?>

<!-- Title -->
<section class="noticias">
    <?php if (is_home()) : ?>
        <?php
        // Obtén el ID de la página configurada como página frontal
        $frontpage_id = get_option('page_for_posts');

        // Obtiene la URL de la imagen destacada de la página de posts
        $featured_img_url = get_the_post_thumbnail_url($frontpage_id, 'full');

        // Obtiene el título de la página de posts
        $page_title = get_the_title($frontpage_id);
        ?>
        <header style="background-image: url('<?php echo $featured_img_url; ?>');">
            <div class="header_bg"></div>
            <h1 class="wp-block-heading"><?php echo $page_title; ?></h1>
        </header>

    <?php endif; ?>

</section>

<!-- Lista de blogs -->
<section class="blogs_items row">
    <?php
    // Define your custom query to retrieve posts
    $custom_query = new WP_Query(array(
        'posts_per_page' => 9,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1 // Pagination
    ));

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="blog_item">
                <div class="blog_item_image">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail(); // 500x500 image size
                    endif; ?>
                </div>
                <div class="blog_item_texts">
                    <div class="blog_item_texts_tags">
                        <?php the_category(' '); ?>
                        <?php the_tags('', ' ', ''); ?>
                    </div>
                    <div class="blog_item_texts_title">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="blog_item_texts_parrafo">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="blog_item_texts_link">
                        <a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title(); ?>">Leer más</a>
                    </div>
                </div>
            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; ?>

        <nav class="blog_paginacion" role="navigation">
            <?php
            echo paginate_links(array(
                'total' => $custom_query->max_num_pages,
                'prev_text' => __('Anterior', 'textdomain'),
                'next_text' => __('Siguiente', 'textdomain'),

            ));
            ?>
        </nav>
    <?php else :
        // If no content, include the "No posts found" template.
        get_template_part('template-parts/content', 'none');
    endif;

    // Restore original post data.
    wp_reset_postdata();

    ?>
</section>




<!-- //Footer -->
<?php get_footer(); ?>