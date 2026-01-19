![1768553069794](image/README/1768553069794.png)

Lo primero que tenemos que hacer es crear el Proyecto

![1768553124096](image/README/1768553124096.png)

Ahora creamos las migraciones con este comando que vemos en la imagen


![1768553652646](image/README/1768553652646.png)

Ahora nos tenemos que ir a la carpeta de "database/migrations" y dentro de la migracion que hemos creado copiamos esto

![1768553568221](image/README/1768553568221.png)

![1768553576776](image/README/1768553576776.png)

Ahora nos vamos al archivo "Championship.php" y "User.php" que esta en la ruta "app/Models/"

![1768553781307](image/README/1768553781307.png)

Ahora nos vamos a la carpeta de Seeder y modificamos el archivo y ponemos lo que vemos en la imagen


![1768553887409](image/README/1768553887409.png)

Ahora nos vamos a resources y en el apartado de "view" creamos una vista llamada usuarios.blade.php 

![1768554045287](image/README/1768554045287.png)

Ahora creamos un UserController.php

![1768554133029](image/README/1768554133029.png)

Ahora tenemos que poner el controller en las rutas


![1768554125937](image/README/1768554125937.png)

Con este comando lo que logramos es poblar la base de datos


![1768554576922](image/README/1768554576922.png)

Y como podemos ver se nos ha insertado informacion en el archivo database.sqlite
