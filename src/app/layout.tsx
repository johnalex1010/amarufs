import type { Metadata, Viewport } from "next";
import "@fortawesome/fontawesome-free/css/all.min.css";
import "@fontsource/bebas-neue/400.css";
import "@fontsource/outfit/400.css";
import "./globals.css";

export const metadata: Metadata = {
  title: "Vivantia Inmobiliaria | Propiedades, arriendos y administración",
  description:
    "Landing inmobiliaria para búsqueda de propiedades, publicación de inmuebles, administración, avalúos y asesoría especializada.",
  openGraph: {
    title: "Vivantia Inmobiliaria",
    description:
      "Encuentra tu hogar ideal o deja tu inmueble en manos expertas con asesoría inmobiliaria integral.",
    type: "website",
    locale: "es_CO"
  }
};

export const viewport: Viewport = {
  width: "device-width",
  initialScale: 1
};

export default function RootLayout({
  children
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="es-CO">
      <body>{children}</body>
    </html>
  );
}
