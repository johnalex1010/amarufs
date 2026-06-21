# 19. Manejo de Errores

## Objetivo

Manejar errores de forma predecible, segura y útil para usuarios y equipos técnicos.

## Tipos de error

- Validación de entrada.
- Autenticación.
- Autorización.
- Recurso no encontrado.
- Conflicto de estado.
- Fallo de proveedor externo.
- Fallo de red.
- Error inesperado.

## Reglas generales

- No exponer stack traces al usuario.
- Mostrar mensajes claros y accionables.
- Registrar contexto técnico sin datos sensibles.
- Diferenciar errores esperados e inesperados.
- Usar códigos HTTP adecuados.
- Incluir estados vacíos cuando no hay datos.

## Next.js

Usar:

- `error.tsx` para errores recuperables por segmento.
- `not-found.tsx` para recursos inexistentes.
- `loading.tsx` para espera controlada.
- boundaries de cliente cuando una interacción lo requiera.

## APIs

Las respuestas de error deben incluir:

- código estable;
- mensaje seguro;
- detalles de validación cuando aplique;
- estado HTTP correcto.

## Criterios de aceptación

- Los errores esperados tienen manejo explícito.
- Los errores inesperados se registran.
- La UI no queda en blanco.
- Los mensajes no filtran información sensible.
