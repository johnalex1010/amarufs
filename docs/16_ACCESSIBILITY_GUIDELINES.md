# 16. Guía de Accesibilidad

## Objetivo

Garantizar que la aplicación pueda ser usada por personas con diferentes capacidades, dispositivos y tecnologías de asistencia.

## HTML semántico

- Usar landmarks: `header`, `nav`, `main`, `footer`, `aside`.
- Mantener un solo `h1` por página cuando sea posible.
- Respetar jerarquía de encabezados.
- Usar botones para acciones y enlaces para navegación.
- Asociar labels con campos.

## Teclado y foco

- Todo elemento interactivo debe ser accesible por teclado.
- El foco debe ser visible.
- Los modales deben manejar foco inicial y retorno.
- Los menús deben cerrarse con Escape cuando aplique.
- No bloquear navegación con tab.

## Formularios

- Labels explícitos.
- Mensajes de error claros.
- Errores asociados con `aria-describedby`.
- Validación en cliente y servidor.
- Instrucciones antes de la acción, no solo después del error.

## Contenido visual

- Imágenes informativas con `alt`.
- Imágenes decorativas con `alt=""`.
- Contraste suficiente.
- No depender solo del color.
- Respetar reducción de movimiento.

## Criterios de aceptación

- La navegación por teclado funciona.
- Los lectores de pantalla reciben nombres claros.
- Los formularios comunican errores.
- No hay trampas de foco.
- La interfaz conserva contraste y legibilidad.
