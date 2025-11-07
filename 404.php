<?php /*Template Name: Página NO Encontrada*/ ?>

<!-- Cabecera -->
<?php get_header(); ?>

<!-- Structured Data - WebPage (404) -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Página no encontrada - Error 404",
    "description": "La página que buscas no existe o ha sido movida",
    "url": "<?php echo esc_url(home_url($_SERVER['REQUEST_URI'])); ?>"
}
</script>

<div class="row" role="main">
    <h2 class="title_404"> ¿Qué puedes hacer?</h2>
</div>
<section class="error_404" aria-label="Información de error 404">
    <div class="error_404_image" role="img" aria-label="Ilustración de página no encontrada">
        <img width="490" height="490" loading="lazy" src="https://www.amarufs.co/wp-content/uploads/2025/05/404.webp" alt="Página no encontrada" title="Página no encontrada">
    </div>
    <div class="error_404_text">
        <p> Es posible que el enlace esté roto, la página haya sido movida o ya no exista. Pero no te preocupes, estamos aquí para ayudarte a retomar el camino.</p>
        <ul role="list" aria-label="Opciones disponibles">
            <li>Usar el buscador para encontrar lo que necesitas</li>
            <li>Explorar nuestras secciones más visitadas</li>
            <li>Si crees que esto es un error, no dudes en contactarnos.</li>
        </ul>
        <p>Gracias por tu comprensión. Estamos trabajando para que tu experiencia sea cada vez mejor.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="Volver a la página de inicio" aria-label="Ir a la página de inicio">Ir al inicio <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
    </div>
</section>

<!-- //Footer -->
<?php get_footer(); ?>