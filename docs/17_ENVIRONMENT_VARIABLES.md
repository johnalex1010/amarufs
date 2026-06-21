# 17. Variables de Entorno

## Objetivo

Definir cómo documentar, validar y proteger variables de entorno en proyectos Next.js.

## Reglas principales

- Nunca versionar `.env` con secretos reales.
- Mantener `.env.example` sin valores sensibles.
- Validar variables al iniciar la aplicación.
- Separar variables públicas y privadas.
- Usar prefijo `NEXT_PUBLIC_` solo para valores seguros en navegador.

## Variables privadas

Usar para:

- credenciales de base de datos;
- API keys secretas;
- tokens de servicios;
- secretos de sesión;
- webhooks;
- credenciales SMTP;
- claves de cifrado.

Estas variables no deben usarse en Client Components.

## Variables públicas

Solo deben contener:

- URLs públicas;
- IDs no sensibles;
- flags seguros;
- configuración visible para el navegador.

Todo lo que tenga `NEXT_PUBLIC_` debe considerarse expuesto.

## Documentación requerida

Cada variable debe indicar:

- nombre;
- descripción;
- ejemplo seguro;
- ambiente requerido;
- si es pública o privada;
- impacto si falta;
- responsable del valor.

## Criterios de aceptación

- Existe `.env.example`.
- No hay secretos en el repositorio.
- Las variables requeridas se validan.
- Las variables públicas no contienen datos sensibles.
