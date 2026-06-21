export type Property = {
  id: string;
  mode: "Venta" | "Arriendo";
  price: string;
  title: string;
  location: string;
  area: string;
  rooms: string;
  baths: string;
};

export type Service = {
  icon: string;
  title: string;
  description: string;
};

export type ProcessStep = {
  icon: string;
  label: string;
  description: string;
};

export const navItems = ["Inicio", "Propiedades", "Servicios", "Capta tu inmueble", "Referidos", "Blog", "Nosotros", "Contacto"];

export const heroChecks = ["Asesoría personalizada", "Acompañamiento legal", "Publicación en múltiples portales", "Atención rápida"];

export const trustStats = [
  { icon: "fa-building", value: "1.250+", label: "Propiedades administradas" },
  { icon: "fa-city", value: "680+", label: "Inmuebles vendidos" },
  { icon: "fa-hand-holding-heart", value: "2.300+", label: "Clientes satisfechos" }
];

export const benefits = [
  {
    icon: "fa-shield-halved",
    title: "Transparencia total",
    description: "Información clara, contratos sin letra pequeña y comunicación constante."
  },
  {
    icon: "fa-scale-balanced",
    title: "Acompañamiento legal",
    description: "Te guiamos en cada paso con respaldo jurídico especializado."
  },
  {
    icon: "fa-people-group",
    title: "Equipo especializado",
    description: "Profesionales con experiencia en negociación, avalúos y comercialización."
  },
  {
    icon: "fa-building-user",
    title: "Gestión integral",
    description: "Nos encargamos de todo el proceso para que ahorres tiempo."
  }
];

export const properties: Property[] = [
  {
    id: "poblado",
    mode: "Venta",
    price: "$850.000.000",
    title: "Apartamento en El Poblado",
    location: "Medellín, Antioquia",
    area: "120 m²",
    rooms: "3 Hab.",
    baths: "3 Baños"
  },
  {
    id: "chico",
    mode: "Arriendo",
    price: "$4.200.000 /mes",
    title: "Apartamento en Chicó Norte",
    location: "Bogotá D.C.",
    area: "90 m²",
    rooms: "2 Hab.",
    baths: "2 Baños"
  },
  {
    id: "florida",
    mode: "Venta",
    price: "$1.350.000.000",
    title: "Casa en La Florida",
    location: "Cali, Valle del Cauca",
    area: "250 m²",
    rooms: "4 Hab.",
    baths: "4 Baños"
  },
  {
    id: "laureles",
    mode: "Arriendo",
    price: "$3.800.000 /mes",
    title: "Apartamento en Laureles",
    location: "Medellín, Antioquia",
    area: "110 m²",
    rooms: "3 Hab.",
    baths: "2 Baños"
  }
];

export const services: Service[] = [
  {
    icon: "fa-building",
    title: "Administración de inmuebles",
    description: "Maximizamos el valor de tu inmueble con gestión profesional."
  },
  {
    icon: "fa-house-chimney",
    title: "Venta de inmuebles",
    description: "Estrategias efectivas para vender tu propiedad al mejor precio."
  },
  {
    icon: "fa-chart-line",
    title: "Avalúos",
    description: "Avalúos comerciales y catastrales con respaldo profesional."
  },
  {
    icon: "fa-users",
    title: "Asesoría inmobiliaria",
    description: "Te asesoramos para tomar decisiones seguras y rentables."
  }
];

export const processSteps: ProcessStep[] = [
  { icon: "fa-comments", label: "Contacto inicial", description: "Nos cuentas tu necesidad y te escuchamos." },
  { icon: "fa-file-signature", label: "Valoración", description: "Evaluamos tu inmueble y definimos la mejor estrategia." },
  { icon: "fa-bullhorn", label: "Promoción estratégica", description: "Publicamos en canales con marketing profesional." },
  { icon: "fa-handshake", label: "Negociación", description: "Te acompañamos en las negociaciones para lograr el mejor acuerdo." },
  { icon: "fa-circle-check", label: "Cierre exitoso", description: "Gestionamos todo el proceso hasta la firma final." }
];

export const publishBenefits = [
  "Fotografía profesional",
  "Difusión en múltiples portales",
  "Gestión de visitas",
  "Estudio de clientes",
  "Acompañamiento legal"
];

export const resultStats = [
  { eyebrow: "Resultados que generan confianza", value: "3.500+", label: "Propiedades gestionadas" },
  { eyebrow: "Clientes satisfechos", value: "2.300+", label: "Historias acompañadas" },
  { eyebrow: "Tasa de ocupación", value: "97%", label: "Gestión comercial efectiva" }
];

export const testimonials = ["María Fernanda G.", "Carlos A. Rojas", "Juliana Patiño"];

export const referralSteps = ["Recomiendas", "Validamos", "Cerramos negocio", "Recibes beneficio"];

export const articles = [
  {
    label: "Compra",
    date: "15 mayo, 2026",
    title: "Qué debes tener en cuenta antes de comprar una propiedad",
    description: "Consejos clave para tomar la mejor decisión de inversión."
  },
  {
    label: "Arriendo",
    date: "10 mayo, 2026",
    title: "Tips para arrendar tu inmueble más rápido",
    description: "Estrategias efectivas para atraer mejores inquilinos."
  },
  {
    label: "Inversión",
    date: "5 mayo, 2026",
    title: "Zonas con mayor valorización en Colombia",
    description: "Descubre dónde invertir tu dinero de forma inteligente."
  }
];

export const faqs = [
  "¿Cómo publico mi inmueble?",
  "¿Cuánto cuesta la administración?",
  "¿Qué documentos necesito?",
  "¿Cómo agendo una visita?",
  "¿Cómo funciona el programa de referidos?"
];
