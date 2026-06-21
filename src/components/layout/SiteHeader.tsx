"use client";

import { useState } from "react";
import { navItems } from "@/features/landing/data/landing-data";
import { Icon } from "@/components/ui/Icon";
import { Brand } from "./Brand";

export function SiteHeader() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  return (
    <header className="site-header">
      <Brand />

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
  );
}
