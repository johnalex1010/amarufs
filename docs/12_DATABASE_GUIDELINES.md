# 12. Guía de Base de Datos

## Objetivo

Definir criterios para modelar, consultar y proteger datos en un proyecto Next.js.

## Decisiones obligatorias

Cada proyecto debe documentar:

- motor de base de datos;
- ORM o cliente;
- modelo de conexión;
- migraciones;
- seeders;
- backups;
- política de índices;
- auditoría;
- borrado lógico o físico;
- estrategia multiambiente.

## Modelado

- Nombrar tablas y campos de forma consistente.
- Definir claves primarias.
- Definir relaciones y restricciones.
- Evitar campos ambiguos como `data` sin esquema.
- Usar timestamps cuando sean útiles.
- Definir estados con enums o catálogos controlados.

## Consultas

- Validar filtros y paginación.
- Limitar resultados.
- Evitar N+1 queries.
- Seleccionar solo columnas necesarias.
- Usar transacciones en operaciones relacionadas.
- Medir consultas críticas.

## Seguridad

- Nunca construir SQL con strings inseguros.
- Validar ownership antes de leer o modificar datos.
- No exponer datos sensibles por defecto.
- Aplicar mínimos privilegios en credenciales.
- Separar claves de lectura y escritura si el proveedor lo permite.

## Criterios de aceptación

- El modelo de datos está documentado.
- Las migraciones son reproducibles.
- Las consultas críticas están optimizadas.
- Las operaciones sensibles validan permisos.
