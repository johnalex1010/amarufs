# Imágenes del sitio

Coloca aquí los recursos finales del Home y de las propiedades.

## Rutas sugeridas

- `logo/amaru-fs-logo.svg` o `logo/amaru-fs-logo.png`
- `home/hero-property.webp`
- `properties/property-01.webp`
- `properties/property-02.webp`
- `properties/property-03.webp`

## Medidas sugeridas

- Logo: `240 x 72`
- Hero Home: `880 x 760`
- Tarjetas de propiedades: `420 x 260`

Usar imágenes optimizadas en `.webp` cuando sea posible. El CSS ya está preparado para `width: 100%`, `height: auto` y `object-fit: cover`.

## Criterios de calidad

- Usar nombres descriptivos, en minúsculas y con guiones: `hero-propiedad-familiar.webp`.
- Mantener imágenes finales optimizadas antes de subirlas al proyecto.
- Evitar duplicados, versiones temporales, capturas de prueba o archivos sin uso claro.
- Definir dimensiones estables en la implementación para evitar CLS.
- Usar `alt` significativo cuando la imagen aporte contenido y `alt=""` cuando sea decorativa.
- No reemplazar assets por archivos más pesados sin una razón documentada.
- Mantener una estructura de carpetas lógica por uso: `logo/`, `home/`, `properties/`.
