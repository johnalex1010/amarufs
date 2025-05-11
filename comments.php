<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php') {
    die();
}
?>

<?php if (get_comments_number()) : ?>

    <h4><?php comments_number(__('Escribe el primer comentario', 'ama_abogados'), __('Un comentario', 'ama_abogados'), __('% comentarios', 'ama_abogados')) ?></h4>

    <!-- lista de comentartios -->
    <ol id="comments-list">
        <?php wp_list_comments() ?>
    </ol>

<?php endif; ?>

<!-- formulario de comentatios -->
<?php comment_form() ?>

<!-- //Paginación -->
<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav class="navegation">
        <?php next_comments_link(__('Anterior')); ?>
        <?php previous_comments_link(__('Siguiente')); ?>
    </nav>
<?php endif; ?>