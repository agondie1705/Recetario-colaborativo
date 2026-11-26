# Modelo de Datos

## Introducción

El objetivo de este modelo es definir la estructura de la base de datos que utilizará la aplicación Recetario Colaborativo para almacenar las recetas y toda la información relacionada.

La base de datos se compone de tres entidades principales:

- Recetas
- Ingredientes
- Categorías

Asimismo, se incorpora una tabla intermedia para gestionar la relación entre recetas e ingredientes.

---

# Diagrama entidad-relación

El diagrama entidad-relación se encuentra en:

[DiagramaEntidad-Relacion](/docs/img/diagrama_er.png)

---

# Entidad Recetas

Almacena la información principal de cada receta.

| Campo | Tipo | Descripción |
|---------|---------|---------|
| id_receta | INT | Identificador único |
| nombre | VARCHAR(100) | Nombre de la receta |
| descripcion | TEXT | Descripción breve |
| imagen | VARCHAR(255) | Ruta de la imagen |
| preparacion | TEXT | Instrucciones de elaboración |
| id_categoria | INT | Categoría asociada |

### Clave primaria

- id_receta

---

# Entidad Categorías

Permite clasificar las recetas.

| Campo | Tipo | Descripción |
|---------|---------|---------|
| id_categoria | INT | Identificador único |
| nombre | VARCHAR(50) | Nombre de la categoría |

### Clave primaria

- id_categoria

---

# Entidad Ingredientes

Almacena los ingredientes disponibles.

| Campo | Tipo | Descripción |
|---------|---------|---------|
| id_ingrediente | INT | Identificador único |
| nombre | VARCHAR(100) | Nombre del ingrediente |

### Clave primaria

- id_ingrediente

---

# Relación Recetas-Ingredientes

Una receta puede contener varios ingredientes y un ingrediente puede formar parte de varias recetas.

Para resolver esta relación muchos a muchos se utilizará una tabla intermedia.

## Tabla receta_ingrediente

| Campo | Tipo | Descripción |
|---------|---------|---------|
| id_receta | INT | Receta asociada |
| id_ingrediente | INT | Ingrediente asociado |
| cantidad | VARCHAR(50) | Cantidad necesaria |

### Claves foráneas

- id_receta → recetas.id_receta
- id_ingrediente → ingredientes.id_ingrediente

---

# Relaciones

## Categorías y recetas

Una categoría puede contener muchas recetas.

Una receta pertenece a una única categoría.

Relación:

```text
CATEGORIAS (1) -------- (N) RECETAS
```

---

## Recetas e ingredientes

Una receta puede tener muchos ingredientes.

Un ingrediente puede pertenecer a muchas recetas.

Relación:

```text
RECETAS (N) -------- (N) INGREDIENTES
```

Implementada mediante:

```text
RECETA_INGREDIENTE
```

---

# Claves primarias y foráneas

## Claves primarias

- recetas.id_receta
- categorias.id_categoria
- ingredientes.id_ingrediente

## Claves foráneas

- recetas.id_categoria
- receta_ingrediente.id_receta
- receta_ingrediente.id_ingrediente

---

# Conclusión

El modelo diseñado permite almacenar recetas, categorías e ingredientes de forma estructurada y normalizada.

La utilización de una tabla intermedia para la relación entre recetas e ingredientes facilita la reutilización de ingredientes en múltiples recetas y evita la duplicación de información.