<img width="1428" height="2286" alt="image" src="https://github.com/user-attachments/assets/6ebd5746-021b-44e5-8e02-2c142f6b8cae" />



**Explicación del diseño de la base de datos**

El objetivo de esta base de datos es almacenar información sobre recetas de cocina, sus ingredientes y las categorías a las que pertenecen. Para ello se han creado cuatro entidades principales que permiten organizar la información de forma eficiente y evitar duplicidades.

**1. Entidad Recetas**

La entidad Recetas almacena toda la información relacionada con cada receta, como su nombre, descripción, instrucciones de preparación, tiempo necesario y número de porciones.

Cada receta posee un identificador único llamado id_receta, que actúa como clave primaria y permite distinguir una receta de otra.

Ejemplo:

Receta: Tortilla de patatas
Tiempo de preparación: 30 minutos
Porciones: 4

**2. Entidad Ingredientes**

La entidad Ingredientes contiene todos los ingredientes que pueden utilizarse en las recetas.

Cada ingrediente dispone de una clave primaria denominada id_ingrediente.

Ejemplos:

Patata
Huevo
Aceite de oliva
Sal

También se almacena la unidad de medida para poder indicar cantidades correctamente.

**3. Entidad Categorías**

La entidad Categorías permite clasificar las recetas según el tipo de plato.

Cada categoría tiene un identificador único (id_categoria) y un nombre descriptivo.

Ejemplos de categorías:

Entrantes
Platos principales
Postres
Bebidas

La relación entre Categorías y Recetas es de uno a muchos (1:N), ya que una categoría puede contener muchas recetas, pero cada receta pertenece únicamente a una categoría.

**4. Relación entre Recetas e Ingredientes**

Una receta puede necesitar varios ingredientes y, a su vez, un mismo ingrediente puede utilizarse en distintas recetas.

Por ejemplo:

La tortilla de patatas necesita huevos, patatas y aceite.
Los huevos también se utilizan en una receta de flan.

Por este motivo existe una relación muchos a muchos (N:M) entre Recetas e Ingredientes.

Para resolver esta relación se crea una tabla intermedia llamada Receta_Ingrediente.

Esta tabla almacena:

La receta.
El ingrediente.
La cantidad necesaria.
Observaciones opcionales.

Ejemplo:

Receta	Ingrediente	Cantidad
Tortilla de patatas	Patata	500 g
Tortilla de patatas	Huevo	5 unidades
Tortilla de patatas	Aceite	100 ml

**5. Claves primarias y foráneas**

Las claves primarias permiten identificar de forma única cada registro:

id_receta
id_ingrediente
id_categoria

Las claves foráneas permiten relacionar las tablas entre sí:

id_categoria conecta Recetas con Categorías.
id_receta conecta Receta_Ingrediente con Recetas.
id_ingrediente conecta Receta_Ingrediente con Ingredientes.

**6. Conclusión**

Este modelo de datos está normalizado y permite gestionar recetas de forma eficiente. Gracias al uso de categorías y de la tabla intermedia Receta_Ingrediente, se evita la duplicación de información y se facilita la consulta de datos, como saber qué ingredientes necesita una receta o en qué recetas se utiliza un ingrediente determinado. Esto hace que la base de datos sea escalable y fácil de mantener.
