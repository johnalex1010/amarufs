import { services } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";

export function ServicesSection() {
  return (
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
  );
}
