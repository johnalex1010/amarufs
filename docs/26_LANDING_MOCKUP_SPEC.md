# SPEC Landing Inmobiliaria

## 1. Contexto

El proyecto solo contiene documentación base de Next.js y no cuenta todavía con código fuente funcional. Se requiere generar un mockup de landing inmobiliaria basado en la referencia visual entregada por el usuario, manteniendo una estructura limpia y preparada para crecer.

## 2. Objetivo funcional

Crear una página pública inicial para una inmobiliaria con navegación, hero, métricas, beneficios, propiedades destacadas, servicios, proceso, llamado a publicar inmueble, testimonios, referidos, artículos, preguntas frecuentes, CTA final y footer.

Debe mantenerse como mockup: no consume APIs, no guarda datos, no inventa imágenes y deja espacios reservados para assets reales.

## 3. Alcance

Incluye:

- Scaffold mínimo de Next.js con App Router.
- Componentes de landing en `src/features/landing`.
- Datos estáticos tipados en un archivo separado.
- Estilos responsivos con tokens globales.
- Font Awesome Free como librería de iconografía.
- Fuentes Bebas Neue y Outfit mediante Fontsource.
- Espacios reservados para imágenes.

No incluye:

- Integración con CMS, CRM, mapas, formularios reales o base de datos.
- Descarga o generación de imágenes.
- Compra de fuentes o inclusión de archivos de fuente licenciados.
- Autenticación, pagos o administración interna.

## 4. Impacto técnico

- Framework: Next.js con App Router.
- Runtime: Node.js.
- Lenguaje: TypeScript estricto.
- Rendering: página inicial con composición React y un componente cliente para interacciones puntuales.
- Estilos: CSS global con tokens propios.
- Iconografía: `@fortawesome/fontawesome-free`.
- SEO: metadata básica, `lang="es-CO"` y estructura semántica.
- Accesibilidad: landmarks, botones reales, foco visible, labels accesibles y jerarquía de encabezados.

## 5. Riesgos

- Las imágenes son placeholders; la percepción visual final dependerá de los assets reales.
- La landing usa datos estáticos de mockup, no información comercial validada.
- Las dependencias de Font Awesome y Fontsource requieren instalación de paquetes.

## 6. Acceptance Criteria

- Sí/No: existe una ruta inicial renderizable en Next.js.
- Sí/No: la UI replica la estructura principal del mockup entregado.
- Sí/No: no se incluyen imágenes inventadas, generadas ni descargadas.
- Sí/No: los espacios de imagen están claramente reservados.
- Sí/No: los iconos provienen de Font Awesome Free.
- Sí/No: la estructura separa app, feature, datos y estilos.
- Sí/No: la página responde en mobile, tablet y desktop.
- Sí/No: la documentación indica cómo instalar, ejecutar, validar y revertir.

## 7. Validación

- `npm install`
- `npm run typecheck`
- `npm run lint`
- `npm run build`
- Revisión responsive manual en local.
- Revisión de ausencia de imágenes externas o generadas.
- Revisión de UTF-8, ortografía y copy en español Colombia.

## 8. Rollback

Archivos afectados:

- `package.json`
- `package-lock.json`
- `next.config.ts`
- `tsconfig.json`
- `eslint.config.mjs`
- `next-env.d.ts`
- `src/`
- `public/`
- `README.md`
- `docs/README.md`
- `docs/26_LANDING_MOCKUP_SPEC.md`

Reversión segura:

1. Revisar `git status --short`.
2. Eliminar solo los archivos creados para esta SPEC si aún no se han integrado.
3. Restaurar documentación afectada desde Git si se requiere volver al estado anterior.

No ejecutar comandos destructivos sin confirmar el alcance exacto.
