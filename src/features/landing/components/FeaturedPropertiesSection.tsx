"use client";

import { useMemo, useState } from "react";
import { properties } from "../data/landing-data";
import { Icon } from "@/components/ui/Icon";
import { ImageSlot } from "@/components/ui/ImageSlot";

type PropertyFilter = "Todos" | "Venta" | "Arriendo";
const propertyFilters: PropertyFilter[] = ["Todos", "Venta", "Arriendo"];

export function FeaturedPropertiesSection() {
  const [filter, setFilter] = useState<PropertyFilter>("Todos");

  const visibleProperties = useMemo(
    () => (filter === "Todos" ? properties : properties.filter((property) => property.mode === filter)),
    [filter]
  );

  return (
    <section className="section" id="propiedades">
      <div className="section-heading">
        <div>
          <h2>Propiedades destacadas</h2>
          <p>Las oportunidades más atractivas del momento.</p>
        </div>
        <div className="segmented" aria-label="Filtrar propiedades">
          {propertyFilters.map((item) => (
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
  );
}
