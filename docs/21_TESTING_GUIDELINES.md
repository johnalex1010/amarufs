# 21. Guía de Testing

## Objetivo

Definir una estrategia de pruebas proporcional al riesgo del proyecto.

## Tipos de pruebas

- Unitarias: funciones puras, validaciones, helpers y reglas de negocio.
- Integración: servicios, APIs, formularios y flujos entre módulos.
- End-to-end: rutas críticas del usuario.
- Accesibilidad: navegación, roles, labels y contraste.
- Performance: rutas principales y bundles.

## Qué probar siempre

- autenticación;
- autorización;
- formularios críticos;
- mutaciones de datos;
- pagos o flujos sensibles;
- permisos por rol;
- errores esperados;
- rutas públicas de alto tráfico.

## Reglas

- Las pruebas deben ser deterministas.
- No depender de datos reales de producción.
- Usar fixtures controladas.
- No usar snapshots gigantes como sustituto de asserts útiles.
- Probar comportamiento, no implementación interna.

## Comandos esperados

Cada proyecto debe definir scripts para:

- lint;
- typecheck;
- unit tests;
- integration tests;
- e2e tests;
- build.

## Criterios de aceptación

- Los flujos críticos tienen cobertura.
- Las pruebas corren en CI.
- Los fallos son accionables.
- No hay mocks accidentales en producción.
