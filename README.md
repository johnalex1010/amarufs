# Vivantia Inmobiliaria Mockup

Mockup de landing inmobiliaria construido con Next.js para representar una experiencia tipo Vivantia: búsqueda de propiedades, publicación de inmuebles, servicios inmobiliarios, proceso comercial, referidos, artículos y preguntas frecuentes.

## Stack tecnológico

- Framework: Next.js con App Router.
- Lenguaje: TypeScript en modo estricto.
- UI: React.
- Estilos: CSS global con tokens de diseño.
- Iconografía: Font Awesome Free mediante `@fortawesome/fontawesome-free`.
- Fuentes: Bebas Neue y Outfit mediante Fontsource.

## Requisitos

- Node.js 20 o superior.
- npm 10 o superior.

## Instalación

```bash
npm install
```

## Variables de entorno

Este mockup no requiere variables de entorno.

## Scripts disponibles

```bash
npm run dev
npm run typecheck
npm run lint
npm run build
npm run start
```

## Flujo de desarrollo

1. Instalar dependencias.
2. Ejecutar `npm run dev`.
3. Abrir `http://localhost:3000`.
4. Modificar archivos fuente en `src/`.
5. Validar con typecheck, lint y build antes de entregar.

## Flujo de build

```bash
npm run build
npm run start
```

## Estructura principal

```txt
src/
  app/
    layout.tsx
    page.tsx
    globals.css
  features/
    landing/
      components/
      data/
public/
  fonts/
  images/
docs/
```

## Convenciones relevantes

- Todo contenido visible se mantiene en español Colombia.
- No se incluyen imágenes inventadas, generadas ni descargadas.
- Los espacios de imagen quedan como placeholders hasta recibir assets finales.
- Las fuentes se importan desde `@fontsource/bebas-neue` y `@fontsource/outfit`.
- La iconografía debe mantenerse en Font Awesome Free.
- No modificar manualmente archivos generados como `.next/` o `node_modules/`.

## Ejecución de pruebas

Este mockup no incluye pruebas automatizadas de UI. La validación mínima obligatoria es:

```bash
npm run typecheck
npm run lint
npm run build
```

## Despliegue

El proyecto puede desplegarse en cualquier hosting compatible con Next.js. Antes de publicar, agregar los assets finales y validar rendimiento, accesibilidad y SEO.

## Troubleshooting básico

- Si las fuentes no se ven, confirmar que `npm install` haya instalado los paquetes `@fontsource/bebas-neue` y `@fontsource/outfit`.
- Si los iconos no cargan, confirmar que `npm install` haya instalado `@fortawesome/fontawesome-free`.
- Si el puerto `3000` está ocupado, ejecutar `npm run dev -- -p 3001`.

## Riesgos conocidos

- Los datos son estáticos y deben reemplazarse por contenido comercial validado.
- Los espacios de imagen deben completarse con assets optimizados antes de producción.
- Las fuentes se incluyen como dependencias npm; si el proyecto requiere archivos propios, reemplazar Fontsource por assets locales autorizados.

## Rollback

Consultar `docs/26_LANDING_MOCKUP_SPEC.md` para archivos afectados y pasos de reversión.
