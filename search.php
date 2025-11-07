<?php get_header(); ?>

<!-- Structured Data - SearchResultsPage -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "SearchResultsPage",
    "name": "Resultados de búsqueda para: <?php echo esc_js(get_search_query()); ?>",
    "url": "<?php echo esc_url(get_search_link()); ?>"
}
</script>

<section class="blog" id="blog" role="main" aria-label="Resultados de búsqueda">
    <div class="row" id="main-content">
        <h1>Resultados de búsqueda para: <span>"<?php echo esc_html(get_search_query()); ?>"</span>
        </h1>
        <div class="blog_content" id="post-container" itemscope itemtype="https://schema.org/ItemList">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="blog_card" itemscope itemtype="https://schema.org/Article" itemprop="itemListElement">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog_item_image">
                                <meta itemprop="url" content="<?php echo esc_url(get_permalink()); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium', [
                                        'loading' => 'lazy',
                                        'itemprop' => 'image'
                                    ]);
                                }
                                ?>

                            </div>
                        <?php endif; ?>
                        <div class="blog_item_text">
                            <div class="blog_item_text_title">
                                <h2 itemprop="headline"><?php the_title(); ?></h2>
                            </div>
                            <div class="blog_item_text_paragraph">
                                <div itemprop="description"><?php the_excerpt(); ?></div>
                            </div>
                            <div class="blog_item_text_link">
                                <a href="<?php the_permalink(); ?>" title="Ver: <?php echo esc_attr(get_the_title()); ?>" class="boton" aria-label="Conoce más sobre <?php echo esc_attr(get_the_title()); ?>">Conoce más <span class="fa-solid fa-book-open-reader" aria-hidden="true"></span></a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</section>

<?php get_footer(); ?>