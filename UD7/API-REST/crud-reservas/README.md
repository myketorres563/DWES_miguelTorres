# CRUD venues  Reservas

![1771418106461](image/README/1771418106461.png)

Primero tenemos que crear el proyecto

![1771418660514](image/README/1771418660514.png)

Ahora vemos que la configuracion del archivo .env esta bien 

![1771418280990](image/README/1771418280990.png)

Ahora instalamos la API

![1771418325809](image/README/1771418325809.png)

Ahora hacemos las migraciones

![1771418376964](image/README/1771418376964.png)

Ahora en la clase User nos aseguramos de tener el "use HasApiTokens"

![1771418465706](image/README/1771418465706.png)

Ahora creamos el modelo reserva con la migracion, el factory y lo seeder incluidos

![1771418617912](image/README/1771418617912.png)

Ahora modificamos los campos de la migracion de create_reservations_table y ejecutamos la migracion

![1771418757849](image/README/1771418757849.png)

![1771418852145](image/README/1771418852145.png)

Ahora modificamos las funciones run de los dos archivos que hay dentro de la carpeta seeder

![1771418927071](image/README/1771418927071.png)

Ahora ejecutamos este comando

![1771419024831](image/README/1771419024831.png)

Ahora creamos una Auth API

![1771419052109](image/README/1771419052109.png)

Ahora ejecutamos estos dos comandos

![1771419113180](image/README/1771419113180.png)

Ahora en el archivo StoreReservationRequiest modificamos el return de la funcion rules

![1771419178075](image/README/1771419178075.png)

Y hacemos lo mismo en el ruele de UpdateReservationRequest

![1771419231428](image/README/1771419231428.png)

Ahora creamos un controlador CRUD

![1771419347993](image/README/1771419347993.png)

Ahora rellenamos todas las funciones del archivo ReservationController

![1771419413717](image/README/1771419413717.png)

A continuacion rellenamos todas las routas en el api.php


![1771419713625](image/README/1771419713625.png)

Ya cuando arrancamos el servidor nos mostraria
