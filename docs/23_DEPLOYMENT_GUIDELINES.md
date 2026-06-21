# 23. Guía de Despliegue

## Objetivo

Definir un flujo de despliegue reproducible, seguro y verificable para proyectos Next.js.

## Ambientes

Todo proyecto debe definir:

- local;
- development;
- staging;
- production.

Cada ambiente debe tener variables, base de datos y credenciales separadas.

## Pipeline mínimo

Antes de desplegar:

1. Instalar dependencias desde lockfile.
2. Validar formato y lint.
3. Ejecutar typecheck.
4. Ejecutar pruebas requeridas.
5. Ejecutar build.
6. Validar variables de entorno.
7. Publicar artefacto.
8. Ejecutar smoke test.

## Build

El build debe fallar si:

- faltan variables requeridas;
- hay errores de tipos;
- hay errores de lint bloqueantes;
- fallan pruebas críticas;
- se detectan secretos versionados.

## Postdespliegue

Validar:

- home y rutas críticas;
- login si aplica;
- APIs principales;
- metadata SEO;
- errores de consola;
- Core Web Vitals básicos;
- logs de servidor;
- monitoreo.

## Rollback

El proyecto debe documentar:

- cómo volver al despliegue anterior;
- cómo revertir migraciones;
- cómo desactivar flags;
- responsable de aprobación;
- riesgos posteriores.

## Criterios de aceptación

- El despliegue es reproducible.
- Staging se valida antes de producción.
- Existe rollback documentado.
- Las variables de producción no se exponen.
