<?php /*Template Name: Servicios*/ ?>

<!-- //cabecera -->
<?php get_header(); ?>

<!-- Structured Data - Services Offered -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Servicios Inmobiliarios",
        "description": "Servicios profesionales de gestión de propiedades y ventas de inmuebles",
        "itemListElement": [{
                "@type": "Service",
                "name": "Ventas de Inmuebles",
                "description": "Nos encargamos de todo el proceso de venta, desde la valoración precisa del inmueble hasta el cierre exitoso de la negociación.",
                "provider": {
                    "@type": "RealEstateAgent",
                    "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
                    "telephone": "+573158774545",
                    "url": "<?php echo esc_url(home_url('/')); ?>"
                },
                "serviceType": "Real Estate Sales",
                "areaServed": {
                    "@type": "Country",
                    "name": "Colombia"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Servicios de Venta",
                    "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Valoración exacta según condiciones del mercado y ubicación."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Promoción activa en portales inmobiliarios, redes sociales y bases de datos exclusivas."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Coordinación de visitas, manejo de negociaciones y seguimiento de interesados."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Gestión documental y asesoría legal durante todo el proceso."
                            }
                        }
                    ]
                }
            },

            {
                "@type": "Service",
                "name": "Gestión de Propiedades",
                "description": "Nos encargamos de todo el proceso operativo y administrativo para que disfrutes de ingresos seguros sin preocuparte por la gestión diaria.",
                "provider": {
                    "@type": "RealEstateAgent",
                    "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
                    "telephone": "+573158774545",
                    "url": "<?php echo esc_url(home_url('/')); ?>"
                },
                "serviceType": "Property Management",
                "areaServed": {
                    "@type": "Country",
                    "name": "Colombia"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Servicios de Gestión",
                    "itemListElement": [{
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Gestión completa del arriendo y mantenimiento del inmueble."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "valuación y selección rigurosa de arrendatarios confiables."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Seguimiento de pagos, estado del inmueble y conservación del bien."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "eportes periódicos con información actualizada y atención personalizada."
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Asesoría legal y técnica para proteger tu inversión."
                            }
                        }
                    ]
                }
            }

        ]
    }
</script>

<div class="row" role="main">

    <section class="servicio" itemscope itemtype="https://schema.org/Service">
        <div class="servicio_text">
            <h2 itemprop="name">Ventas de <strong>Inmuebles</strong></h2>
            <p itemprop="description">Nos encargamos de todo el proceso de venta, desde la valoración precisa del inmueble hasta el cierre exitoso de la negociación. Combinamos conocimiento local, análisis de mercado y estrategias digitales para posicionar tu propiedad frente a los compradores adecuados.</p>
            <meta itemprop="serviceType" content="Real Estate Sales">
            <div class="btns">
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Contactar por WhatsApp sobre venta de propiedades' target="_blank" rel="noopener noreferrer" class="boton" aria-label="Contactar por WhatsApp si quieres vender tu propiedad">¿Quieres vender tu propiedad?</a>
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Agendar reunión por WhatsApp con asesores' target="_blank" rel="noopener noreferrer" class="boton_secondary" aria-label="Agendar una reunión con nuestros asesores de venta">Agenda una reunión con nuestros asesores</a>
            </div>
        </div>
        <div class="servicio_items">
            <ul role="list" aria-label="Características del servicio de venta de inmuebles">
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Valoración exacta según condiciones del mercado y ubicación..</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Promoción activa en portales inmobiliarios, redes sociales y bases de datos exclusivas..</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Coordinación de visitas, manejo de negociaciones y seguimiento de interesados..</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Gestión documental y asesoría legal durante todo el proceso..</li>
            </ul>
        </div>
    </section>

    <section class="servicio" itemscope itemtype="https://schema.org/Service">
        <div class="servicio_text">
            <h2 itemprop="name">Gestión de <strong>Propiedades</strong></h2>
            <p itemprop="description">Ofrecemos un Nos especializamos en la administración integral de inmuebles, ofreciendo a los propietarios un servicio transparente, eficiente y libre de complicaciones.
                Nos encargamos de todo el proceso operativo y administrativo para que disfrutes de ingresos seguros sin preocuparte por la gestión diaria..</p>
            <meta itemprop="serviceType" content="Property Management">
            <div class="btns">
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Contactar por WhatsApp sobre gestión de propiedades' target="_blank" rel="noopener noreferrer" class="boton" aria-label="Contactar por WhatsApp si tienes una propiedad para rentar">¿Tienes una propiedad para rentar?</a>
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Solicitar asesoría gratuita por WhatsApp' target="_blank" rel="noopener noreferrer" class="boton_secondary" aria-label="Contactar para asesoría gratuita sobre gestión de propiedades">Contáctanos para una asesoría gratuita</a>
            </div>
        </div>
        <div class="servicio_items">
            <ul role="list" aria-label="Características del servicio de gestión de propiedades">
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Gestión completa del arriendo y mantenimiento del inmueble.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Evaluación y selección rigurosa de arrendatarios confiables.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Control de pagos, seguimiento del estado y conservación del bien.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Reportes periódicos con información actualizada y atención personalizada.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Asesoría legal y técnica para proteger tu inversión.</li>
            </ul>
        </div>
    </section>

    <aside class="beneficios" role="complementary" aria-label="Beneficios de nuestros servicios">
        <div class="beneficios_title">
            <h2>Beneficios que te brindamos</h2>
        </div>
        <div class="beneficios_cards">
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Acceso a Inventario Exclusivo</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Disponibilidad inmediata de propiedades seleccionadas y preventas antes de su lanzamiento público, asegurando oportunidades únicas de inversión.</p>
                </div>
                <span class="fa-solid fa-key" aria-hidden="true"></span>
            </div>
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Asesoría Integral y Especializada</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Contamos con un equipo de agentes, abogados y tasadores que acompañan cada etapa del proceso, desde la valoración hasta la firma.</p>
                </div>
                <span class="fa-solid fa-user-tie" aria-hidden="true"></span>
            </div>
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Eficiencia en Procesos Transaccionales</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Implementamos tecnología y protocolos optimizados que reducen tiempos de gestión, evitan errores y aceleran los cierres.<br>
                        Simplificamos el proceso para que vender, comprar o arrendar sea ágil y sin complicaciones.</p>
                </div>
                <span class="fa-solid fa-clock" aria-hidden="true"></span>
            </div>
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Negociación Estratégica</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Habilidades de negociación basadas en análisis de mercado y datos en tiempo real, maximizando el valor para el cliente tanto en compra como en venta o arriendo.</p>
                </div>
                <span class="fa-solid fa-chart-line" aria-hidden="true"></span>
            </div>
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Gestión Postventa y Fidelización</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Seguimiento proactivo tras el cierre de la operación: soporte en trámites, atención a incidencias y programas de lealtad que fomentan relaciones duraderas.</p>
                </div>
                <span class="fa-solid fa-handshake-simple" aria-hidden="true"></span>
            </div>
        </div>
    </aside>
</div>

<!-- //Footer -->
<?php get_footer(); ?>