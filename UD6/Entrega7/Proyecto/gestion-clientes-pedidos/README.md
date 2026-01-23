dePrimero tenemos que crear la carpeta del poryecto

![1768986821623](image/README/1768986821623.png)

Creamos las migraciones de Client y Order

![1768987331903](image/README/1768987331903.png)

Ahora nos vamos a la migracion de create_cliente_table e insertamos los atributos/valores

![1768987935205](image/README/1768987935205.png)

Y ahora modificamos la migracion de create_orders_table e insertamos los atributos/valores

![1768987836526](image/README/1768987836526.png)

Como podemos ver la base de datos se ha creado correctamente

![1769087039272](image/README/1769087039272.png)

Ahora nos vamo al App/model y modificamos los archivos

Añadimos $fillable para permitir guardar datos y la relación orders

![1769087130443](image/README/1769087130443.png)

Hacemos los mismo con Order.php

![1769087230677](image/README/1769087230677.png)

Ahora en database/factories/ClientFactory.php

![1769087469925](image/README/1769087469925.png)

Y ahora en la misma carpeta pero el archivo OrderFactory.php

![1769087562197](image/README/1769087562197.png)

Ahora en DatabaseSeeder hacemos que nos cree 10 usuarios y nos añadan 3 pedidos por usuario

![1769087650757](image/README/1769087650757.png)

Ahora ejecutamos este comando en la terminal para reiniciar la base de datos y ejecutar los seeder

![1769087713021](image/README/1769087713021.png)

Ahora creamos los Controller de Client y de Order

![1769087873101](image/README/1769087873101.png)

A continuacion nos vamos al archivo de web.php dentro de la carpeta de route y añadimos las routas de los controller

![1769087982086](image/README/1769087982086.png)

Ahora si nos vamos al ClientContreller.php y añadimos lo que vemos en la funcion Index para que nos muestre todos los usuarios

![1769088124859](image/README/1769088124859.png)

Ahora nos vamos a resources/views y creamos la carpeta clients y dentro el index

![1769088211355](image/README/1769088211355.png)

Ahora desde la terminal arrancamos lal pagina

![1769088330543](image/README/1769088330543.png)

Y ahora en la URL añadimos "/clients"

![1769088306386](image/README/1769088306386.png)

Ahora nos volvemos al archivo anterior y le damos funcionalidad a la funcion "show"

![1769088548940](image/README/1769088548940.png)

Y tambien creamos su show.blade.php

![1769088578288](image/README/1769088578288.png)

Y ahora cuando le das a ver

![1769173465533](image/README/1769173465533.png)

Ahora seguiremos con ClientController y añadimos la en create la vista

![1769174769918](image/README/1769174769918.png)

Ahora creamos la vista dentro de la carpeta clients

![1769174864289](image/README/1769174864289.png)

Ahora volvemos al ClientController y rellenamos el store

![1769174947523](image/README/1769174947523.png)

Y ahora cuando nos vallamos al navegador y vallamos a la opcion de crear cliente nos llevaria hasta esta ventana

![1769175092752](image/README/1769175092752.png)

Ahora apadimos la vista de edit

![1769175275193](image/README/1769175275193.png)

Ahora en el edit.blade.php añadirmos el codigo de lo que cargaria en el navegador

![1769175356393](image/README/1769175356393.png)

Y ahora tendriamos que añadirle funcionalidad a la funcion update

![1769175541849](image/README/1769175541849.png)

Y ahora mismo tendriamos el CRUD completo de cliente

![1769175464820](image/README/1769175464820.png)
