# Prueba-Practica
***
## Contenido
* Información General
* Requisitos
* Guia de Instalación
* Aclaraciones
***
1. Información General</br>
Este programa está hecho para la gestión de inventario y la relización de compras de productos que deben ser registrados.
La página se encuentra terminado y listo para su uso.
***
2. Requisitos</br>
Para poder utilizar este programa debes contar con un sistema operativo de Windows XP en adelante, XAMMP para montar la página y MySQL para montar la base de datos.
***
3. Guía de Instalación</br>
Para instalarlo, primero debes ingresar a la ruta C:/xammp/htdocs y ahí pegar toda la carpeta que contiene este archivo (Prueba-Practica), luego abrir el archivo BaseDeDatos.sql que se encuentra en la carpeta "BD", en MySQL, seguido a eso, debes hacer la conexión en MySQL para poder ejecutar el contenido del archivo, para esto debes tener encendio el servicio "MySQL" en el panel de control de XAMMP.
Ya hecha la conexión, procede a ejecutar lo que se encuentra en el archivo para así poder montar la base de datos correspondiente a la página.
Finalmente, para poder ejecutar la página, debes iniciar el servicio "Apache" en el panel de control de XAMMP, luego ir a tu navegador, preferiblemente Google Chrome, y en la barra de direcciones colocar la dirección del aarchivo index.php, que se encuentra en la carpeta "View" del proyecto, comunmente la ruta sería la siguiente: "http://localhost/pruebapractica/View/index.php".
Y listo, ya podrías usar el aplicativo.
***
4. Aclaraciones</br>
En la zona de compra, para realizar una compra solo debes de ingresar el código del producto, los cuales se pueden ver en la tabla que está en la parte superior-izquierda, al hacer esto se descontará una unidad de el stock del producto correspondiente.
