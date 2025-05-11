<?php get_header() ?>
<div class="row page_content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('post') ?>>

                <div class="page_content_header">
                    <div class="page_content_header_image">
                        <?php the_post_thumbnail('blog_size_image'); ?>
                    </div>
                    <div class="page_content_header_title">
                        <h2 class="title"><?php the_title(); ?></h2>
                    </div>
                </div>

                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('template-parts/content', 'nopost'); ?>
    <?php endif; ?>
</div>
<?php get_footer() ?>