# 20. Logging y Monitoreo

## Objetivo

Tener visibilidad sobre errores, rendimiento y comportamiento del sistema sin exponer datos sensibles.

## Qué registrar

- errores inesperados;
- fallos de autenticación relevantes;
- fallos de autorización;
- errores de integraciones externas;
- jobs fallidos;
- webhooks rechazados;
- eventos críticos de negocio;
- métricas de performance.

## Qué no registrar

- contraseñas;
- tokens;
- cookies completas;
- números de tarjeta;
- documentos sensibles;
- payloads privados completos;
- información personal innecesaria.

## Estructura de logs

Cada log relevante debe incluir:

- nivel;
- mensaje;
- timestamp;
- ambiente;
- módulo;
- request ID o correlation ID;
- usuario anonimizado si aplica;
- contexto técnico mínimo.

## Monitoreo

Medir:

- errores de servidor;
- errores de cliente;
- latencia;
- tasa de éxito de APIs;
- Core Web Vitals;
- disponibilidad;
- uso de recursos;
- fallos de despliegue.

## Criterios de aceptación

- Los errores críticos son visibles.
- Los logs no contienen secretos.
- Hay trazabilidad por request.
- Existen alertas para fallos importantes.
