import { referralSteps, testimonials } from "../data/landing-data";
import { ImageSlot } from "@/components/ui/ImageSlot";
import Image from "next/image";

export function TestimonialsReferralSection() {
  return (
    <section className="split-section">
      <div className="testimonial-panel">
        <h2>Lo que dicen nuestros clientes</h2>
        <div className="testimonial-grid">
          {testimonials.map((person) => (
            <article key={person} className="testimonial-card">
              <Image src="/images/testimonial.webp" alt={`Foto de ${person}`} width={50} height={50} />
              {/* <ImageSlot label={`Espacio para foto de ${person}`} compact /> */}
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
          {referralSteps.map((item) => (
            <span key={item}>{item}</span>
          ))}
        </div>
        <a className="button button--outline" href="#contacto">
          Conocer programa de referidos
        </a>
      </aside>
    </section>
  );
}
