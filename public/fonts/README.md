# Fuentes del sitio

Coloca aquí las fuentes finales en formato `.woff2`.

## Rutas sugeridas

- `amaru-sans.woff2`
- `amaru-display.woff2`

Luego activa los `@font-face` en `src/styles/fonts.css` y actualiza las variables:

- `--font-sans`
- `--font-display`

## Criterios de calidad

- Usar únicamente fuentes finales y con licencia válida para el proyecto.
- Preferir `.woff2` por peso y compatibilidad moderna.
- Nombrar archivos de forma descriptiva y consistente.
- Definir `font-display` en los `@font-face` para evitar bloqueos visuales innecesarios.
- No subir fuentes duplicadas, pruebas, versiones sin uso o archivos pesados sin justificación.
- Documentar en el README principal cualquier cambio que afecte la carga tipográfica o performance.
