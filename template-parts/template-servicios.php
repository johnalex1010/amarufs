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
    "itemListElement": [
        {
            "@type": "Service",
            "name": "Gestión de Propiedades",
            "description": "Servicio completo de gestión de propiedades que garantiza tranquilidad y rentabilidad a los propietarios. Nos encargamos de todo el proceso operativo y administrativo.",
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
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Gestión integral del arriendo y mantenimiento"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Evaluación y selección de arrendatarios confiables"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Seguimiento de pagos y estado del inmueble"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Reportes periódicos y atención personalizada"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Asesoría legal y técnica"
                        }
                    }
                ]
            }
        },
        {
            "@type": "Service",
            "name": "Ventas de Inmuebles",
            "description": "Facilitamos todo el proceso de venta de inmuebles, desde la valoración hasta el cierre. Nuestra estrategia combina experiencia local y técnicas de marketing modernas.",
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
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Evaluación precisa del valor del inmueble"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Promoción activa en portales y redes"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Gestión de visitas, negociaciones y documentación"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Asesoría legal en cada etapa del proceso"
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
            <h2 itemprop="name">Gestión de <strong>Propiedades</strong></h2>
            <p itemprop="description">Ofrecemos un servicio completo de gestión de propiedades que garantiza tranquilidad y rentabilidad a los propietarios. Nos encargamos de todo el proceso operativo y administrativo.</p>
            <meta itemprop="serviceType" content="Property Management">
            <div class="btns">
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Contactar por WhatsApp sobre gestión de propiedades' target="_blank" rel="noopener noreferrer" class="boton" aria-label="Contactar por WhatsApp si tienes una propiedad para rentar">¿Tienes una propiedad para rentar?</a>
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Solicitar asesoría gratuita por WhatsApp' target="_blank" rel="noopener noreferrer" class="boton_secondary" aria-label="Contactar para asesoría gratuita sobre gestión de propiedades">Contáctanos para una asesoría gratuita</a>
            </div>
        </div>
        <div class="servicio_items">
            <ul role="list" aria-label="Características del servicio de gestión de propiedades">
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Gestión integral del arriendo y mantenimiento.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Evaluación y selección de arrendatarios confiables.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Seguimiento de pagos y estado del inmueble.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Reportes periódicos y atención personalizada.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Asesoría legal y técnica.</li>
            </ul>
        </div>
    </section>

    <section class="servicio" itemscope itemtype="https://schema.org/Service">
        <div class="servicio_text">
            <h2 itemprop="name">Ventas de <strong>Inmuebles</strong></h2>
            <p itemprop="description">Nos especializamos en facilitar todo el proceso de venta de inmuebles, desde la valoración hasta el cierre. Nuestra estrategia combina experiencia local y técnicas de marketing modernas.</p>
            <meta itemprop="serviceType" content="Real Estate Sales">
            <div class="btns">
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Contactar por WhatsApp sobre venta de propiedades' target="_blank" rel="noopener noreferrer" class="boton" aria-label="Contactar por WhatsApp si quieres vender tu propiedad">¿Quieres vender tu propiedad?</a>
                <a href='https://api.whatsapp.com/send?phone=573158774545&text=%C2%A1Hola!%20Estoy%20interesado%2Fa%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20inmuebles.%20%C2%BFPodr%C3%ADas%20proporcionarme%20detalles%20adicionales%2C%20por%20favor%3F' title='Agendar reunión por WhatsApp con asesores' target="_blank" rel="noopener noreferrer" class="boton_secondary" aria-label="Agendar una reunión con nuestros asesores de venta">Agenda una reunión con nuestros asesores</a>
            </div>
        </div>
        <div class="servicio_items">
            <ul role="list" aria-label="Características del servicio de venta de inmuebles">
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Evaluación precisa del valor del inmueble.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Promoción activa en portales y redes.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Gestión de visitas, negociaciones y documentación.</li>
                <li><i class="fa-solid fa-caret-right" aria-hidden="true"></i> Asesoría legal en cada etapa del proceso.</li>
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
                    <p itemprop="description">Equipo multidisciplinario de agentes, abogados y tasadores que brindan soporte en cada fase desde la valoración hasta la firma garantizando seguridad y precisión.</p>
                </div>
                <span class="fa-solid fa-user-tie" aria-hidden="true"></span>
            </div>
            <div class="beneficios_card" itemscope itemtype="https://schema.org/Thing">
                <div class="beneficios_card_title">
                    <h3 itemprop="name">Eficiencia en Procesos Transaccionales</h3>
                </div>
                <div class="beneficios_card_text">
                    <p itemprop="description">Protocolos optimizados y tecnología que reducen tiempos de cierre y minimizan errores administrativos.</p>
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