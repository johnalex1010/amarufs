# 05. Estructura Basada en Features

## Objetivo

Organizar el proyecto por dominios funcionales para que cada feature tenga sus componentes, servicios, tipos, validaciones y pruebas cerca.

## Cuándo usar features

Usar una carpeta en `features/` cuando exista un dominio con reglas propias, por ejemplo:

- usuarios;
- productos;
- pedidos;
- pagos;
- contenidos;
- reportes;
- notificaciones;
- administración.

## Estructura sugerida

```txt
features/
  orders/
    components/
    services/
    schemas/
    types/
    hooks/
    utils/
    tests/
    index.ts
```

## Responsabilidades

- `components/`: UI específica del dominio.
- `services/`: consultas y mutaciones del dominio.
- `schemas/`: validaciones de formularios, parámetros y respuestas.
- `types/`: tipos propios de la feature.
- `hooks/`: hooks de cliente específicos.
- `utils/`: funciones puras del dominio.
- `tests/`: pruebas del módulo.

## Reglas de exposición

- Exportar solo lo necesario desde `index.ts`.
- Evitar imports profundos entre features.
- Compartir código común moviéndolo a `components`, `lib`, `schemas` o `types`.
- No crear dependencias circulares entre dominios.

## Comunicación entre features

Cuando dos features necesitan colaborar:

- definir contratos explícitos;
- usar tipos compartidos;
- evitar que una feature conozca detalles internos de otra;
- centralizar flujos transversales en servicios o casos de uso.

## Criterios de aceptación

- Cada feature tiene límites claros.
- La lógica de dominio está cerca de su UI y servicios.
- No hay carpetas globales saturadas de archivos sin contexto.
- Una feature puede probarse y modificarse con bajo impacto en otras.
