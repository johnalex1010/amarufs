# 09. Guía de Estilos

## Objetivo

Definir una estrategia visual consistente, responsive y mantenible para proyectos Next.js.

## Estrategias permitidas

El proyecto debe elegir una estrategia principal:

- CSS Modules;
- Tailwind CSS;
- Sass;
- CSS-in-JS compatible con SSR;
- sistema de diseño propio.

Evitar mezclar varias estrategias sin una razón documentada.

## Reglas generales

- No usar estilos inline salvo valores dinámicos inevitables.
- Evitar `!important`.
- Definir tokens de diseño para color, espacio, radio, tipografía y sombras.
- Mantener responsive desde el primer componente.
- Evitar overflow horizontal.
- No depender solo del color para comunicar estados.

## Layout

- Usar HTML semántico.
- Definir anchos máximos.
- Usar grid o flex según necesidad.
- Evitar wrappers innecesarios.
- Reservar espacio para imágenes y contenido dinámico para reducir CLS.

## Componentes

Cada componente visual debe cubrir:

- estado normal;
- hover;
- focus;
- disabled;
- loading;
- error;
- vacío;
- responsive.

## Criterios de aceptación

- La UI es consistente.
- No hay estilos duplicados innecesarios.
- La página funciona en mobile, tablet y desktop.
- No hay overflow horizontal.
- Los estados interactivos son visibles y accesibles.
