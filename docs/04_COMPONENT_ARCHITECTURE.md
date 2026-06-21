# 04. Arquitectura de Componentes

## Objetivo

Construir componentes reutilizables, accesibles y fáciles de probar, evitando mezclar presentación, datos y reglas de negocio.

## Tipos de componentes

- Componentes de UI: botones, campos, tarjetas, modales, tablas.
- Componentes de layout: header, sidebar, contenedores, grids.
- Componentes de feature: piezas específicas de un dominio.
- Componentes de página: composición final de una pantalla.

## Reglas generales

- Un componente debe tener una responsabilidad principal.
- Las props deben ser explícitas y tipadas.
- Evitar props ambiguas como `data`, `item` o `config` sin tipo claro.
- Evitar componentes gigantes.
- Extraer subcomponentes cuando reduzca complejidad real.
- Mantener lógica de negocio fuera de componentes compartidos.

## Server Components

Usar para:

- renderizar datos del servidor;
- reducir JavaScript enviado al cliente;
- mejorar performance inicial;
- componer páginas con datos ya resueltos.

No usar hooks de cliente en Server Components.

## Client Components

Usar solo cuando exista:

- estado interactivo;
- eventos del usuario;
- efectos;
- APIs del navegador;
- librerías que requieren cliente.

El archivo debe incluir `"use client"` únicamente en el componente más pequeño posible.

## Accesibilidad

Cada componente interactivo debe considerar:

- foco visible;
- navegación por teclado;
- roles semánticos;
- `aria-*` solo cuando HTML nativo no sea suficiente;
- labels explícitos;
- mensajes de error vinculados al campo.

## Criterios de aceptación

- Los componentes son pequeños y comprensibles.
- La accesibilidad básica está cubierta.
- No hay lógica de datos en componentes visuales compartidos.
- No hay Client Components innecesarios.
- Las props están tipadas con precisión.
