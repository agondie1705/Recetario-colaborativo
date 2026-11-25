# Definición del alcance y requisitos

## 1. Objetivo de la aplicación

El objetivo de este proyecto es desarrollar una aplicación web denominada **Recetario Colaborativo**, que permita almacenar, consultar y gestionar recetas de cocina mediante una interfaz sencilla y accesible.

La aplicación facilitará la organización de recetas a través de categorías e ingredientes, permitiendo además realizar operaciones de creación, consulta, modificación y eliminación sobre los datos almacenados.

---

## 2. Público objetivo

El Recetario Colaborativo está dirigido a usuarios interesados en la cocina que desean disponer de una herramienta sencilla para organizar y consultar recetas.

El público objetivo principal incluye:

- Estudiantes.
- Familias.
- Aficionados a la cocina.
- Personas que deseen almacenar recetas de forma digital.

La interfaz estará diseñada para usuarios con conocimientos informáticos básicos, priorizando la facilidad de uso y una navegación intuitiva.

---

## 3. Funcionalidades principales

La aplicación ofrecerá las siguientes funcionalidades:

### Consulta de recetas

- Visualizar un listado de recetas disponibles.
- Acceder al detalle completo de cada receta.
- Consultar ingredientes, cantidades e instrucciones de preparación.

### Gestión de recetas

- Crear nuevas recetas.
- Editar recetas existentes.
- Eliminar recetas almacenadas.

### Organización de la información

- Asignar categorías a las recetas.
- Asociar ingredientes a cada receta.
- Gestionar las cantidades necesarias de cada ingrediente.

### Búsqueda y filtrado

- Buscar recetas por nombre.
- Filtrar recetas por categoría.

### Recursos multimedia

- Mostrar imágenes relacionadas con las recetas.
- Integrar contenido de audio y vídeo relacionado con la temática gastronómica.

---

## 4. Información de las recetas

Cada receta almacenará la siguiente información:

- Identificador único.
- Nombre de la receta.
- Descripción.
- Categoría.
- Imagen asociada.
- Ingredientes.
- Cantidad de cada ingrediente.
- Instrucciones de preparación.

### Ejemplo

#### Tortilla de patatas

**Categoría:** Cocina tradicional

**Ingredientes:**

- 4 huevos
- 3 patatas
- Aceite de oliva
- Sal

**Preparación:**

1. Pelar y cortar las patatas.
2. Freír las patatas.
3. Batir los huevos.
4. Mezclar los ingredientes.
5. Cocinar la tortilla hasta obtener el punto deseado.

---

## 5. Categorías e ingredientes

### Categorías previstas

Las recetas se clasificarán en distintas categorías:

- Entrantes
- Platos principales
- Postres
- Bebidas
- Cocina vegetariana

### Ingredientes

Los ingredientes se almacenarán de forma independiente para permitir su reutilización en múltiples recetas.

Ejemplos:

- Huevo
- Harina
- Leche
- Tomate
- Queso
- Pollo

De esta forma una misma receta podrá tener varios ingredientes, y un mismo ingrediente podrá formar parte de distintas recetas.

---

## 6. Funcionalidades fuera del alcance

Para mantener un alcance adecuado al tiempo disponible y a los requisitos del proyecto, no se desarrollarán las siguientes funcionalidades:

- Registro de usuarios.
- Inicio de sesión.
- Sistema de comentarios.
- Valoraciones de recetas.
- Mensajería entre usuarios.
- Compartición en redes sociales.
- Aplicación móvil nativa.
- Notificaciones en tiempo real.
- Chat integrado.

Estas características podrían incorporarse en futuras versiones.

---

## 7. Tecnologías previstas

### Frontend

- HTML5
- CSS3
- Bootstrap
- JavaScript

### Backend

- PHP

### Base de datos

- MySQL mediante PDO

### Herramientas de desarrollo

- Visual Studio Code
- XAMPP
- GitHub

---

## 8. Propuesta inicial

La propuesta consiste en desarrollar una aplicación web de gestión de recetas de cocina llamada **Recetario Colaborativo**.

La aplicación permitirá consultar, crear, modificar y eliminar recetas almacenadas en una base de datos relacional. Cada receta estará asociada a una categoría y a varios ingredientes, permitiendo una organización eficiente de la información.

El desarrollo seguirá una arquitectura web tradicional basada en PHP, MySQL, HTML, CSS y JavaScript, incorporando además diseño responsive y recursos multimedia para cumplir los requisitos del proyecto.

---

## 9. Criterio de finalización

La fase de análisis se considerará completada cuando:

- El alcance del proyecto esté definido.
- El público objetivo esté identificado.
- Las funcionalidades principales estén documentadas.
- La información de las recetas esté definida.
- Las categorías e ingredientes estén establecidos.
- Las funcionalidades fuera del alcance estén delimitadas.
- La propuesta inicial haya sido validada por el profesor.