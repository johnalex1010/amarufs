<!-- RRSS -->
<aside class="rrss">
    <ul>
        <li>
            <a href="https://www.facebook.com/amarufsco" title="Facebook" target="_blank"><span class="fa-brands fa-facebook-f"></span></a>
        </li>
        <li>
            <a href="https://www.instagram.com/amarufsco/" title="Instagram" target="_blank"><span class="fa-brands fa-instagram"></span></a>
        </li>
        <li>
            <a id="cta_footer_whatsapp" href="https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F" title="Whatsapp" target="_blank"><span class="fa-brands fa-whatsapp"></span></a>
        </li>
    </ul>
</aside>

<!-- footer -->
<footer>
    <div class="footer row">
        <nav class="footer_info">
            <a href="<?php home_url() ?>" class="footer_info_img">
                <img src="<?php echo IMAGES ?>/logo.webp" alt="Logo Amaru FS Inmobiliaria" title="Logo Amaru FS Inmobiliaria">
            </a>

            <div class="footer_info_text">
                <ul>
                    <li><span class="fa-solid fa-phone"></span> <a href="tel:+573158774545">+57 3158774545</a></li>
                    <li><span class="fa-solid fa-at"></span> <a href="mailto:solicitudes@amarufs.co">solicitudes@amarufs.co</a></li>
                    <li><span class="fa-solid fa-clock"></span> Horario de antención: Lunes a Viernes de 9:00 a.m. a 5:30 p.m. y <br />Sábado 9:00 a.m. a 12:00 m.</li>
                    <!-- <li><span class="fa-solid fa-clock"></span> </li> -->
                </ul>

                <ol class="social_media">
                    <?php if (isset($instagram_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($instagram_URL) ?>" target="_blank"><span class="fa-brands fa-instagram"></span></a>
                        </li>
                    <?php endif ?>
                    <?php if (isset($linkedin_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($linkedin_URL) ?>" target="_blank"><span class="fa-brands fa-linkedin-in"></span></a>
                        </li>
                    <?php endif ?>
                    <?php if (isset($spotify_URL)) : ?>
                        <li>
                            <a href="<?php echo esc_url($spotify_URL) ?>" target="_blank"><span class="fa-brands fa-spotify"></span></a>
                        </li>
                    <?php endif ?>
                </ol>
            </div>
        </nav>
    </div>
    <div class="copy">Sitio creado por <a href="https://www.johnalex.com.co" target="_blank">www.johnalex.com.co</a></div>
</footer>


<?php wp_footer(); ?>
</body>

</html>