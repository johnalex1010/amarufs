import { benefits } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";

export function TrustSection() {
  return (
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
  );
}
