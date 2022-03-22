# BaseDeDatos
En este proyecto se realizo un sistema de bases de datos en MYSQL, el cual administra el proceso de ventas realizadas en una tienda de ventas de celulares que registra los productos disponibles, los vendedores, y las ventas que se realicen, para su posterior consulta.

Objetivos que se pretenden obtener con el sistema:
● Facilitar la gestión de ventas de celulares.
● Mejorar el flujo de la venta de celulares.
● Facilitar el registro de contabilidad de la tienda.
● Hacer análisis de los clientes, para próximas decisiones de la tienda.

La explicacion de los indices de gestion y los requerimientos dde informacion a satisfacer, el modelo entidad-relacion y las demostraciones del funcionamiento del sistema, se encuentran en 'Informe final.pdf'


## Los directorios se administran de la siguiente manera:

La carpeta BD, es solo las instancias, con las cuales se conecta a la base de datos local.

En el archivo data-dumb.sql se encuentran los datos utilizados.

La carpeta Formularios, tendra los formulario para poder ingresar nuevos datos a la BD

La carpeta Query, tendra las query de las consultas que el usuario hara al sistema

La carpeta Tablas, sera una vista de todos los datos de las tablas de la BD

El archivo redirect.php lo uso solo para poder eliminar los datos post, recibidos por el index, para que cuando se
refresque al pagina, no salga nuevamente el resultado.
