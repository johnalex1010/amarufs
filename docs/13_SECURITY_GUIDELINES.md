# 13. Guía de Seguridad

## Objetivo

Reducir riesgos de seguridad desde la arquitectura, el código y la operación del proyecto.

## Principios

- Toda entrada es no confiable.
- El servidor valida siempre.
- El cliente mejora UX, no garantiza seguridad.
- Los secretos nunca llegan al navegador.
- Los permisos se validan por acción, no solo por ruta.

## Entradas

Validar y sanitizar:

- formularios;
- parámetros de ruta;
- search params;
- headers;
- cookies;
- archivos;
- webhooks;
- respuestas de terceros.

## Salidas

- Escapar contenido según contexto.
- Evitar `dangerouslySetInnerHTML`; si se usa, sanitizar HTML.
- No renderizar datos sensibles.
- Evitar mensajes de error con detalles internos.

## Headers y navegador

Configurar según el proyecto:

- Content Security Policy;
- `X-Frame-Options` o `frame-ancestors`;
- `Referrer-Policy`;
- `Permissions-Policy`;
- cookies seguras;
- HTTPS obligatorio en producción.

## Dependencias

- Revisar vulnerabilidades.
- Evitar paquetes innecesarios.
- Bloquear versiones con lockfile.
- Actualizar dependencias críticas con pruebas.

## Criterios de aceptación

- No hay secretos hardcodeados.
- Las entradas se validan.
- Las salidas son seguras.
- Las rutas sensibles verifican autorización.
- Las dependencias críticas están controladas.
