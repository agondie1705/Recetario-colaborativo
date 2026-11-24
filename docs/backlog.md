# Product Backlog

## Introducción

El Product Backlog recoge las funcionalidades que deberá implementar el proyecto Recetario Colaborativo.

Las historias de usuario se han priorizado según su importancia para el funcionamiento básico de la aplicación.

---

# Prioridad Alta

## HU-01 Consultar listado de recetas

Como usuario

Quiero ver un listado de recetas disponibles

Para poder seleccionar la que me interese.

### Criterios de aceptación

- Se muestran todas las recetas almacenadas.
- Cada receta muestra nombre, imagen y categoría.
- El listado se obtiene desde la base de datos.

---

## HU-02 Ver detalle de una receta

Como usuario

Quiero acceder al detalle de una receta

Para consultar toda su información.

### Criterios de aceptación

- Se muestra el nombre de la receta.
- Se muestran los ingredientes.
- Se muestran las cantidades.
- Se muestran las instrucciones de preparación.

---

## HU-03 Crear receta

Como usuario

Quiero crear nuevas recetas

Para ampliar el contenido del recetario.

### Criterios de aceptación

- Existe un formulario de creación.
- Los datos son validados.
- La receta se almacena en MySQL.
- Se muestra un mensaje de confirmación.

---

## HU-04 Editar receta

Como usuario

Quiero modificar una receta existente

Para corregir o actualizar su información.

### Criterios de aceptación

- Los datos actuales aparecen precargados.
- Los cambios se guardan correctamente.
- Se muestra un mensaje de confirmación.

---

## HU-05 Eliminar receta

Como usuario

Quiero eliminar recetas

Para mantener actualizado el contenido.

### Criterios de aceptación

- El usuario puede eliminar una receta.
- Se solicita confirmación.
- La receta desaparece del listado.

---

## HU-06 Gestionar categorías

Como usuario

Quiero asignar categorías a las recetas

Para organizarlas mejor.

### Criterios de aceptación

- Cada receta tiene una categoría.
- Se pueden consultar recetas por categoría.
- La categoría queda almacenada en la base de datos.

---

## HU-07 Gestionar ingredientes

Como usuario

Quiero asociar ingredientes a una receta

Para conocer los productos necesarios.

### Criterios de aceptación

- Una receta puede tener varios ingredientes.
- Se almacenan cantidades.
- La información se recupera desde la base de datos.

---

# Prioridad Media

## HU-08 Buscar recetas por nombre

Como usuario

Quiero buscar recetas por nombre

Para encontrarlas más rápidamente.

### Criterios de aceptación

- Existe un campo de búsqueda.
- La búsqueda muestra únicamente coincidencias.
- Se informa cuando no existen resultados.

---

## HU-09 Filtrar recetas por categoría

Como usuario

Quiero filtrar recetas por categoría

Para localizar recetas concretas.

### Criterios de aceptación

- Existe un selector de categorías.
- El filtro funciona correctamente.
- Solo se muestran las recetas coincidentes.

---

## HU-10 Validar formularios

Como usuario

Quiero que los formularios validen los datos

Para evitar errores al introducir información.

### Criterios de aceptación

- Se utilizan validaciones JavaScript.
- Se realiza validación también en PHP.
- Se muestran mensajes de error comprensibles.

---

## HU-11 Guardar preferencia visual

Como usuario

Quiero conservar mi preferencia visual

Para mantener la misma apariencia al volver a entrar.

### Criterios de aceptación

- La preferencia se almacena en una cookie.
- Se recupera automáticamente al cargar la página.

---

# Prioridad Baja

## HU-12 Reproducir contenido multimedia

Como usuario

Quiero visualizar recursos multimedia

Para enriquecer la experiencia de uso.

### Criterios de aceptación

- Existen al menos cinco imágenes.
- Existe un audio.
- Existe un vídeo.
- Los recursos incluyen controles de reproducción.

---

# Planificación por Sprint

## Sprint 1

- HU-01 Planificación y análisis.
- Diseño de wireframes.
- Diseño del modelo de datos.
- Preparación del repositorio.
- Configuración inicial de la base de datos.

## Sprint 2

- HU-02 Ver detalle de receta.
- HU-03 Crear receta.
- HU-04 Editar receta.
- HU-05 Eliminar receta.
- HU-06 Gestionar categorías.
- HU-07 Gestionar ingredientes.
- HU-08 Buscar recetas.
- HU-09 Filtrar recetas.
- HU-10 Validaciones JavaScript y PHP.
- HU-11 Cookies.
- HU-12 Multimedia.
- Pruebas y documentación final.