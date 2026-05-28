# Plan de Optimización de Código — Amarufs Headless Frontend

**Fecha:** 2026-05-28
**Base auditada:** `src/` completo — layouts, components, pages, styles
**Stack:** Astro 5 + TypeScript strict + astro-icon

---

## Resumen ejecutivo

La auditoría identificó **7 oportunidades de optimización** clasificadas en tres niveles de severidad. Ningún hallazgo representa un riesgo de seguridad activo ni rompe el build. El mayor impacto está en mantenibilidad y consistencia visual: actualmente los colores de marca y las sombras están escritos como valores hexadecimales literales en más de 5 archivos, lo que hace que cualquier cambio de paleta requiera ediciones en múltiples lugares con riesgo de inconsistencia.

---

## Hallazgos por severidad

### ALTA — Impacto en mantenibilidad y escalabilidad

---

#### OPT-01 · Ausencia de CSS custom properties para design tokens

**Archivo(s):** `src/styles/global.css`, `src/pages/index.astro`, `src/components/HomeHero.astro`, `src/components/SiteFooter.astro`, `src/components/PageHero.astro`

**Problema:**
Los colores de marca, opacidades y sombras están hardcodeados como valores literales repetidos en todos los archivos de estilo. Ejemplos:

- `#000043` aparece ~35 veces en 5 archivos distintos.
- `#1246c0` aparece ~18 veces.
- `#00b98f` / `#00a982` / `#00e1ad` / `#00c99a` aparecen ~25 veces en total.
- `0 18px 36px rgba(0, 123, 255, 0.22)` se repite en 3 archivos.
- `0 22px 48px rgba(0, 0, 67, 0.09)` se repite en 2 archivos.

**Impacto:** Un cambio de paleta o de sombra exige ediciones manuales en múltiples archivos con alto riesgo de inconsistencia visual.

**Solución propuesta:**
Definir los tokens en `:root` dentro de `global.css` y reemplazar los valores literales por variables:

```css
:root {
  /* Colores de marca */
  --color-navy:        #000043;
  --color-blue:        #1246c0;
  --color-green:       #00b98f;
  --color-green-dark:  #00a982;
  --color-teal:        #00e1ad;
  --color-mint:        #00c99a;

  /* Opacidades frecuentes */
  --color-navy-68:     rgba(0, 0, 67, 0.68);
  --color-navy-58:     rgba(0, 0, 67, 0.58);
  --color-navy-12:     rgba(0, 0, 67, 0.12);
  --color-navy-08:     rgba(0, 0, 67, 0.08);

  /* Sombras */
  --shadow-button:     0 18px 36px rgba(0, 123, 255, 0.22);
  --shadow-card:       0 22px 48px rgba(0, 0, 67, 0.09);
  --shadow-header:     0 10px 30px rgba(0, 0, 67, 0.06);
  --shadow-panel:      0 20px 50px rgba(0, 0, 67, 0.11);
}
```

**Clasificación del cambio:** Funcional — afecta múltiples archivos pero es mecánico y reversible.

**Acceptance Criteria:**
- [ ] Todos los valores de color literales de marca están reemplazados por variables en los 5 archivos afectados.
- [ ] El build (`npm run build`) pasa sin errores.
- [ ] El resultado visual es idéntico al estado anterior.
- [ ] No quedan valores literales de los tokens definidos en ningún archivo `src/`.

**Rollback:** Revertir `global.css` y los 5 archivos de componentes a sus versiones anteriores. El build regenera `dist/` automáticamente.

---

#### OPT-02 · CSS global duplicado en `index.astro`

**Archivo(s):** `src/pages/index.astro`

**Problema:**
El bloque `<style>` de `index.astro` redefine reglas que ya existen en `src/styles/global.css` e importadas por `BaseLayout.astro`:

```css
/* En index.astro — ya existe en global.css */
:global(*) { box-sizing: border-box; }
:global(body) { margin: 0; font-family: var(--font-sans); color: #000043; background: #ffffff; }
:global(a) { color: inherit; text-decoration: none; }
:global(button), :global(input) { font: inherit; }
```

**Impacto:** Doble declaración de reglas globales. Si `global.css` cambia (por ejemplo, se actualiza el color de `body`), `index.astro` puede sobrescribirlo silenciosamente con el valor antiguo.

**Solución propuesta:** Eliminar las 4 reglas duplicadas del bloque `<style>` de `index.astro`. Las reglas ya se aplican globalmente vía `BaseLayout.astro` → `global.css`.

**Clasificación del cambio:** Trivial.

**Acceptance Criteria:**
- [ ] Las 4 reglas `:global(*)`, `:global(body)`, `:global(a)`, `:global(button/input)` eliminadas de `index.astro`.
- [ ] El build pasa sin errores.
- [ ] No hay cambio visual en la página de inicio.

**Rollback:** Restaurar las líneas eliminadas de `index.astro`.

---

#### OPT-03 · Pesos de fuente no declarados usados en todo el proyecto

**Archivo(s):** `src/styles/fonts.css`

**Problema:**
Los archivos `@font-face` solo declaran los siguientes pesos para **Google Sans**: 400, 500, 700. Sin embargo, `font-weight: 800` y `font-weight: 900` se usan extensamente en componentes (`HomeHero.astro`, `SiteFooter.astro`, `index.astro`). El navegador sintetiza tipografía en negrita artificial cuando el peso declarado no existe, lo que produce resultados visuales inconsistentes y potencialmente degradados.

Además, `font-weight: 650` se usa en `SiteFooter.astro` y es un valor no estándar en la especificación CSS (solo se acepta en rangos de fuentes variables). En una fuente estática, el navegador lo redondea internamente de forma impredecible.

**Solución propuesta:**
1. Añadir declaraciones `@font-face` para los archivos de fuente de peso 800 y 900 de Google Sans si los archivos TTF existen en `public/fonts/`. Si no existen, reemplazar los usos de `font-weight: 800` y `900` por `700` donde corresponda, y documentar la limitación.
2. Reemplazar todos los usos de `font-weight: 650` por `font-weight: 700`.

**Clasificación del cambio:** Funcional — afecta tipografía visible en múltiples componentes.

**Acceptance Criteria:**
- [ ] No hay uso de `font-weight: 650` en ningún archivo fuente.
- [ ] Todos los pesos usados en componentes tienen una declaración `@font-face` correspondiente, o están reemplazados por un peso declarado.
- [ ] El build pasa sin errores.
- [ ] La tipografía visible no presenta degradación artificial.

**Rollback:** Revertir los archivos modificados.

---

### MEDIA — Impacto en claridad arquitectónica y mantenibilidad

---

#### OPT-04 · Nombre `HomeHero.astro` no refleja la responsabilidad del componente

**Archivo(s):** `src/components/HomeHero.astro`
**Importado en:** `index.astro`, `nosotros.astro`, `propiedades/index.astro`, `propiedades/[slug].astro`

**Problema:**
El componente `HomeHero.astro` es en realidad el **header de navegación del sitio** (logo, nav desktop, nav móvil, menú hamburguesa con JavaScript). No es un hero ni es exclusivo de la página de inicio. El nombre actual viola el principio de naming descriptivo del AGENTS.md y genera confusión para cualquier persona que trabaje en el proyecto.

**Solución propuesta:** Renombrar `HomeHero.astro` → `SiteHeader.astro` y actualizar los imports en los 4 archivos que lo consumen.

**Clasificación del cambio:** Trivial/Funcional — solo renombrado, sin cambio de lógica.

**Acceptance Criteria:**
- [ ] El archivo se llama `SiteHeader.astro`.
- [ ] Todos los imports actualizados en los 4 archivos consumidores.
- [ ] El build pasa sin errores.
- [ ] El comportamiento del header es idéntico al anterior.
- [ ] No existe ninguna referencia a `HomeHero` en archivos `src/`.

**Rollback:** Revertir el renombrado y los imports.

---

#### OPT-05 · Anchura máxima del contenedor duplicada en múltiples componentes

**Archivo(s):** `src/pages/index.astro`, `src/components/HomeHero.astro`, `src/components/SiteFooter.astro`, `src/components/PageHero.astro`

**Problema:**
La expresión `min(calc(100% - 40px), 1400px)` se repite literalmente en al menos 6 selectores distintos a lo largo de 4 archivos. Lo mismo ocurre con su variante mobile `min(calc(100% - 28px), 1400px)`. Si el ancho máximo del sitio cambia, requiere búsqueda y reemplazo manual en múltiples lugares.

**Solución propuesta:** Definir en `:root` de `global.css`:

```css
:root {
  --site-max-width: 1400px;
  --site-padding-x: 40px;
  --site-padding-x-mobile: 28px;
}
```

Y reemplazar las expresiones repetidas:

```css
/* Antes */
width: min(calc(100% - 40px), 1400px);

/* Después */
width: min(calc(100% - var(--site-padding-x)), var(--site-max-width));
```

**Nota:** Esta optimización puede ejecutarse en el mismo cambio que OPT-01 para reducir el número de commits.

**Clasificación del cambio:** Funcional — afecta múltiples archivos, mecánico.

**Acceptance Criteria:**
- [ ] Las variables de layout están definidas en `global.css`.
- [ ] No quedan expresiones literales `min(calc(100% - 40px), 1400px)` en `src/`.
- [ ] El build pasa sin errores.
- [ ] El layout visual es idéntico al anterior.

---

### BAJA — Impacto menor, deuda técnica acumulable

---

#### OPT-06 · Copyright con año estático en `SiteFooter.astro`

**Archivo(s):** `src/components/SiteFooter.astro`

**Problema:**
El footer muestra `© 2024 Amaru FS Inmobiliaria.` con año hardcodeado. El año actual es 2026. Cada enero requerirá un cambio manual.

**Solución propuesta:**

```astro
---
const currentYear = new Date().getFullYear();
---
<p>&copy; {currentYear} Amaru FS Inmobiliaria. Todos los derechos reservados.</p>
```

**Clasificación del cambio:** Trivial.

**Acceptance Criteria:**
- [ ] El año del copyright se genera dinámicamente.
- [ ] El build pasa sin errores.

---

#### OPT-07 · `getStaticPaths` en `[slug].astro` no está documentado como estado intencional

**Archivo(s):** `src/pages/propiedades/[slug].astro`

**Problema:**
El README indica que `getStaticPaths()` debería retornar una lista vacía hasta conectar una fuente de datos. Sin embargo, el archivo actual retorna `{ params: { slug: 'propiedad-demo' } }`, generando una ruta real `/propiedades/propiedad-demo` con contenido placeholder. Esta discrepancia entre README y código no está documentada como intencional.

**Solución propuesta:** Dos opciones a confirmar con el equipo:

- **Opción A:** Mantener el slug demo y actualizar el README para reflejar su existencia como ruta de prueba explícita.
- **Opción B:** Revertir a `return []` y documentar que no se generan rutas hasta conectar WordPress headless.

La opción correcta depende de si la ruta demo está siendo usada para desarrollo o revisión visual.

**Clasificación del cambio:** Trivial/documentación.

**Acceptance Criteria (Opción A):**
- [ ] El README documenta la existencia de `/propiedades/propiedad-demo` como ruta de desarrollo.

**Acceptance Criteria (Opción B):**
- [ ] `getStaticPaths()` retorna `[]`.
- [ ] El README confirma que no se generan rutas de detalle hasta conectar una fuente de datos.

---

## Orden de ejecución recomendado

| Prioridad | ID     | Cambio                                       | Esfuerzo estimado |
|-----------|--------|----------------------------------------------|-------------------|
| 1         | OPT-02 | Eliminar CSS duplicado en `index.astro`      | 15 min            |
| 2         | OPT-04 | Renombrar `HomeHero` → `SiteHeader`          | 20 min            |
| 3         | OPT-06 | Año de copyright dinámico                    | 5 min             |
| 4         | OPT-07 | Alinear `getStaticPaths` con README          | 10 min + decisión |
| 5         | OPT-03 | Declarar pesos de fuente faltantes           | 30 min            |
| 6         | OPT-01 + OPT-05 | Introducir CSS custom properties   | 90 min            |

Los cambios 1–4 son seguros de ejecutar de forma independiente. OPT-01 y OPT-05 se recomienda ejecutarlos en un mismo commit por su relación.

---

## Riesgos generales

- OPT-01 y OPT-05 son los cambios de mayor superficie de edición. Aunque mecánicos, requieren validación visual completa en los 3 breakpoints (mobile, tablet, desktop) antes de cerrar.
- OPT-03 depende de si los archivos `.ttf` de peso 800 y 900 de Google Sans existen en `public/fonts/`. Verificar antes de implementar.
- OPT-07 requiere decisión del equipo antes de implementarse.

---

## Estado del README

El README no requiere actualización para los cambios OPT-01 al OPT-06. OPT-07 sí requiere actualización del README en cualquiera de sus dos opciones.

---

## Validación post-implementación

Por cada cambio ejecutado:

```bash
npm run build
```

Para cambios que afecten UI (OPT-01, OPT-03, OPT-05): revisar adicionalmente en navegador con `npm run dev` o `npm run preview` en mobile, tablet y desktop.
