<?php /*Template Name: Página de Blog*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- Structured Data - Blog -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "Blog de <?php echo esc_js(get_bloginfo('name')); ?>",
    "description": "Artículos y noticias sobre bienes raíces, propiedades y el mercado inmobiliario",
    "url": "<?php echo esc_url(get_permalink()); ?>",
    "publisher": {
        "@type": "Organization",
        "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.webp'); ?>"
        }
    }
}
</script>

<!-- blog -->
<section class="blog" id="blog" role="main" aria-label="Blog de artículos">
    <div class="row" id="main-content">
        <div class="blog_content" id="post-container" itemscope itemtype="https://schema.org/ItemList">
            <?php
            // Argumentos para la consulta inicial
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8, // Número inicial de posts a cargar
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>

                    <article class="blog_card" itemscope itemtype="https://schema.org/BlogPosting" itemprop="itemListElement">
                        <div class="blog_item_image">
                            <meta itemprop="url" content="<?php echo esc_url(get_permalink()); ?>">
                            <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
                            <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                $thumbnail_id = get_post_thumbnail_id($post->ID);
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                                echo '<img loading="lazy" src="' . esc_url(get_the_post_thumbnail_url($post->ID, 'full')) . '" alt="' . esc_attr($alt ? $alt : get_the_title()) . '" title="' . esc_attr($alt ? $alt : get_the_title()) . '" itemprop="image">';
                            }
                            ?>

                        </div>
                        <div class="blog_item_text">
                            <!-- <div class="blog_item_text_title">
                                <h2><?php the_title(); ?></h2>
                            </div> -->
                            <div class="blog_item_text_paragraph">
                                <meta itemprop="headline" content="<?php echo esc_attr(get_the_title()); ?>">
                                <div itemprop="description"><?php the_excerpt(); ?></div>
                                <meta itemprop="author" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
                            </div>
                            <div class="blog_item_text_link">
                                <a href="<?php the_permalink(); ?>" title="Leer artículo completo: <?php echo esc_attr(get_the_title()); ?>" class="boton" aria-label="Leer más sobre <?php echo esc_attr(get_the_title()); ?>">Leer más... <span class="fa-solid fa-book-open-reader" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </article>

            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <div id="loading" class="loading_blog" role="status" aria-live="polite" aria-label="Cargando más artículos"><span class="fa-solid fa-spinner fa-spin" aria-hidden="true"></span></div>
</section>

<!-- //Footer -->
<?php get_footer(); ?>