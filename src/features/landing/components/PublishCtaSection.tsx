import { publishBenefits } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";
import Image from "next/image";
// import { ImageSlot } from "@/components/ui/ImageSlot";

export function PublishCtaSection() {
  return (
    <section className="cta-panel" id="publicar">
      <div>
        <h2>¿Tienes un inmueble para vender o arrendar?</h2>
        <p>Nos encargamos de todo el proceso para que obtengas mejores resultados con menos preocupaciones.</p>
      </div>
      <ul>
        {publishBenefits.map((item) => (
          <li key={item}>
            <Icon name="fa-check" tone="muted" />
            {item}
          </li>
        ))}
      </ul>
      <a className="button button--light" href="#contacto">
        <Icon name="fa-house" />
        Publicar mi inmueble
      </a>


      <Image className="venta-arriendo"
        src="/images/venta-arriendo.webp"
        alt="Venta y arriendo"
        width={600}
        height={400}
      />
    </section>
  );
}


