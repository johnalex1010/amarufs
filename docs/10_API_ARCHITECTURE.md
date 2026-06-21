# 10. Arquitectura de APIs

## Objetivo

Definir cómo crear, consumir y proteger APIs en proyectos Next.js sin acoplar UI, reglas de negocio e infraestructura.

## Opciones en Next.js

- Route Handlers para endpoints internos.
- Server Actions para mutaciones acopladas a UI controlada.
- Servicios externos cuando el backend vive fuera de Next.js.
- SDKs internos cuando existan contratos compartidos.

## Reglas para endpoints

Todo endpoint debe:

- validar método HTTP;
- validar entrada;
- autenticar cuando aplique;
- autorizar por rol, permiso u ownership;
- manejar errores esperados;
- retornar códigos HTTP correctos;
- evitar exponer stack traces;
- registrar fallos relevantes sin datos sensibles.

## Contratos

Cada API debe documentar:

- ruta;
- método;
- autenticación requerida;
- parámetros;
- payload;
- respuesta exitosa;
- errores esperados;
- límites de uso;
- estrategia de caché.

## Validación

Validar:

- `params`;
- `searchParams`;
- body;
- headers relevantes;
- archivos subidos;
- respuestas externas.

## Criterios de aceptación

- Los contratos son explícitos.
- No se confía en datos del cliente.
- Los errores son controlados.
- Las APIs no filtran secretos.
- Existen pruebas para rutas críticas.
