# Amarufs Headless Frontend

Frontend headless para Amarufs Inmobiliaria construido con Astro.

El proyecto vive dentro de la ruta del tema WordPress, pero la base actual es una aplicación Astro estática. Los cambios deben cuidar SEO, accesibilidad, performance y compatibilidad futura con WordPress o integraciones headless.

## Stack tecnológico

- Astro 5.
- TypeScript con configuración estricta.
- npm con `package-lock.json`.
- `astro-icon` con paquetes `@iconify-json/simple-icons` y `@iconify-json/solar`.
- Alias interno `@/*` apuntando a `src/*`.

## Requisitos

- Node.js compatible con Astro 5.
- npm.

## Instalación

```bash
npm install
```

## Variables de entorno

Actualmente no hay variables de entorno obligatorias documentadas. No se deben crear ni usar secretos en el código fuente. Si una integración futura requiere variables, deben documentarse aquí y mantenerse fuera del repositorio.

## Comandos

```bash
npm run dev
```

Inicia el servidor de desarrollo de Astro con host `0.0.0.0`.

```bash
npm run build
```

Ejecuta `astro check` y genera el build de producción.

```bash
npm run preview
```

Sirve localmente el build generado para revisión.

## Estructura

```text
src/
  layouts/
    BaseLayout.astro          — layout base con metadatos comunes, importa estilos globales
  components/
    SiteHeader.astro          — header de navegación (logo, nav desktop, nav móvil)
    PageHero.astro            — hero reutilizable para páginas internas
    SiteFooter.astro          — footer del sitio
  pages/
    index.astro               — página de inicio
    nosotros.astro            — página de nosotros
    propiedades/
      index.astro             — listado de propiedades
      [slug].astro            — detalle de propiedad (sin rutas hasta conectar fuente de datos)
  styles/
    global.css                — reset, CSS custom properties de design tokens y layout
    fonts.css                 — @font-face y variables --font-sans / --font-display
public/
  fonts/                      — archivos TTF de Google Sans y Playfair Display
  images/                     — assets de imagen del sitio
astro.config.mjs
package.json
tsconfig.json
```

## Convenciones de código limpio

El proyecto debe mantenerse con código limpio, mantenible y escalable:

- Usar nombres descriptivos para archivos, componentes, variables, funciones y props.
- Mantener componentes y funciones con responsabilidad única.
- Evitar lógica críptica, abreviaturas innecesarias y condicionales difíciles de seguir.
- No duplicar lógica; extraer utilidades o componentes solo cuando exista una repetición real.
- Separar contenido, presentación y lógica sin crear abstracciones innecesarias.
- Comentar solo decisiones, restricciones o contexto que no sea evidente en el código.
- Manejar errores, estados vacíos y datos faltantes de forma explícita.
- Mantener imports y carpetas organizados por responsabilidad.
- No dejar `console.log`, código comentado, mocks accidentales, TODO críticos ni debugging.

## Sistema de tokens de diseño

Los colores de marca, sombras y variables de layout están centralizados como CSS custom properties en `src/styles/global.css`. Todo nuevo estilo debe usar estas variables — nunca valores literales de color o sombra de marca.

**Colores disponibles:**

```css
var(--color-navy)        /* #000043 — texto principal */
var(--color-blue)        /* #1246c0 — azul de acción */
var(--color-green)       /* #00b98f — verde de marca */
var(--color-green-dark)  /* #00a982 — verde oscuro */
var(--color-teal)        /* #00e1ad — teal de acento */
var(--color-mint)        /* #00c99a — mint */
var(--color-purple)      /* #595bff — púrpura */
var(--color-orange)      /* #f49b00 — naranja */
```

**Sombras disponibles:**

```css
var(--shadow-button)   /* botones primarios y CTAs */
var(--shadow-card)     /* tarjetas de contenido */
var(--shadow-header)   /* header fijo */
var(--shadow-panel)    /* paneles elevados */
```

**Layout:**

```css
var(--site-max-width)          /* 1400px */
var(--site-padding-x)          /* 40px */
var(--site-padding-x-mobile)   /* 28px */
```

Expresión de contenedor estándar:

```css
width: min(calc(100% - var(--site-padding-x)), var(--site-max-width));
```

## Tipografía

Las fuentes se cargan desde `public/fonts/` mediante `@font-face` en `src/styles/fonts.css`.

| Variable | Fuente | Pesos disponibles |
|---|---|---|
| `--font-sans` | Google Sans | 400, 500, 700 |
| `--font-display` | Playfair Display | 400, 500, 600 |

No usar `font-weight` fuera de los valores declarados. El navegador sintetiza negritas artificiales para pesos sin archivo TTF correspondiente, produciendo resultados visuales inconsistentes.

## Rutas actuales

- `/nosotros`
- `/propiedades`
- `/propiedades/[slug]`

La ruta dinámica de propiedades existe, pero actualmente `getStaticPaths()` retorna una lista vacía. No se generan detalles de propiedades hasta conectar una fuente de datos y definir los slugs.

## Alias

El alias `@/*` apunta a `src/*` y se usa para imports internos:

```astro
import BaseLayout from '@/layouts/BaseLayout.astro';
```

## SEO y accesibilidad

- Usar un solo `h1` por página salvo justificación clara.
- Definir `title` y `description` relevantes desde `BaseLayout`.
- Mantener HTML semántico.
- Evitar contenido crítico dependiente solo de JavaScript.
- No duplicar metadatos si luego se integra con Yoast SEO o WordPress.
- Mantener el contenido visible alineado con títulos, descripciones y entidades del sitio.
- No inventar precios, disponibilidad, ubicaciones, ratings, testimonios ni datos comerciales.

## Archivos generados

No editar manualmente:

- `dist/`
- `.astro/`
- `node_modules/`
- archivos `*.log`

Estos archivos se generan por herramientas locales y pueden sobrescribirse.

## Flujo de desarrollo recomendado

1. Definir una SPEC proporcional al cambio.
2. Revisar impacto en SEO, accesibilidad, performance y seguridad.
3. Implementar cambios pequeños y reversibles en archivos fuente.
4. Validar con los comandos disponibles.
5. Documentar riesgos, pendientes y rollback cuando aplique.

## Validación recomendada

Antes de cerrar un cambio:

```bash
npm run build
```

Si el cambio afecta interfaz, revisar también en navegador con `npm run dev` o `npm run preview`.

## Despliegue o preview

El build de producción se genera en `dist/` mediante `npm run build`. Para revisión local del resultado generado, usar:

```bash
npm run preview
```

No se debe editar `dist/` manualmente; cualquier cambio debe venir desde `src/`, configuración o assets originales.

## Troubleshooting básico

- Si el build falla por tipos o plantillas, revisar primero el error de `astro check`.
- Si una ruta dinámica no aparece, confirmar que `getStaticPaths()` retorne slugs reales.
- Si un asset no carga, validar que exista dentro de `public/` y que la ruta usada sea absoluta desde la raíz pública.
- Si hay caracteres rotos, confirmar que el archivo esté guardado en UTF-8.

## Riesgos conocidos

- El proyecto está dentro de una ruta de tema WordPress, pero la integración activa con WordPress no está asumida ni documentada.
- La ruta `/propiedades/[slug]` existe, pero no genera páginas hasta conectar una fuente de datos.
- Cualquier integración futura con WordPress, APIs, formularios o datos de propiedades requiere contrato documentado antes de implementarse.

## Rollback

Para revertir un cambio puntual, deshacer los archivos modificados en la rama actual. Si el problema proviene de salida generada, regenerar con `npm run build` en vez de editar `dist/` manualmente.
