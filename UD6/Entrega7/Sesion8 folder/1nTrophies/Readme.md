![1768554965601](image/README/1768554965601.png)

Primero tenemos que crear la carpeta del proyecto

![1768555006918](image/README/1768555006918.png)

Ahora hacemos las migraciones

![1768555055450](image/README/1768555055450.png)

Ahora dntro de migraciones seleccionamos la que termine por "create_trophies_table.php" y la modificamos por lo que vemos en la imagen

![1768555125406](image/README/1768555125406.png)

![1768555163583](image/README/1768555163583.png)

Nos vamos ahora al arcivo User.php dentro de app/Models

![1768555215017](image/README/1768555215017.png)

Y a continuacion el Trophy.php

![1768555247829](image/README/1768555247829.png)

Ahora ejecutamos este comando para crear 3 usuarios en la base de datos

![1768555814740](image/README/1768555814740.png)

Creamos varios apartados de usuario por eso como podemos ver si en la URL en vez de poner "http://127.0.0.1:8000/users/1/trophies" ponemos
"http://127.0.0.1:8000/users/2/trophies" nos saldran otros usuaios

![1768555828295](image/README/1768555828295.png)
