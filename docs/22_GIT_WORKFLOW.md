# 22. Flujo de Git

## Objetivo

Mantener un historial claro, revisable y seguro.

## Ramas

Estrategia recomendada:

- `main`: producción o rama estable.
- `develop`: integración si el equipo la necesita.
- `feature/nombre-corto`: nuevas funcionalidades.
- `fix/nombre-corto`: correcciones.
- `chore/nombre-corto`: mantenimiento.
- `docs/nombre-corto`: documentación.

## Commits

Cada commit debe:

- tener alcance claro;
- evitar mezclar cambios no relacionados;
- no incluir archivos generados manualmente;
- no incluir secretos;
- pasar validaciones mínimas.

Formato sugerido:

```txt
tipo: descripción breve
```

Tipos comunes:

- `feat`;
- `fix`;
- `docs`;
- `refactor`;
- `test`;
- `chore`;
- `perf`;
- `style`.

## Pull requests

Cada PR debe incluir:

- objetivo;
- cambios realizados;
- evidencia de validación;
- riesgos;
- capturas si hay UI;
- impacto en README o documentación;
- plan de rollback.

## Criterios de aceptación

- El historial es entendible.
- No hay secretos.
- Los cambios están agrupados por intención.
- Las validaciones se reportan antes de merge.
