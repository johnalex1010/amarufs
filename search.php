<?php get_header(); ?>

<section class="blog" id="blog">
    <div class="row" id="main-content">
        <h1>Resultados de búsqueda para: <span>"<?php echo get_search_query(); ?>"<span>
        </h1>
        <div class="blog_content" id="post-container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="blog_card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="blog_item_image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="blog_item_text">
                            <div class="blog_item_text_title">
                                <h2><?php the_title(); ?></h2>
                            </div>
                            <div class="blog_item_text_paragraph">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="blog_item_text_link">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="boton">Conoce más <span class="fa-solid fa-book-open-reader"></span></a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</section>

<?php get_footer(); ?>