Primero tenemos que crear el proyecto

![1768825768845](image/README/1768825768845.png)

Ahora creamos los modelos de tanto Player como de Role

![1768825811043](image/README/1768825811043.png)

![1768825827846](image/README/1768825827846.png)

Ahora ceramos la migracion

![1768825936738](image/README/1768825936738.png)

Y con este comando creamos el archivo PlayerController

![1768825951611](image/README/1768825951611.png)

![1768825967318](image/README/1768825967318.png)

Ahora nos vamos a database y migraciones y modificamos la funcion de "up"

![1768826029216](image/README/1768826029216.png)

Ahora lo mismo pero en el archivo create_roles

![1768826083811](image/README/1768826083811.png)

Y ahora en create_player

![1768826197910](image/README/1768826197910.png)

Ahora nos vamos a la carpeta app/Models  y modificamos el archivo Player.php

![1768826261336](image/README/1768826261336.png)

Ahora hacemos lo mimos pero con el archivo Role.php

![1768826290723](image/README/1768826290723.png)

Con estos comandos vinculamos el factory con el modelo

![1768826324634](image/README/1768826324634.png)

Ahora nos vamos a database/factories y modificamos estos archivos

![1768826386772](image/README/1768826386772.png)

Ahora modificamos RoleFactory

![1768826414531](image/README/1768826414531.png)

Ahora modificamos el archivo de la carpeta Seeder

![1768826458058](image/README/1768826458058.png)

Ahora actualizamos las migraciones

![1768826479230](image/README/1768826479230.png)

Ahora modificamos el archivo de PlayerController.php

![1768826544806](image/README/1768826544806.png)

Y en el archivo web.php dentro de la carpeta de route

![1768826577020](image/README/1768826577020.png)

Dentro de la carpeta resources nos vamos a view y dentro a player y modificamos ese archivo

![1768826611517](image/README/1768826611517.png)

Ahora arrancamos con php artisan serve y en el navegador añadimos /players y esto es lo que nos tiene que mostrar

![1768827364378](image/README/1768827364378.png)
