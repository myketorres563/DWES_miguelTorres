# UD 4 Acceso a Datos

## 1. Un Poco de Historia

![1761728481370](image/entrega5/1761728481370.png)

[Enalace1](https://www.php.net/manual/es/history.php.php)

[Enlace2](https://drupalsapiens.com/es/blog/php/historial-y-cronologia-de-versiones-php)

PHP inicialmente fue conocido como "Pagina de inicio personal" y fue escrito en lenguaje C como un conjunto de herramientas de script PERL/CGI

## 2. Preparando el Entorno

![1761729283448](image/entrega5/1761729283448.png)

Como podemos ver en el XAMPP arrancamos el Apache y MySQL

![1761729404256](image/entrega5/1761729404256.png)

Y en el apartado de MySQL le damos a admin y se nos habre en el navegador

![1761729837284](image/entrega5/1761729837284.png)

Hemos creado una base de datos para la asignatura llamada "dwes"

Yo he creado esta estructura de carpetas

![1761731917005](image/entrega5/1761731917005.png)

## Programa1

![1761731941341](image/entrega5/1761731941341.png)

Como podemos ver en el codigo creamos una variable con una consulta SQL esto motraria lo que vemos en la imagen de abajo

![1761731955241](image/entrega5/1761731955241.png)

## Programa2

![1761732521679](image/entrega5/1761732521679.png)

Con esta consulta sql he creado la tabla que vemos abajo

![1761732509934](image/entrega5/1761732509934.png)

![1761732626469](image/entrega5/1761732626469.png)

Tenemos un codigo php que nos devuelve lo que vemos abajo si se a conectado exitosamente

![1761732615318](image/entrega5/1761732615318.png)

## Programa2/2

![1761733328921](image/entrega5/1761733328921.png)

El codigo nos inserta en la base de datos las personas en la BD

![1761733305714](image/entrega5/1761733305714.png)

![1761828699472](image/entrega5/1761828699472.png)

Con este codigo hemos modificado el salario de un usuario ya añadido seleccionando el id y el salario en la lina 7 y 8

![1761828996398](image/entrega5/1761828996398.png)

en la lina 7 hemos puesto un ID que no existe y saltaria el error

![1761830218833](image/entrega5/1761830218833.png)

El codigo que acabo de mostrar tenemos que elgir el ID de un usuario paea eliminarlo

![1761831223494](image/entrega5/1761831223494.png)

Este codigo es el ejemplo de una mala practica para insertar datos a la base de datos

## PDO(PHP Data Objects)



## Programa3

![1761832123945](image/entrega5/1761832123945.png)

Esta es la estructura de archivos

![1761832142435](image/entrega5/1761832142435.png)

Esta es la consulta para crear la tabla

![1761832170812](image/entrega5/1761832170812.png)

Este es el archivo php de la conexion

![1761832195513](image/entrega5/1761832195513.png)

Y este es el archivo que hace las consultas y las muestra
