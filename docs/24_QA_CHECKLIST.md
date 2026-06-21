# 24. Checklist de QA

## Objetivo

Validar que un cambio esté listo antes de entregarse o desplegarse.

## Funcionalidad

- El flujo principal funciona.
- Los estados vacíos están cubiertos.
- Los estados de carga están cubiertos.
- Los errores esperados se muestran correctamente.
- No hay datos mock accidentales.

## Responsive

- Mobile validado.
- Tablet validado.
- Desktop validado.
- No existe overflow horizontal.
- Textos y botones no se solapan.

## Accesibilidad

- Navegación por teclado.
- Foco visible.
- Labels en formularios.
- Contraste suficiente.
- Imágenes con `alt`.
- Roles semánticos correctos.

## SEO, GEO y AEO

- Title y description correctos.
- Jerarquía de encabezados.
- Enlaces internos funcionales.
- Datos estructurados válidos si aplican.
- Contenido claro y escaneable.

## Seguridad

- Entradas validadas.
- Salidas escapadas.
- Permisos verificados.
- No hay secretos.
- No hay logs sensibles.

## Técnica

- Lint ejecutado.
- Typecheck ejecutado.
- Tests ejecutados según alcance.
- Build ejecutado.
- README actualizado si aplica.
- Rollback definido.

## Criterios de aceptación

- Todos los puntos críticos del cambio están validados.
- Las validaciones no ejecutadas se reportan con motivo.
- No quedan TODO críticos ni debugging.
