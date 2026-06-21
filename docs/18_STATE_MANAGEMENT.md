# 18. Manejo de Estado

## Objetivo

Elegir la forma más simple y segura de manejar estado en una aplicación Next.js.

## Orden recomendado

1. Props desde Server Components.
2. Estado local con `useState`.
3. Estado derivado.
4. Search params para filtros compartibles.
5. Caché de datos remotos.
6. Context para dependencias transversales pequeñas.
7. Store global solo cuando exista necesidad real.

## Estado del servidor

Los datos remotos deben manejarse como estado del servidor:

- consultas cacheadas;
- revalidación;
- invalidación después de mutaciones;
- estados de carga y error;
- paginación.

No duplicar datos remotos en estado global sin necesidad.

## Estado de UI

Ejemplos válidos:

- modal abierto;
- tab activa;
- menú desplegado;
- campo de formulario;
- selección temporal;
- progreso local.

## Estado global

Justificarlo cuando:

- muchas rutas necesitan el mismo estado;
- no puede derivarse de la URL o servidor;
- hay sincronización compleja de UI;
- evita duplicación real.

## Criterios de aceptación

- El estado vive en el nivel más bajo posible.
- Los filtros compartibles están en la URL.
- No hay stores globales para datos que pertenecen al servidor.
- La estrategia de invalidación está definida.
