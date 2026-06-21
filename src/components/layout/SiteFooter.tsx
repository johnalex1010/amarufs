import { Brand } from "./Brand";

export function SiteFooter() {
  return (
    <footer className="site-footer">
      <div>
        <Brand footer />
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
  );
}
