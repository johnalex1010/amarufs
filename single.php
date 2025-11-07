<?php get_header(); ?>

<!-- Structured Data - BlogPosting -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "<?php echo esc_js(get_the_title()); ?>",
    "description": "<?php echo esc_js(get_the_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30)); ?>",
    "image": "<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>",
    "datePublished": "<?php echo get_the_date('c'); ?>",
    "dateModified": "<?php echo get_the_modified_date('c'); ?>",
    "author": {
        "@type": "Organization",
        "name": "<?php echo esc_js(get_bloginfo('name')); ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.webp'); ?>"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo esc_url(get_permalink()); ?>"
    }
}
</script>

<section class="single_page" role="main" itemscope itemtype="https://schema.org/BlogPosting">
    <h1 itemprop="headline"><?php the_title(); ?></h1>

    <meta itemprop="image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>">
    <meta itemprop="datePublished" content="<?php echo get_the_date('c'); ?>">
    <meta itemprop="dateModified" content="<?php echo get_the_modified_date('c'); ?>">
    <meta itemprop="author" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    
    <div class="fecha"><time itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>">Fecha de publicación: <?php the_date(); ?></time></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div itemprop="articleBody">
                <?php the_content(); ?>
            </div>
        <?php endwhile;
    endif;
    ?>
</section>

<!-- blog -->
<section class="blog" id="blog" role="complementary" aria-label="Artículos relacionados">
    <div class="row">
        <div class="blog_title">
            <h2>También te pueden interesar</h2>
            <div class="blog_content" itemscope itemtype="https://schema.org/ItemList">
                <?php
                // Obtener las últimas 4 entradas de blog
                $ultimas_entradas = wp_get_recent_posts(array(
                    'numberposts' => 4, // Número de entradas que deseas mostrar
                    'post_status' => 'publish', // Solo mostrar entradas publicadas
                ));
                ?>

                <?php if ($ultimas_entradas) : ?>
                    <?php foreach ($ultimas_entradas as $entrada) : ?>
                        <article class="blog_card" itemscope itemtype="https://schema.org/BlogPosting" itemprop="itemListElement">
                            <div class="blog_item_image">
                                <?php
                                $imagen_destacada_info = wp_get_attachment_image_src(get_post_thumbnail_id($entrada['ID']), 'full');
                                $imagen_destacada_url = $imagen_destacada_info[0];
                                ?>
                                <img loading="lazy" src="<?php echo esc_url($imagen_destacada_url); ?>" alt="<?php echo esc_attr($entrada['post_title']) ?>" title="<?php echo esc_attr($entrada['post_title']) ?>" itemprop="image">
                                <meta itemprop="headline" content="<?php echo esc_attr($entrada['post_title']); ?>">
                                <meta itemprop="url" content="<?php echo esc_url(get_permalink($entrada['ID'])); ?>">
                            </div>
                            <div class="blog_item_text">
                                <!-- <div class="blog_item_text_title">
                                    <h3><?php echo esc_html($entrada['post_title']) ?></h3>
                                </div> -->
                                <div class="blog_item_text_paragraph">
                                    <p itemprop="description"><?php echo esc_html($entrada['post_excerpt']) ?></p>
                                </div>
                                <div class="blog_item_text_link">
                                    <a href="<?php echo esc_url(get_permalink($entrada['ID'])) ?>" target="_self" title="Leer artículo: <?php echo esc_attr($entrada['post_title']) ?>" class="boton" aria-label="Leer más sobre <?php echo esc_attr($entrada['post_title']); ?>">Leer más... <span class="fa-solid fa-book-open-reader" aria-hidden="true"></span></a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <a href="../blog/" title="Ver más artículos del blog" class="btn_blogs boton align-center" aria-label="Ver más contenido del blog">Ver más contenido <span class="fa-solid fa-book-open-reader" aria-hidden="true"></span></a>
</section>

<?php get_footer(); ?>