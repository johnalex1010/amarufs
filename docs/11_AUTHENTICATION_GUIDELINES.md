# 11. Guía de Autenticación

## Objetivo

Definir criterios para autenticar usuarios de forma segura en proyectos Next.js, sin asumir proveedor específico.

## Decisiones obligatorias

Cada proyecto debe definir:

- proveedor de autenticación;
- tipo de sesión;
- duración de sesión;
- refresh de sesión;
- estrategia de logout;
- recuperación de contraseña;
- verificación de correo;
- MFA si aplica;
- roles y permisos;
- rutas públicas y privadas.

## Reglas de seguridad

- No guardar tokens sensibles en localStorage.
- Preferir cookies `HttpOnly`, `Secure` y `SameSite`.
- Validar sesión en servidor.
- No confiar en estado de autenticación del cliente.
- Rotar sesiones cuando cambien credenciales críticas.
- Invalidar sesiones al cerrar sesión.

## Protección de rutas

Definir:

- middleware si aplica;
- validación en layouts protegidos;
- validación en Route Handlers;
- redirecciones seguras;
- comportamiento para usuarios no autenticados;
- comportamiento para usuarios sin permisos.

## Autorización

Autenticación no equivale a autorización. Cada acción sensible debe validar:

- identidad;
- rol;
- permiso;
- ownership del recurso;
- estado del recurso.

## Criterios de aceptación

- Las rutas privadas no dependen solo del cliente.
- Las sesiones no exponen secretos.
- Las acciones sensibles validan permisos.
- Los flujos de login, logout y recuperación están documentados.
