# 03. Guía del App Router

## Objetivo

Usar App Router de forma consistente, aprovechando Server Components, layouts anidados, metadata y manejo nativo de estados.

## Principios

- Server Components por defecto.
- Client Components solo para interactividad, estado local, efectos o APIs del navegador.
- Fetching cerca de la ruta cuando el dato es específico de esa pantalla.
- Servicios compartidos cuando el dato pertenece a una feature o integración.
- Metadata definida por ruta cuando tenga impacto SEO.

## Archivos especiales

- `layout.tsx`: estructura persistente del segmento.
- `page.tsx`: contenido principal de la ruta.
- `loading.tsx`: estado de carga del segmento.
- `error.tsx`: manejo de errores recuperables del segmento.
- `not-found.tsx`: respuesta para contenido inexistente.
- `route.ts`: endpoint HTTP del segmento.
- `template.tsx`: remonta UI entre navegaciones cuando sea necesario.

## Segmentos

Usar:

- `(group)` para organizar sin afectar URL.
- `[id]` para rutas dinámicas.
- `[...slug]` para rutas catch-all justificadas.
- `[[...slug]]` solo cuando el segmento sea realmente opcional.

## Metadata

Cada ruta pública importante debe definir:

- `title`;
- `description`;
- canonical cuando aplique;
- Open Graph;
- Twitter Card si aplica;
- robots cuando la página no debe indexarse;
- datos estructurados cuando sean relevantes.

## Caching y rendering

Definir por ruta:

- estática;
- dinámica;
- revalidación incremental;
- caché por request;
- caché por recurso;
- `no-store` para datos sensibles.

No usar `force-dynamic` como solución genérica. Debe justificarse.

## Route Handlers

Todo `route.ts` debe:

- validar método HTTP;
- validar entrada;
- autenticar si corresponde;
- autorizar si corresponde;
- manejar errores;
- no exponer secretos;
- responder con códigos HTTP correctos.

## Criterios de aceptación

- Las rutas tienen responsabilidad clara.
- Las rutas públicas tienen metadata adecuada.
- Los errores y estados vacíos están definidos.
- No se usan Client Components innecesarios.
- La estrategia de caché está documentada.
