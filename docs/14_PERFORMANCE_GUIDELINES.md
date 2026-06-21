# 14. Guía de Performance

## Objetivo

Mantener aplicaciones Next.js rápidas, estables y medibles desde el inicio.

## Métricas principales

Monitorear:

- LCP;
- CLS;
- INP;
- TTFB;
- tamaño de JavaScript;
- tiempo de hidratación;
- peso de imágenes;
- errores de render.

## Rendering

- Usar Server Components por defecto.
- Evitar Client Components innecesarios.
- Elegir SSG, SSR, ISR o rendering dinámico según datos reales.
- No forzar rendering dinámico sin justificación.
- Cachear datos públicos cuando sea seguro.

## JavaScript

- Reducir bundles de cliente.
- Cargar librerías pesadas bajo demanda.
- Evitar dependencias grandes para tareas simples.
- Dividir código por ruta o interacción.
- Medir impacto antes de añadir SDKs.

## Imágenes y fuentes

- Usar `next/image` cuando aplique.
- Definir dimensiones o proporción.
- Usar formatos modernos.
- Lazy load para imágenes no críticas.
- Optimizar fuentes con `next/font`.
- Evitar cambios de layout por fuentes o imágenes.

## Criterios de aceptación

- La aplicación no envía JavaScript innecesario.
- Las imágenes tienen dimensiones y `alt`.
- Las rutas críticas tienen estrategia de caché.
- No hay CLS evidente.
- El build permite revisar tamaño de bundles.
