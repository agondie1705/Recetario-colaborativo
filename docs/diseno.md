# Diseño de interfaz y navegación

## Herramienta utilizada

Los wireframes de la aplicación han sido diseñados utilizando Figma.

Enlace al proyecto:

https://www.figma.com/make/KZEGHNgxRtZ7vHYmLeX2Kp/Wireframes-del-Recetario-Colaborativo?t=S9uUrCXuO2zldJzn-0
---

## Objetivos del diseño

Durante la fase de diseño se ha buscado crear una interfaz sencilla, intuitiva y responsive, permitiendo que cualquier usuario pueda consultar y gestionar recetas de cocina de forma fácil.

Los wireframes sirven como guía para la implementación posterior mediante HTML, CSS, Bootstrap, JavaScript y PHP.

---

## Pantallas diseñadas

### Página de inicio

La página principal actúa como punto de acceso a la aplicación.

Incluye:

- Logo y menú de navegación.
- Título principal.
- Barra de búsqueda.
- Accesos rápidos a las funcionalidades principales.
- Sección de recetas destacadas.
- Pie de página.

---

### Listado de recetas

Permite visualizar todas las recetas almacenadas.

Incluye:

- Buscador por nombre.
- Filtro por categoría.
- Tarjetas de recetas.
- Acceso a la vista de detalle.

---

### Detalle de receta

Muestra toda la información asociada a una receta.

Incluye:

- Imagen principal.
- Nombre de la receta.
- Categoría.
- Ingredientes y cantidades.
- Instrucciones de preparación.
- Opciones de edición y eliminación.

---

### Crear receta

Permite introducir una nueva receta en la base de datos mediante un formulario.

Incluye campos para:

- Nombre.
- Descripción.
- Categoría.
- Imagen.
- Ingredientes.
- Preparación.

---

### Editar receta

Permite modificar la información de una receta existente utilizando un formulario similar al de creación.

---

## Navegación

La navegación principal de la aplicación seguirá el siguiente flujo:

- Inicio → Listado de recetas.
- Inicio → Crear receta.
- Listado → Detalle de receta.
- Detalle → Editar receta.
- Detalle → Eliminar receta.

---

## Diseño responsive

La interfaz ha sido diseñada teniendo en cuenta su adaptación a dispositivos móviles y ordenadores.

Se utilizará Bootstrap junto con CSS propio para garantizar una correcta visualización en diferentes tamaños de pantalla.

---

## Conclusiones

Los wireframes permiten definir la estructura visual de la aplicación antes del desarrollo, facilitando la planificación de la interfaz y mejorando la organización del proyecto.

# Guía de estilo

## Identidad visual

La aplicación sigue una estética minimalista y moderna, priorizando la legibilidad y la facilidad de navegación.

La interfaz utiliza espacios amplios, componentes sencillos y una distribución ordenada para facilitar la consulta de recetas.

---

## Paleta de colores

### Color principal

Azul oscuro

```css
#1E293B
```

Uso:

- Encabezados.
- Logo.
- Elementos destacados.
- Botones principales.

### Color secundario

Beige cálido

```css
#D6B89C
```

Uso:

- Elementos decorativos.
- Indicadores visuales.
- Detalles de navegación.

### Fondo principal

```css
#F8F8F8
```

### Fondo de tarjetas

```css
#FFFFFF
```

### Color del texto

```css
#2B2B2B
```

### Bordes y separadores

```css
#E5E7EB
```

---

## Tipografías

### Títulos

Poppins

Características:

- Moderna.
- Elegante.
- Alta legibilidad.

### Texto general

Inter

Características:

- Muy legible.
- Excelente para interfaces.
- Optimizada para pantallas.

---

## Botones

Características:

- Bordes redondeados.
- Diseño limpio.
- Contraste elevado.
- Efectos hover suaves.

Botón principal:

```css
background-color: #1E293B;
color: white;
border-radius: 10px;
```

Botón secundario:

```css
background-color: #FFFFFF;
color: #1E293B;
border: 1px solid #E5E7EB;
```

---

## Tarjetas

Las recetas se mostrarán mediante tarjetas con:

- Imagen superior.
- Nombre de la receta.
- Categoría.
- Botón de acceso al detalle.

Características:

- Fondo blanco.
- Bordes redondeados.
- Sombra suave.
- Espaciado uniforme.

---

## Formularios

Los formularios seguirán una estructura vertical.

Características:

- Etiquetas claras.
- Campos amplios.
- Mensajes de validación visibles.
- Diseño consistente en toda la aplicación.

---

## Navegación

La aplicación utilizará un menú superior fijo con acceso a:

- Inicio.
- Recetas.
- Crear receta.

El logotipo permitirá volver a la página principal desde cualquier pantalla.

---

## Diseño responsive

La interfaz se adaptará a:

- Ordenadores.
- Tablets.
- Dispositivos móviles.

Para ello se utilizarán:

- Bootstrap.
- CSS personalizado.
- Media Queries.