"use client";

import { useMemo, useState } from "react";
import {
  articles,
  benefits,
  faqs,
  processSteps,
  properties,
  services,
  trustStats
} from "../data/landing-data";

type PropertyFilter = "Todos" | "Venta" | "Arriendo";

const navItems = ["Inicio", "Propiedades", "Servicios", "Capta tu inmueble", "Referidos", "Blog", "Nosotros", "Contacto"];

function Icon({ name, tone = "green" }: { name: string; tone?: "green" | "blue" | "muted" }) {
  return <i aria-hidden="true" className={`fa-solid ${name} icon icon--${tone}`} />;
}

function ImageSlot({ label, compact = false }: { label: string; compact?: boolean }) {
  return (
    <div className={`image-slot ${compact ? "image-slot--compact" : ""}`} role="img" aria-label={label}>
      <i aria-hidden="true" className="fa-regular fa-image" />
      <span>{label}</span>
    </div>
  );
}

export function LandingPage() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [filter, setFilter] = useState<PropertyFilter>("Todos");
  const [openFaq, setOpenFaq] = useState(0);

  const visibleProperties = useMemo(
    () => (filter === "Todos" ? properties : properties.filter((property) => property.mode === filter)),
    [filter]
  );

  return (
    <>
      <header className="site-header">
        <a className="brand" href="#inicio" aria-label="Vivantia Inmobiliaria">
          <span className="brand-mark">V</span>
          <span>
            <strong>VIVANTIA</strong>
            <small>INMOBILIARIA</small>
          </span>
        </a>

        <button
          className="menu-button"
          type="button"
          aria-expanded={isMenuOpen}
          aria-controls="main-navigation"
          onClick={() => setIsMenuOpen((current) => !current)}
        >
          <i aria-hidden="true" className="fa-solid fa-bars" />
          <span className="sr-only">Abrir navegación</span>
        </button>

        <nav id="main-navigation" className={`main-nav ${isMenuOpen ? "main-nav--open" : ""}`} aria-label="Principal">
          {navItems.map((item) => (
            <a key={item} href={`#${item.toLowerCase().replaceAll(" ", "-")}`}>
              {item}
            </a>
          ))}
        </nav>

        <div className="header-actions">
          <a className="button button--ghost" href="#propiedades">
            <Icon name="fa-magnifying-glass" tone="blue" />
            Buscar Propiedades
          </a>
          <a className="button button--primary" href="#publicar">
            Publica tu Inmueble
          </a>
        </div>
      </header>

      <main>
        <section className="hero" id="inicio">
          <div className="hero-copy">
            <p className="eyebrow">
              <Icon name="fa-people-roof" />
              Más de 2.500 familias ayudadas
            </p>
            <h1>
              Encuentra el <span>hogar</span> ideal o deja tu <em>inmueble</em> en manos expertas
            </h1>
            <p>
              Te acompañamos en la compra, arriendo y administración de inmuebles con procesos transparentes,
              asesoría profesional y resultados comprobados.
            </p>
            <div className="hero-actions">
              <a className="button button--blue" href="#propiedades">
                <Icon name="fa-magnifying-glass" tone="muted" />
                Buscar Propiedades
              </a>
              <a className="button button--outline" href="#publicar">
                <Icon name="fa-house-circle-check" />
                Quiero Publicar mi Inmueble
              </a>
            </div>
            <ul className="hero-checks" aria-label="Beneficios principales">
              {["Asesoría personalizada", "Acompañamiento legal", "Publicación en múltiples portales", "Atención rápida"].map(
                (item) => (
                  <li key={item}>
                    <Icon name="fa-circle-check" />
                    {item}
                  </li>
                )
              )}
            </ul>
          </div>

          <div className="hero-media">
            <div className="hero-stats" aria-label="Resultados destacados">
              {trustStats.map((stat, index) => (
                <article key={stat.label} className="stat-card">
                  <Icon name={stat.icon} tone={index === 1 ? "blue" : "green"} />
                  <strong>{stat.value}</strong>
                  <span>{stat.label}</span>
                </article>
              ))}
            </div>
            <ImageSlot label="Espacio para imagen principal de inmueble" />
          </div>
        </section>

        <section className="section section--center" id="nosotros">
          <p className="section-kicker">¿Por qué confiar en nosotros?</p>
          <h2>Convertimos procesos inmobiliarios complejos en experiencias simples y seguras.</h2>
          <div className="benefit-grid">
            {benefits.map((benefit, index) => (
              <article className="feature-card" key={benefit.title}>
                <Icon name={benefit.icon} tone={index % 2 ? "blue" : "green"} />
                <h3>{benefit.title}</h3>
                <p>{benefit.description}</p>
              </article>
            ))}
          </div>
        </section>

        <section className="section" id="propiedades">
          <div className="section-heading">
            <div>
              <h2>Propiedades destacadas</h2>
              <p>Las oportunidades más atractivas del momento.</p>
            </div>
            <div className="segmented" aria-label="Filtrar propiedades">
              {(["Todos", "Venta", "Arriendo"] as PropertyFilter[]).map((item) => (
                <button key={item} type="button" className={filter === item ? "is-active" : ""} onClick={() => setFilter(item)}>
                  {item}
                </button>
              ))}
            </div>
          </div>

          <div className="property-grid">
            {visibleProperties.map((property) => (
              <article className="property-card" key={property.id}>
                <div className="property-media">
                  <span className={`badge ${property.mode === "Venta" ? "badge--green" : "badge--blue"}`}>{property.mode}</span>
                  <button className="favorite-button" type="button" aria-label={`Guardar ${property.title}`}>
                    <i aria-hidden="true" className="fa-regular fa-heart" />
                  </button>
                  <ImageSlot label={`Espacio para imagen de ${property.title}`} compact />
                </div>
                <div className="property-body">
                  <strong>{property.price}</strong>
                  <h3>{property.title}</h3>
                  <p>
                    <Icon name="fa-location-dot" tone="blue" />
                    {property.location}
                  </p>
                  <ul>
                    {[property.area, property.rooms, property.baths].map((value) => (
                      <li key={value}>{value}</li>
                    ))}
                  </ul>
                  <a href="#contacto">Ver propiedad</a>
                </div>
              </article>
            ))}
          </div>
        </section>

        <section className="service-band" id="servicios">
          <div className="service-intro">
            <p className="section-kicker">Nuestros servicios</p>
            <h2>Soluciones inmobiliarias para cada necesidad</h2>
          </div>
          <div className="service-grid">
            {services.map((service, index) => (
              <article className="feature-card feature-card--compact" key={service.title}>
                <Icon name={service.icon} tone={index % 2 ? "blue" : "green"} />
                <h3>{service.title}</h3>
                <p>{service.description}</p>
                <a href="#contacto">Conocer más</a>
              </article>
            ))}
          </div>
        </section>

        <section className="section process-section">
          <h2>Así funciona nuestro proceso</h2>
          <div className="process-grid">
            {processSteps.map((step, index) => (
              <article className="process-step" key={step.label}>
                <span className="step-number">{index + 1}</span>
                <span className="step-icon">
                  <Icon name={step.icon} tone={index % 2 ? "blue" : "green"} />
                </span>
                <h3>{step.label}</h3>
                <p>{step.description}</p>
              </article>
            ))}
          </div>
        </section>

        <section className="cta-panel" id="publicar">
          <div>
            <h2>¿Tienes un inmueble para vender o arrendar?</h2>
            <p>Nos encargamos de todo el proceso para que obtengas mejores resultados con menos preocupaciones.</p>
          </div>
          <ul>
            {["Fotografía profesional", "Difusión en múltiples portales", "Gestión de visitas", "Estudio de clientes", "Acompañamiento legal"].map(
              (item) => (
                <li key={item}>
                  <Icon name="fa-check" tone="muted" />
                  {item}
                </li>
              )
            )}
          </ul>
          <a className="button button--light" href="#contacto">
            <Icon name="fa-house" />
            Publicar mi inmueble
          </a>
          <ImageSlot label="Espacio para imagen de asesoría" />
        </section>

        <section className="results-band">
          <div>
            <span>Resultados que generan confianza</span>
            <strong>3.500+</strong>
            <p>Propiedades gestionadas</p>
          </div>
          <div>
            <span>Clientes satisfechos</span>
            <strong>2.300+</strong>
            <p>Historias acompañadas</p>
          </div>
          <div>
            <span>Tasa de ocupación</span>
            <strong>97%</strong>
            <p>Gestión comercial efectiva</p>
          </div>
        </section>

        <section className="split-section">
          <div className="testimonial-panel">
            <h2>Lo que dicen nuestros clientes</h2>
            <div className="testimonial-grid">
              {["María Fernanda G.", "Carlos A. Rojas", "Juliana Patiño"].map((person) => (
                <article key={person} className="testimonial-card">
                  <ImageSlot label={`Espacio para foto de ${person}`} compact />
                  <h3>{person}</h3>
                  <p>“Servicio claro, cercano y profesional desde el primer contacto.”</p>
                  <span aria-label="Calificación de cinco estrellas">★★★★★</span>
                </article>
              ))}
            </div>
          </div>
          <aside className="referral-panel" id="referidos">
            <h2>Gana recomendando inmuebles</h2>
            <p>Si conoces a alguien que quiere vender o arrendar una propiedad, puedes recibir una recompensa.</p>
            <div className="referral-flow">
              {["Recomiendas", "Validamos", "Cerramos negocio", "Recibes beneficio"].map((item) => (
                <span key={item}>{item}</span>
              ))}
            </div>
            <a className="button button--outline" href="#contacto">Conocer programa de referidos</a>
          </aside>
        </section>

        <section className="split-section split-section--bottom" id="blog">
          <div>
            <div className="section-heading">
              <h2>Guías y consejos inmobiliarios</h2>
              <a href="#blog">Ver todos los artículos</a>
            </div>
            <div className="article-grid">
              {articles.map((article) => (
                <article className="article-card" key={article.title}>
                  <ImageSlot label={`Espacio para imagen de ${article.label}`} compact />
                  <span className="badge badge--green">{article.label}</span>
                  <small>{article.date}</small>
                  <h3>{article.title}</h3>
                  <p>{article.description}</p>
                  <a href="#contacto">Leer más</a>
                </article>
              ))}
            </div>
          </div>

          <aside className="faq-panel">
            <h2>Preguntas frecuentes</h2>
            {faqs.map((question, index) => (
              <div className="faq-item" key={question}>
                <button type="button" aria-expanded={openFaq === index} onClick={() => setOpenFaq(index)}>
                  {question}
                  <i aria-hidden="true" className={`fa-solid ${openFaq === index ? "fa-minus" : "fa-plus"}`} />
                </button>
                {openFaq === index ? <p>Recibimos tu solicitud, validamos la información y te acompañamos paso a paso.</p> : null}
              </div>
            ))}
          </aside>
        </section>

        <section className="final-cta" id="contacto">
          <h2>¿Listo para encontrar tu próximo inmueble o publicar el tuyo?</h2>
          <div>
            <a className="button button--light" href="mailto:hola@vivantiainmobiliaria.com">Hablar con un asesor</a>
            <a className="button button--outline-light" href="#publicar">Publicar mi inmueble</a>
          </div>
        </section>
      </main>

      <footer className="site-footer">
        <div>
          <a className="brand brand--footer" href="#inicio" aria-label="Vivantia Inmobiliaria">
            <span className="brand-mark">V</span>
            <span>
              <strong>VIVANTIA</strong>
              <small>INMOBILIARIA</small>
            </span>
          </a>
          <p>Servicios inmobiliarios modernos en Colombia para comprar, vender, arrendar y administrar propiedades.</p>
        </div>
        <nav aria-label="Enlaces de pie de página">
          <a href="#nosotros">Nosotros</a>
          <a href="#propiedades">Venta</a>
          <a href="#servicios">Servicios</a>
          <a href="#contacto">Contacto</a>
        </nav>
        <address>
          <span>Medellín, Antioquia</span>
          <a href="tel:+573001234567">+57 300 123 4567</a>
          <a href="mailto:hola@vivantiainmobiliaria.com">hola@vivantiainmobiliaria.com</a>
        </address>
      </footer>
    </>
  );
}
