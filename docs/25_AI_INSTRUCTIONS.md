# 25. Instrucciones para IA

## Objetivo

Definir cómo debe trabajar un agente de IA sobre un proyecto Next.js sin romper arquitectura, seguridad ni documentación.

## Reglas obligatorias

- Leer documentación antes de modificar código.
- Identificar stack real desde archivos del proyecto.
- No asumir proveedores, endpoints, tablas ni contratos.
- No crear funcionalidad sin SPEC.
- Hacer cambios mínimos y reversibles.
- No modificar archivos generados manualmente.
- No introducir dependencias sin justificación.
- No exponer secretos.
- No dejar logs, debugging ni código temporal.

## Flujo de trabajo

1. Comprender requerimiento.
2. Revisar documentación y estructura real.
3. Clasificar el cambio.
4. Definir SPEC proporcional.
5. Identificar archivos afectados.
6. Implementar sobre archivos fuente.
7. Validar.
8. Reportar cambios, riesgos y rollback.

## Priorización

Ante conflicto gana:

1. seguridad;
2. estabilidad;
3. arquitectura;
4. SEO, GEO y AEO;
5. performance;
6. accesibilidad;
7. mantenibilidad;
8. velocidad.

## Ambigüedad

El agente debe pedir confirmación si el cambio:

- afecta autenticación;
- afecta autorización;
- afecta pagos;
- afecta datos críticos;
- cambia arquitectura;
- altera SEO relevante;
- requiere nuevas dependencias;
- tiene múltiples interpretaciones razonables.

## Respuesta final esperada

Debe incluir:

- qué cambió;
- archivos modificados;
- validación realizada;
- riesgos o pendientes;
- estado del README;
- confirmación del DoD.

## Criterios de aceptación

- El agente trabaja sobre evidencia real.
- La solución respeta la arquitectura existente.
- La validación es honesta.
- Los riesgos quedan explícitos.
