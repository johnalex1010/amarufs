# AGENTS.md

Gobernanza obligatoria para cualquier agente de IA, asistente de desarrollo, entorno automatizado o sistema de generación de código que trabaje sobre este proyecto.

Este documento es específico del proyecto Amarufs Inmobiliaria y tiene prioridad sobre reglas globales cuando exista conflicto. Las reglas globales de Codex actúan como soporte operativo únicamente cuando no contradigan esta gobernanza local.

---

## 0. Jerarquía de Gobernanza

### Prioridad documental

El agente debe respetar este orden:

1. `AGENTS.md` local del proyecto.
2. `README.md`.
3. Documentación interna del proyecto, si existe.
4. Configuración real del código.
5. Reglas globales de Codex o del entorno de IA.

Ante contradicción, gana la definición más cercana y específica del proyecto. No se debe asumir comportamiento que no esté respaldado por documentación o evidencia real del código.

### Alcance de esta gobernanza

Este proyecto es una aplicación Astro ubicada dentro de una ruta de tema WordPress:

```text
C:\xampp\htdocs\amarufs\wp-content\themes\amarufs
```

Aunque la ubicación pertenece a WordPress, la base actual verificada es Astro. Cualquier integración futura con WordPress debe validarse antes de depender de ella.

---

## 1. Principios Globales

Todo cambio debe proteger, en este orden:

1. Seguridad.
2. Estabilidad del proyecto.
3. Arquitectura existente.
4. SEO / GEO / AEO.
5. Performance y Core Web Vitals.
6. Accesibilidad.
7. Mantenibilidad.
8. Consistencia visual y funcional.

### Reglas absolutas

- No escribir código sin comprender el requerimiento.
- No implementar funcionalidad sin una SPEC proporcional al cambio.
- No asumir reglas de negocio no documentadas.
- No inventar endpoints, APIs, hooks, servicios, tablas, modelos, schemas, CPTs, taxonomías, campos ACF, plugins ni contratos.
- No introducir dependencias nuevas sin justificación técnica y confirmación.
- No modificar archivos generados automáticamente.
- No degradar seguridad, SEO, GEO, AEO, accesibilidad, responsive, performance ni estabilidad.
- No eliminar código sin validar impacto.
- No hacer refactors masivos para cambios puntuales.
- No dejar `console.log`, debugging, logs temporales, código muerto, mocks accidentales ni comentarios basura.
- No hardcodear secretos.
- No asumir estructura del proyecto sin evidencia real.

### Código limpio, mantenible y escalable

Todo cambio debe favorecer código fácil de leer hoy y fácil de mantener después. El estándar mínimo del proyecto es:

- Usar nombres descriptivos para variables, funciones, componentes, props, clases y archivos.
- Mantener funciones, componentes y módulos con responsabilidad única.
- Preferir flujos explícitos y simples antes que abreviaturas crípticas o lógica comprimida.
- Evitar duplicación; extraer una utilidad o componente solo cuando exista repetición real o una responsabilidad clara.
- Mantener archivos y carpetas organizados por dominio o responsabilidad, no por conveniencia temporal.
- Separar contenido, presentación y lógica cuando el framework lo permita sin sobreingeniería.
- Mantener errores y estados vacíos tratados de forma clara y verificable.
- Escribir comentarios solo cuando expliquen una decisión, restricción o contexto que el código no hace evidente.
- Evitar funciones enormes, componentes con demasiadas responsabilidades y condicionales difíciles de seguir.
- Priorizar código tipado, predecible y consistente con `astro/tsconfigs/strict`.
- Mantener cambios pequeños, revisables y reversibles.

Se considera código sucio y no aceptable:

- Nombres genéricos o ambiguos como `x`, `data`, `temp`, `ct`, `item2` cuando no sean inevitables por contexto local.
- Lógica duplicada sin justificación.
- Componentes que mezclan consultas, transformación de datos, renderizado complejo y estilos acoplados.
- Comentarios redundantes que repiten lo obvio o comentarios obsoletos.
- Manejo de errores inexistente, silencioso o genérico.
- Archivos desordenados, imports sin criterio o carpetas usadas como contenedores de todo.
- Soluciones que funcionan solo para el caso inmediato y bloquean crecimiento razonable del proyecto.

---

## 2. Idioma, Encoding y Calidad Editorial

### Idioma oficial

Todo contenido textual del proyecto debe mantenerse en español Colombia (`es-CO`), salvo que una integración externa, marca, nombre propio o requerimiento explícito exija otro idioma.

### Encoding obligatorio

Todo archivo debe mantenerse en UTF-8.

El agente debe evitar:

- Romper acentos o caracteres especiales.
- Introducir mojibake.
- Mezclar formatos inconsistentes de salto de línea.
- Reescribir archivos completos sin necesidad cuando un cambio puntual sea suficiente.

### Calidad editorial

Todo texto para páginas, componentes, metadatos, microcopy, CTAs o contenidos comerciales debe cumplir:

- Ortografía correcta en español.
- Acentuación y signos de apertura cuando correspondan.
- Redacción clara, natural y profesional.
- Consistencia de tono con Amarufs Inmobiliaria.
- Títulos específicos y útiles.
- Párrafos breves, escaneables y orientados a intención de búsqueda.
- Uso natural de palabras clave, sin keyword stuffing.
- Entidades, ubicaciones, servicios y beneficios nombrados explícitamente cuando aplique.
- Metadata coherente con el contenido visible.

No se deben inventar datos, cifras, ubicaciones, disponibilidad, precios, testimonios, certificaciones, ratings ni fechas.

---

## 3. Detección Tecnológica Obligatoria

Antes de modificar código, el agente debe identificar con evidencia real:

- Framework.
- Runtime.
- Package manager.
- Sistema de build.
- Arquitectura.
- Estructura modular.
- Linters, formatters y test runners, si existen.
- CI/CD, si existe.
- Convenciones internas.
- Estrategia de rendering.
- SSR / CSR / SSG / ISR, si aplica.

### Stack actual verificado

- Framework: Astro 5.
- Runtime esperado: Node.js compatible con Astro 5.
- Package manager: npm, con `package-lock.json`.
- Lenguaje/configuración: TypeScript con `astro/tsconfigs/strict`.
- Build: `npm run build`, que ejecuta `astro check && astro build`.
- Desarrollo: `npm run dev`, que ejecuta `astro dev --host 0.0.0.0`.
- Preview: `npm run preview`, que ejecuta `astro preview --host 0.0.0.0`.
- Integraciones: `astro-icon` con paquetes de iconos `@iconify-json/simple-icons` y `@iconify-json/solar`.
- Alias: `@/*` apunta a `src/*`.
- Sitio configurado en Astro: `http://localhost:4321`.
- Sistema de tokens de diseño: CSS custom properties definidas en `src/styles/global.css` (colores de marca, sombras y variables de layout).
- Tipografía: Google Sans (400, 500, 700) y Playfair Display (400, 500, 600). No existen archivos para otros pesos; no usar `font-weight` fuera de estos valores.

### Estructura principal

Archivos fuente y configuración relevantes:

- `src/layouts/BaseLayout.astro` — layout base con metadatos comunes, importa estilos globales
- `src/components/SiteHeader.astro` — header de navegación del sitio (logo, nav desktop, nav móvil)
- `src/components/PageHero.astro` — hero reutilizable para páginas internas
- `src/components/SiteFooter.astro` — footer del sitio
- `src/pages/index.astro` — página de inicio
- `src/pages/nosotros.astro` — página de nosotros
- `src/pages/propiedades/index.astro` — listado de propiedades
- `src/pages/propiedades/[slug].astro` — detalle de propiedad (sin rutas generadas hasta conectar fuente de datos)
- `src/styles/global.css` — reset global, CSS custom properties de design tokens y layout
- `src/styles/fonts.css` — declaraciones `@font-face` y variables `--font-sans` / `--font-display`
- `public/**` — assets estáticos (imágenes, fuentes)
- `astro.config.mjs`
- `package.json`
- `package-lock.json`
- `tsconfig.json`
- `README.md`

Archivos y carpetas generadas o no editables manualmente:

- `dist/**`
- `.astro/**`
- `node_modules/**`
- `*.log`

---

## 4. README Obligatorio

El `README.md` debe mantenerse actualizado.

Debe cubrir como mínimo:

- Descripción del proyecto.
- Stack tecnológico.
- Requisitos.
- Instalación.
- Variables de entorno, si existen.
- Scripts disponibles.
- Flujo de desarrollo.
- Flujo de build.
- Estructura principal.
- Convenciones relevantes.
- Ejecución de pruebas o validaciones disponibles.
- Despliegue o preview.
- Troubleshooting básico.
- Riesgos conocidos.

Si un cambio afecta arquitectura, instalación, comandos, infraestructura, dependencias, variables de entorno, CI/CD, flujos operativos, build o testing, el `README.md` debe actualizarse en el mismo cambio.

---

## 5. Flujo Obligatorio SDD

Todo desarrollo debe seguir Spec-Driven Development.

### Flujo operativo

1. Comprender el requerimiento.
2. Identificar impacto técnico.
3. Definir SPEC proporcional al cambio.
4. Validar riesgos.
5. Definir Acceptance Criteria.
6. Validar impacto en SEO / GEO / AEO.
7. Solicitar confirmación si existe ambigüedad relevante.
8. Implementar cambios mínimos y reversibles.
9. Validar resultado.
10. Confirmar Definition of Done.

Si no existe SPEC clara, no se debe escribir código funcional.

---

## 6. SPEC Obligatoria

Toda funcionalidad o cambio no trivial debe partir de una especificación.

La SPEC debe incluir:

### Contexto

- Problema actual.
- Necesidad de negocio o técnica.
- Objetivo esperado.

### Objetivo funcional

- Qué debe ocurrir.
- Qué debe mostrarse.
- Qué debe mantenerse igual.
- Qué comportamiento cambia.

### Alcance

- Qué incluye.
- Qué no incluye.
- Archivos potencialmente afectados.
- Áreas fuera del cambio.

### Impacto técnico

- Componentes.
- Módulos.
- Layouts.
- Templates.
- APIs o servicios.
- Base de datos, si aplica.
- Frontend.
- Backend, si aplica.
- Assets.
- Performance.
- SEO.
- Accesibilidad.
- Seguridad.

### Riesgos

- Regresión.
- Seguridad.
- SEO / GEO / AEO.
- Performance.
- Accesibilidad.
- Responsive.
- Compatibilidad con WordPress o integraciones futuras.

### Acceptance Criteria

Cada criterio debe poder responderse con sí o no.

### Validación

Definir cómo comprobar:

- Funcionamiento.
- Responsive.
- Performance.
- Accesibilidad.
- Errores JavaScript.
- Errores backend, si aplica.
- Encoding UTF-8.
- Ortografía.
- SEO / GEO / AEO.

### Rollback

Definir:

- Archivos afectados.
- Pasos de reversión.
- Riesgos posteriores.
- Comandos seguros.

---

## 7. Clasificación de Cambios

### Cambio trivial

Ejemplos:

- Typo.
- Copy menor.
- Ajuste visual pequeño sin cambio estructural.

Requiere:

- SPEC breve.
- Validación puntual.

### Cambio funcional

Ejemplos:

- Nuevas secciones.
- Cambios de UI.
- Cambios de lógica.
- Nuevas rutas.
- Integraciones de datos.

Requiere:

- SPEC completa.
- Validación técnica.
- Validación responsive.
- Rollback documentado.

### Cambio crítico

Ejemplos:

- Autenticación.
- Seguridad.
- Pagos.
- Arquitectura.
- Build.
- Infraestructura.
- CI/CD.
- Base de datos.
- Integración mutable con WordPress.

Requiere:

- SPEC completa.
- Revisión profunda.
- Validación obligatoria.
- Rollback explícito.
- Confirmación si existe incertidumbre.

---

## 8. Arquitectura del Proyecto

### Principios

- Mantener arquitectura modular.
- Mantener separación de responsabilidades.
- Evitar side effects globales.
- Evitar acoplamiento innecesario.
- Mantener consistencia estructural.
- Priorizar reutilización razonable.
- Evitar duplicación.
- Mantener cambios mínimos, trazables y reversibles.

### Astro

- Mantener layouts y páginas simples y semánticas.
- Mantener `BaseLayout.astro` como punto central para metadatos comunes.
- Usar imports con alias `@/` cuando mejore claridad.
- Evitar lógica compleja directamente en templates cuando pueda aislarse.
- No hacer que contenido crítico para SEO dependa solo de JavaScript del cliente.
- No añadir hidratación del cliente sin necesidad clara.
- No crear componentes genéricos si el alcance no lo justifica.

### Componentes

Todo componente debe:

- Tener responsabilidad única.
- Ser reutilizable cuando tenga sentido.
- Mantener naming consistente.
- Evitar mezclar lógica compleja y rendering.
- Mantener accesibilidad, responsive y performance desde el diseño.
- Recibir datos mediante props claras y tipadas cuando aplique.
- Evitar dependencias ocultas en estado global, selectores frágiles o efectos colaterales no documentados.
- Exponer una API simple: pocas props, nombres explícitos y comportamiento predecible.

### Organización de código

- Ubicar cada archivo en la carpeta que representa mejor su responsabilidad real.
- Mantener imports ordenados de forma legible: dependencias externas, alias internos y rutas relativas cuando existan.
- Preferir el alias `@/` para imports internos cuando reduzca ruido o fragilidad de rutas.
- No crear carpetas, componentes o utilidades "por si acaso".
- No dejar código comentado, alternativas viejas ni implementaciones parciales.
- Si una pieza crece demasiado, dividirla por responsabilidad antes de que se vuelva difícil de probar o revisar.

### Estilos

- Centralizar estilos globales en `src/styles/**` cuando aplique.
- Evitar CSS inline.
- Evitar `!important` salvo justificación excepcional.
- Evitar overflow horizontal.
- Definir dimensiones o restricciones estables para elementos visuales.
- Mantener consistencia visual con Amarufs Inmobiliaria.

#### CSS custom properties — uso obligatorio

El proyecto tiene un sistema de tokens de diseño definido en `:root` de `src/styles/global.css`. Todo nuevo código debe usar estas variables en lugar de valores literales.

**Colores de marca:**

```css
var(--color-navy)        /* #000043 */
var(--color-blue)        /* #1246c0 */
var(--color-green)       /* #00b98f */
var(--color-green-dark)  /* #00a982 */
var(--color-teal)        /* #00e1ad */
var(--color-mint)        /* #00c99a */
var(--color-purple)      /* #595bff */
var(--color-orange)      /* #f49b00 */
```

**Sombras:**

```css
var(--shadow-button)   /* botones primarios y CTAs */
var(--shadow-card)     /* tarjetas de contenido */
var(--shadow-header)   /* header fijo */
var(--shadow-panel)    /* paneles elevados */
```

**Layout:**

```css
var(--site-max-width)          /* 1400px */
var(--site-padding-x)          /* 40px — padding desktop */
var(--site-padding-x-mobile)   /* 28px — padding mobile */
```

Expresión de contenedor estándar del sitio:

```css
width: min(calc(100% - var(--site-padding-x)), var(--site-max-width));
```

Versión mobile (dentro de media query `max-width: 760px`):

```css
width: min(calc(100% - var(--site-padding-x-mobile)), var(--site-max-width));
```

Reglas absolutas sobre tokens:

- No hardcodear colores de marca, sombras ni el ancho máximo del sitio.
- No agregar tokens nuevos sin justificación clara y sin actualizar este documento.
- Si se necesita un color con opacidad, usar `rgba()` inline con el valor base del token como referencia en un comentario.

#### Tipografía

Pesos de fuente disponibles en los archivos TTF de `public/fonts/`:

| Fuente | Pesos disponibles |
|---|---|
| Google Sans (`--font-sans`) | 400, 500, 700 |
| Playfair Display (`--font-display`) | 400, 500, 600 |

No usar `font-weight` fuera de los valores declarados. El navegador sintetiza negritas artificiales para pesos no declarados, lo que produce resultados visuales degradados e inconsistentes.

---

## 9. WordPress e Integraciones

El proyecto vive dentro de un entorno WordPress, pero actualmente no debe asumirse integración activa.

Si se agrega integración con WordPress:

- Validar disponibilidad real de APIs, plugins o endpoints antes de depender de ellos.
- No asumir estructura ACF no verificada.
- No inventar CPTs, taxonomías, campos, hooks, actions, filters ni endpoints.
- No duplicar metadata, canonicales o schema que pueda gestionar Yoast SEO u otro plugin SEO.
- Escapar salida y sanitizar entrada en cualquier código PHP futuro.
- Validar permisos y nonces en formularios, AJAX, REST o acciones mutables.
- No exponer datos sensibles ni endpoints administrativos.
- Documentar el contrato de datos y el fallback ante errores.

---

## 10. Seguridad

Toda entrada debe considerarse no confiable.

### Entrada

- Sanitizar inputs.
- Validar formatos.
- Validar tipos.
- Validar rangos.
- Rechazar valores inesperados.

### Autorización

- Validar permisos.
- No confiar en el frontend.
- Validar ownership cuando aplique.

### Persistencia

- Sanitizar antes de guardar.
- Validar integridad.
- Evitar datos arbitrarios inseguros.

### Salida

- Escapar salida según contexto.
- Evitar XSS.
- Evitar exposición de datos sensibles.

### Frontend

- No confiar en validaciones del cliente.
- Evitar `innerHTML` inseguro.
- Evitar exposición de tokens.
- Evitar listeners globales innecesarios.

### Secretos

Nunca hardcodear ni subir:

- `.env`
- Dumps.
- Backups.
- Llaves privadas.
- Tokens.
- Credenciales.

---

## 11. SEO / GEO / AEO

### SEO técnico

- Mantener jerarquía semántica de headings.
- Usar títulos y descripciones explícitos por página.
- Evitar contenido duplicado.
- Mantener crawlability.
- Mantener metadata consistente.
- Evitar thin content.
- Mantener contenido visible alineado con metadata o schema futuro.

### GEO

- Estructura clara para IA.
- Contexto explícito.
- Entidades bien definidas.
- Información verificable.
- Relaciones claras entre servicios, ubicaciones y marca.

### AEO

- Respuestas claras.
- Información escaneable.
- FAQs reales cuando el contenido lo justifique.
- Estructura comprensible para usuarios y motores de respuesta.

### Restricciones

- No inventar schema.
- No inventar ratings, precios, fechas, disponibilidad ni entidades.
- No usar contenido oculto engañoso.
- No inflar copy con relleno o promesas ambiguas.

---

## 12. Frontend Rules

### HTML

- HTML semántico obligatorio.
- Landmarks correctos.
- Jerarquía adecuada.
- Enlaces para navegación.
- Botones para acciones.

### Accesibilidad

- Agregar `aria-label` o texto visible cuando sea necesario.
- Mantener foco visible.
- Mantener contraste adecuado.
- Mantener targets táctiles adecuados.
- Evitar elementos superpuestos.
- Evitar texto cortado en responsive.

### JavaScript / TypeScript

- Evitar contaminación global.
- Manejar errores explícitamente.
- Validar existencia de elementos antes de operar sobre ellos.
- Evitar listeners innecesarios.
- No dejar debugging.
- No cargar JavaScript del cliente si el contenido puede resolverse estáticamente.

### Responsive

Validar cuando el cambio afecta UI:

- Mobile.
- Tablet.
- Desktop.

---

## 13. Performance Rules

### Frontend

- Reducir render blocking.
- Reducir JavaScript no crítico.
- Evitar recalcular layouts innecesariamente.
- Evitar inicializaciones duplicadas.
- Cuidar LCP, CLS e INP.

### Imágenes

- Definir dimensiones o restricciones estables.
- Usar `alt` significativo cuando la imagen aporte contenido.
- Usar `alt=""` en imágenes decorativas.
- Usar lazy loading fuera del contenido crítico cuando corresponda.
- No reemplazar assets por imágenes más pesadas sin justificación.

### DOM

- Evitar DOM excesivo.
- Evitar wrappers innecesarios.
- Evitar renderizar contenido oculto pesado sin necesidad.

---

## 14. Build, Archivos Generados y Dependencias

No editar manualmente:

- `dist/**`
- `.astro/**`
- `node_modules/**`
- `*.log`

Los cambios deben realizarse únicamente sobre archivos fuente, configuración o assets originales.

Si un cambio requiere salida generada, ejecutar el comando correspondiente. No falsificar builds ni editar artefactos compilados.

No introducir dependencias nuevas sin:

- Justificación técnica.
- Revisión de impacto.
- Confirmación explícita.
- Actualización de `README.md` si aplica.

---

## 15. QA y Validación Obligatoria

Antes de finalizar, validar según alcance:

- `npm run build` para cambios de código.
- Revisión responsive si el cambio afecta UI.
- Ausencia de errores visibles en navegador si se toca frontend.
- SEO / GEO / AEO si cambia contenido o estructura.
- Accesibilidad si cambia UI o HTML.
- Performance si afecta assets, JavaScript, CSS o layout.
- Encoding UTF-8 en archivos editados.
- Ortografía, gramática y claridad editorial.
- Confirmar que no se modificaron archivos generados prohibidos.

Si algo no pudo validarse, reportarlo explícitamente.

### Checklist final

- No quedaron logs.
- No quedó debugging.
- No quedaron secretos.
- No quedaron TODO críticos.
- No se rompió responsive.
- No se rompió build.
- README actualizado cuando aplique.
- Rollback documentado.

---

## 16. Definition of Done

Un cambio solo está terminado cuando:

- Existe SPEC proporcional al cambio.
- El alcance fue respetado.
- Solo se tocaron archivos permitidos.
- No se editaron artefactos generados.
- Acceptance Criteria cumplidos.
- Validaciones ejecutadas o limitaciones reportadas.
- README actualizado cuando aplique.
- Responsive validado cuando aplique.
- Performance validada cuando aplique.
- Seguridad validada.
- SEO / GEO / AEO no degradado.
- Encoding UTF-8 correcto.
- Ortografía revisada.
- Rollback definido.
- No existe código temporal.
- Build funcional cuando el cambio toca código.
- DoD confirmado.

---

## 17. Formato de Respuesta del Agente

Al finalizar un cambio, responder:

1. Qué se cambió.
2. Archivos modificados.
3. Validación realizada.
4. Riesgos o pendientes.
5. Estado del README.
6. Confirmación del DoD.

Para revisiones de código, responder primero con hallazgos ordenados por severidad y referencias a archivo/línea.

---

## 18. Rollback

Para cambios de documentación o código fuente, revertir los archivos modificados en la rama actual.

Para cambios que generen salida en `dist/`, regenerar con el flujo de build en vez de modificar artefactos manualmente.

Comando de validación recomendado después de revertir cambios de código:

```bash
npm run build
```

No usar comandos destructivos como `git reset --hard` salvo solicitud explícita del usuario.

---

## 19. Regla Final

Ante conflicto entre:

- Velocidad y seguridad: gana seguridad.
- Rapidez y arquitectura: gana arquitectura.
- Comodidad y SPEC: gana SPEC.
- Solución rápida y mantenibilidad: gana mantenibilidad.

Ante duda razonable, detenerse, explicar la incertidumbre y solicitar confirmación.
