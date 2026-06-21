# 06. Estándares de Código

## Objetivo

Mantener un código consistente, legible y seguro en todo el proyecto.

## Reglas generales

- TypeScript obligatorio.
- Evitar `any`; si es inevitable, justificarlo.
- Preferir funciones pequeñas y puras.
- Evitar duplicación.
- No dejar código muerto.
- No dejar `console.log`, debugging ni comentarios temporales.
- No hardcodear secretos, URLs sensibles ni credenciales.
- Usar nombres claros y específicos.

## Formato

El proyecto debe definir:

- ESLint;
- Prettier o formateador equivalente;
- reglas de imports;
- orden de propiedades cuando aplique;
- convenciones de nombres;
- validación automática en CI.

## Manejo de errores

- Capturar errores esperados.
- No ocultar fallos críticos.
- No exponer detalles internos al usuario.
- Registrar contexto útil sin datos sensibles.
- Mostrar mensajes comprensibles en UI.

## Comentarios

Usar comentarios solo cuando expliquen:

- decisiones no evidentes;
- restricciones externas;
- trade-offs técnicos;
- reglas de negocio complejas.

Evitar comentarios que repiten lo que el código ya dice.

## Criterios de aceptación

- El código pasa lint y typecheck.
- No hay logs temporales.
- No hay secretos.
- Los nombres expresan intención.
- Las decisiones complejas están documentadas.
