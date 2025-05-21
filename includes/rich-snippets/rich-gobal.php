<?php
// Asumiendo que estás dentro del Loop o página principal
$post_id = get_the_ID();

if (is_front_page()) {
    $title = get_bloginfo('name');
} else {
    $title = get_the_title($post_id);
}
$excerpt = get_the_excerpt($post_id);
$url = get_permalink($post_id);
$image = get_the_post_thumbnail_url($post_id, 'full');
$datePublished = get_the_date('c', $post_id);
$dateModified = get_the_modified_date('c', $post_id);

// Datos estáticos o configurables de la organización
$org_name = get_bloginfo('name');
$custom_logo_id = get_theme_mod('custom_logo');
$org_logo = wp_get_attachment_image_url($custom_logo_id, 'full');

?>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "url": "<?php echo esc_url($url); ?>",
        "name": "<?php echo esc_js($title); ?>",
        "headline": "<?php echo esc_js($title); ?>",
        "description": "<?php echo esc_js($excerpt); ?>",
        "image": "<?php echo esc_url($image); ?>",
        "publisher": {
            "@type": "Organization",
            "name": "<?php echo esc_js($org_name); ?>",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url($org_logo); ?>"
            }
        },
        "datePublished": "<?php echo esc_js($datePublished); ?>",
        "dateModified": "<?php echo esc_js($dateModified); ?>"
    }
</script>