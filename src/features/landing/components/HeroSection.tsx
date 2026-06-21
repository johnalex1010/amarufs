import Image from "next/image";
import { heroChecks, trustStats } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";

export function HeroSection() {
  return (
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
          {heroChecks.map((item) => (
            <li key={item}>
              <Icon name="fa-circle-check" />
              {item}
            </li>
          ))}
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
        <Image
          className="hero-image"
          src="/images/hero.webp"
          alt="Casa moderna iluminada como propiedad destacada de Vivantia Inmobiliaria"
          fill
          priority
          sizes="(max-width: 1100px) 100vw, 55vw"
        />
      </div>
    </section>
  );
}
