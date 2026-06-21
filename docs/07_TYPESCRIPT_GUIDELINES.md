# 07. Guía de TypeScript

## Objetivo

Usar TypeScript para reducir errores en tiempo de ejecución, documentar contratos y mejorar la mantenibilidad del proyecto.

## Configuración recomendada

- Activar `strict`.
- Evitar `skipLibCheck` salvo necesidad documentada.
- Definir aliases claros para imports.
- Mantener `noImplicitAny` activo.
- Tratar errores de tipos como bloqueantes en CI.

## Reglas de tipado

- Tipar entradas y salidas de funciones públicas.
- Usar tipos derivados cuando el contrato venga de esquemas.
- Evitar duplicar tipos entre frontend y backend.
- Preferir `unknown` sobre `any` para datos externos.
- Validar datos externos antes de convertirlos a tipos internos.

## Tipos e interfaces

Usar `type` para:

- uniones;
- tipos derivados;
- composición;
- aliases.

Usar `interface` cuando:

- se modelen contratos extensibles;
- se integren librerías que esperan extensión por declaración.

## Datos externos

Nunca confiar en:

- parámetros de URL;
- payloads de formularios;
- respuestas de APIs;
- cookies;
- headers;
- localStorage;
- search params.

Todo dato externo debe validarse antes de usarse.

## Criterios de aceptación

- No hay `any` injustificado.
- Los contratos importantes están tipados.
- Los datos externos se validan.
- El proyecto pasa `tsc --noEmit` o el typecheck definido.
