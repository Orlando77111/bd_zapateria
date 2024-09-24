# sistemas para una zapateria 

## Modelo Entidad_relacion

![modelo entidad_relacion](img/bd_zapateria.png "Modelo entidad-relacion")

## Modelo Fisico de la BD

![modelo fisico](img/Captura%20desde%202024-09-24%2007-19-28.png "modelo fisico de la Bd")

## tabla fabricante

![tabla fabricante](img/Captura%20desde%202024-09-24%2008-28-13.png "tabla fabricante")

## articulo 
![articulo](img/Captura%20desde%202024-09-24%2008-39-27.png "articulo")

## consultas a la bd

1. Mostrar la lista de todos datos de los fabricantes

`SELECT * FROM fabricante;`

2. Mostrar la lista de nombres de los fabricantes 

`SELECT nombre_fabricante AS fabricante FROM fabricante;`

![consulta](img/Consulta_2.png "consulta2")

3. Mostrar los nombres de los productos.

`SELECT nombre_articulo FROM * articulo`

![consulta3](img/Consulta_3.png "consulta3")

4. mostrar los precios de los nombres de los productos

`SELECT nombre_articulo AS Nombre, precio_articulo AS Precio FROM Articulo;`

![consulta4](img/Consulta_4.png)

5. Obtener los nombres de los articulos cuyos precios sean mayor a 50000

`SELECT nombre_articulo FROM Articulo WHERE precio_articulo > 50000;`

![consulta5](img/Consulta_5.png)

6. Obtener el nombre de los articulos cuyo precio este entre 5000 y 40000 ambos incluidos 

## Forma 1
`SELECT nombre_articulo FROM Articulo WHERE precio_articulo >= 5000 AND precio_articulo <= 40000;`
## Forma 2
`SELECT nombre_articulo FROM Articulo WHERE precio_articulo BETWEEN 5000 AND 40000;`

![consulta5](img/Consulta_6.png)
