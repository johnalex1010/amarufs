# 00. Visión General del Proyecto

## Propósito

Este documento describe la base mínima que debe tener cualquier proyecto Next.js antes de iniciar desarrollo funcional. Su objetivo es evitar decisiones improvisadas y asegurar que el producto pueda crecer sin perder seguridad, rendimiento ni mantenibilidad.

## Descripción del proyecto

Todo proyecto debe declarar:

- nombre del producto;
- problema que resuelve;
- usuarios principales;
- objetivos de negocio;
- alcance funcional inicial;
- alcance explícitamente excluido;
- dependencias externas críticas;
- restricciones técnicas o legales.

## Stack base recomendado

- Framework: Next.js con App Router.
- Lenguaje: TypeScript.
- UI: React.
- Rendering: Server Components por defecto, Client Components solo cuando exista interactividad real.
- Estilos: CSS Modules, Tailwind CSS, Sass o sistema de diseño definido por el proyecto.
- Datos: capa de servicios desacoplada del rendering.
- Validación: esquemas compartidos para entrada y salida.
- Testing: unitario, integración y end-to-end según riesgo.

## Principios del proyecto

- Seguridad antes que velocidad.
- Arquitectura antes que parches.
- Simplicidad antes que sobreingeniería.
- SEO, GEO y AEO desde el diseño inicial.
- Accesibilidad como requisito, no como mejora posterior.
- Performance medible, no supuesta.
- Documentación viva y cercana al código.

## Requisitos iniciales

Antes del primer módulo funcional deben existir:

- README del proyecto;
- estructura de carpetas definida;
- variables de entorno documentadas;
- flujo de desarrollo local;
- comandos de build y validación;
- criterios de despliegue;
- checklist de QA;
- SPEC de la funcionalidad inicial.

## Criterios de aceptación

- El objetivo del producto está documentado.
- El stack está definido.
- Las áreas fuera de alcance están claras.
- Existen criterios de calidad mínimos.
- El equipo puede instalar, ejecutar, validar y desplegar el proyecto siguiendo la documentación.
