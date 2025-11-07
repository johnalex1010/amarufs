<!-- RRSS -->
<aside class="rrss" role="complementary" aria-label="Redes sociales">
    <ul>
        <li>
            <a href="https://www.facebook.com/amarufsco" title="Visitar nuestra página de Facebook" target="_blank" rel="noopener noreferrer" aria-label="Facebook de Amaru FS"><span class="fa-brands fa-facebook-f" aria-hidden="true"></span></a>
        </li>
        <li>
            <a href="https://www.instagram.com/amarufsco/" title="Visitar nuestro perfil de Instagram" target="_blank" rel="noopener noreferrer" aria-label="Instagram de Amaru FS"><span class="fa-brands fa-instagram" aria-hidden="true"></span></a>
        </li>
        <li>
            <a id="cta_footer_whatsapp" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" title="Contactar por WhatsApp" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp"><span class="fa-brands fa-whatsapp" aria-hidden="true"></span></a>
        </li>
    </ul>
</aside>

<!-- footer -->
<footer role="contentinfo" itemscope itemtype="https://schema.org/RealEstateAgent">
    <!-- Structured Data - Contact Information -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "RealEstateAgent",
            "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "logo": "<?php echo esc_url(get_template_directory_uri() . '/images/logo.webp'); ?>",
            "telephone": "+573158774545",
            "email": "solicitudes@amarufs.co",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "CO"
            },
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "09:00",
                    "closes": "17:30"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Saturday",
                    "opens": "09:00",
                    "closes": "12:00"
                }
            ],
            "sameAs": [
                "https://www.facebook.com/amarufsco",
                "https://www.instagram.com/amarufsco/"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+573158774545",
                "contactType": "Customer Service",
                "email": "solicitudes@amarufs.co",
                "availableLanguage": "Spanish"
            }
        }
    </script>

    <div class="footer row">
        <nav class="footer_info" role="navigation" aria-label="Información de contacto">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer_info_img" title="Ir a la página de inicio" aria-label="Logo de Amaru FS - Ir a inicio">
                <img loading="lazy" src="<?php echo IMAGES ?>/logo.webp" alt="Logo Amaru FS Inmobiliaria" title="Logo Amaru FS Inmobiliaria">
            </a>

            <div class="footer_info_text" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
                <ul>
                    <li><span class="fa-solid fa-phone" aria-hidden="true"></span> <a href="tel:+573158774545" itemprop="telephone" title="Llamar a Amaru FS" aria-label="Teléfono: +57 3158774545">+57 3158774545</a></li>
                    <li><span class="fa-solid fa-at" aria-hidden="true"></span> <a href="mailto:solicitudes@amarufs.co" itemprop="email" title="Enviar correo a Amaru FS" aria-label="Email: solicitudes@amarufs.co">solicitudes@amarufs.co</a></li>
                    <li itemprop="hoursAvailable" itemscope itemtype="https://schema.org/OpeningHoursSpecification"><span class="fa-solid fa-clock" aria-hidden="true"></span> <span itemprop="description">Horario de atención: Lunes a Viernes de 9:00 a.m. a 5:30 p.m. y <br />Sábado 9:00 a.m. a 12:00 m.</span></li>
                    <!-- <li><span class="fa-solid fa-clock"></span> </li> -->
                </ul>

                <ol class="social_media" role="list" aria-label="Enlaces a redes sociales">
                    <?php if (isset($instagram_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($instagram_URL) ?>" target="_blank" rel="noopener noreferrer" title="Visitar Instagram" aria-label="Instagram"><span class="fa-brands fa-instagram" aria-hidden="true"></span></a>
                        </li>
                    <?php endif ?>
                    <?php if (isset($linkedin_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($linkedin_URL) ?>" target="_blank" rel="noopener noreferrer" title="Visitar LinkedIn" aria-label="LinkedIn"><span class="fa-brands fa-linkedin-in" aria-hidden="true"></span></a>
                        </li>
                    <?php endif ?>
                    <?php if (isset($spotify_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($spotify_URL) ?>" target="_blank" rel="noopener noreferrer" title="Visitar Spotify" aria-label="Spotify"><span class="fa-brands fa-spotify" aria-hidden="true"></span></a>
                        </li>
                    <?php endif ?>
                </ol>
            </div>
        </nav>
    </div>
    <div class="copy" role="contentinfo">Sitio creado por <a href="https://www.johnalex.com.co" target="_blank" rel="noopener noreferrer" title="Visitar sitio web de John Alex" aria-label="Desarrollado por John Alex">www.johnalex.com.co</a></div>
</footer>


<?php wp_footer(); ?>
</body>

</html>