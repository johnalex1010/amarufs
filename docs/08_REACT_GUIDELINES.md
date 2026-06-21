# 08. Guía de React

## Objetivo

Usar React de forma clara, eficiente y alineada con Next.js App Router.

## Principios

- Preferir composición sobre configuración compleja.
- Mantener componentes pequeños.
- Evitar estado global innecesario.
- Derivar estado cuando sea posible.
- Evitar efectos para lógica que puede resolverse durante render.
- Separar UI, datos y reglas de negocio.

## Server Components

Son la opción por defecto para:

- páginas;
- layouts;
- contenido con datos del servidor;
- UI sin interactividad de cliente.

## Client Components

Usarlos para:

- formularios interactivos;
- menús desplegables;
- modales;
- tabs;
- filtros en cliente;
- integraciones con APIs del navegador.

## Hooks

- Crear hooks solo para reutilizar lógica de cliente.
- No usar hooks para ocultar lógica de negocio compleja.
- Mantener dependencias de `useEffect` correctas.
- Evitar efectos que disparen requests duplicados.
- Limpiar timers, listeners y suscripciones.

## Estado

Orden de preferencia:

1. Estado local.
2. Estado derivado.
3. Search params.
4. Caché del servidor o datos remotos.
5. Estado global cuando exista necesidad transversal real.

## Criterios de aceptación

- No hay efectos innecesarios.
- No hay renders costosos sin razón.
- La interactividad vive en componentes mínimos.
- El estado global está justificado.
