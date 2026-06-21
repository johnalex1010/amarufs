# 01. Arquitectura del Sistema

## Objetivo

Definir una arquitectura clara para proyectos Next.js, separando responsabilidades entre interfaz, lógica de negocio, acceso a datos, integraciones, validaciones y operación.

## Capas recomendadas

- `app/`: rutas, layouts, páginas, loading, error y metadata.
- `features/`: módulos de negocio organizados por dominio.
- `components/`: componentes compartidos sin lógica de negocio específica.
- `lib/`: utilidades técnicas, clientes, helpers y configuración interna.
- `services/`: acceso a APIs, base de datos o integraciones externas.
- `schemas/`: validaciones de entrada y salida.
- `types/`: tipos compartidos cuando no pertenecen a una feature concreta.
- `config/`: constantes de configuración no secretas.
- `tests/`: pruebas compartidas o de integración.

## Reglas de dependencia

- `app/` puede consumir `features/`, `components`, `lib` y `services`.
- `features/` puede consumir `components`, `lib`, `services`, `schemas` y `types`.
- `components/` no debe depender de `app/`.
- `lib/` no debe depender de UI.
- `services/` no debe renderizar componentes.
- `schemas/` debe ser reutilizable entre cliente y servidor cuando aplique.

## Flujo de datos

1. La ruta recibe parámetros o contexto.
2. Se validan entradas.
3. Se consulta la capa de servicios.
4. Se normaliza la respuesta.
5. Se renderiza UI con datos ya preparados.
6. Las mutaciones se ejecutan mediante Server Actions, Route Handlers o servicios controlados.

## Decisiones obligatorias por proyecto

- Estrategia de autenticación.
- Estrategia de autorización.
- Modelo de datos.
- Proveedor de almacenamiento.
- Política de caché.
- Política de errores.
- Política de logs.
- Estrategia de despliegue.

## Riesgos comunes

- Mezclar consultas de datos dentro de componentes visuales compartidos.
- Usar Client Components por defecto.
- Duplicar validaciones.
- Acoplar UI a un proveedor específico.
- Exponer secretos al navegador.
- Crear rutas sin criterios de SEO o accesibilidad.

## Criterios de aceptación

- Cada capa tiene responsabilidad clara.
- No existen dependencias circulares.
- La lógica de negocio no está dispersa en páginas.
- Las integraciones externas están aisladas.
- La arquitectura permite pruebas sin levantar toda la aplicación.
