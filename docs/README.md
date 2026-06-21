# Documentación Base para Proyectos Next.js

Esta carpeta define una guía general, pero suficientemente específica, para construir proyectos Next.js mantenibles, seguros, rápidos y listos para crecer. Debe adaptarse a cada producto real antes de implementar funcionalidad.

## Objetivo

Establecer criterios comunes para:

- arquitectura del sistema;
- estructura del App Router;
- organización por features;
- componentes reutilizables;
- TypeScript;
- seguridad;
- SEO, GEO y AEO;
- performance;
- accesibilidad;
- testing;
- despliegue;
- operación;
- trabajo asistido por IA.

## Stack recomendado

- Next.js con App Router.
- React con Server Components por defecto.
- TypeScript en modo estricto.
- ESLint y Prettier.
- Gestor de paquetes único por proyecto: `pnpm`, `npm`, `yarn` o `bun`.
- Validación de datos con esquemas tipados.
- Pruebas unitarias, integración y end-to-end según criticidad.
- Observabilidad desde el inicio para errores, logs y métricas.

## Orden de lectura sugerido

1. `00_PROJECT_OVERVIEW.md`
2. `01_SYSTEM_ARCHITECTURE.md`
3. `02_NEXTJS_STRUCTURE.md`
4. `03_APP_ROUTER_GUIDELINES.md`
5. `04_COMPONENT_ARCHITECTURE.md`
6. `05_FEATURE_BASED_STRUCTURE.md`
7. `06_CODING_STANDARDS.md`
8. Guías específicas según el área a implementar.

## Regla de adaptación

Antes de escribir código, cada proyecto debe completar sus decisiones reales:

- dominio de negocio;
- rutas principales;
- modelo de datos;
- proveedor de autenticación;
- proveedor de base de datos;
- hosting;
- variables de entorno;
- flujo de CI/CD;
- criterios de aceptación.

## Definition of Done documental

Un proyecto Next.js bien documentado debe tener:

- README actualizado;
- arquitectura explícita;
- estructura de carpetas definida;
- comandos claros;
- estrategia de seguridad;
- estrategia de SEO;
- estrategia de testing;
- guía de despliegue;
- checklist de QA;
- riesgos conocidos;
- instrucciones para agentes de IA.
