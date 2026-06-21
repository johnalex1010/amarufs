"use client";

import { useState } from "react";
import { articles, faqs } from "../data/landing-data";
import { ImageSlot } from "@/components/ui/ImageSlot";

export function BlogFaqSection() {
  const [openFaq, setOpenFaq] = useState(0);

  return (
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
  );
}
