# 02. Estructura Recomendada en Next.js

## Objetivo

Proponer una estructura base para Next.js que sea compatible con App Router, escalable por módulos y fácil de mantener.

## Estructura base

```txt
src/
  app/
  components/
  features/
  lib/
  services/
  schemas/
  types/
  config/
  styles/
  tests/
public/
docs/
```

## `src/app`

Contiene rutas y archivos propios del App Router:

- `layout.tsx`;
- `page.tsx`;
- `loading.tsx`;
- `error.tsx`;
- `not-found.tsx`;
- `route.ts`;
- `template.tsx`;
- `metadata`;
- grupos de rutas;
- segmentos dinámicos.

## `src/features`

Cada feature agrupa su dominio:

```txt
features/
  products/
    components/
    services/
    schemas/
    types/
    hooks/
    utils/
```

## `src/components`

Solo componentes transversales:

- botones;
- inputs;
- modales;
- tablas;
- layouts visuales;
- estados vacíos;
- indicadores de carga.

No debe contener lógica de negocio específica.

## `src/lib`

Debe incluir utilidades técnicas:

- clientes HTTP;
- helpers de fechas;
- helpers de formato;
- configuración de SDKs;
- utilidades de caché;
- funciones puras compartidas.

## `src/services`

Centraliza acceso a datos:

- APIs internas;
- APIs externas;
- base de datos;
- almacenamiento;
- colas;
- proveedores de correo;
- servicios de pago.

## Reglas de naming

- Carpetas en `kebab-case`.
- Componentes React en `PascalCase`.
- Hooks en `useCamelCase`.
- Funciones y variables en `camelCase`.
- Tipos e interfaces en `PascalCase`.
- Archivos de pruebas junto al módulo o en `tests/`, según convención del proyecto.

## Criterios de aceptación

- La estructura permite encontrar rápido rutas, features y componentes.
- Las carpetas no mezclan responsabilidades.
- No hay archivos genéricos tipo `helpers.ts` con lógica sin dominio.
- Cada módulo puede evolucionar sin romper capas globales.
