# Laravel

![1764592236301](image/Readme-Teoria/1764592236301.png)

**[Video](youtube.com/watch?v=S5-ZQnjkFso&feature=youtu.be)**

Lo primero que hacemos es entrar en la pagina web de LARAVEL

![1764593283904](image/Readme-Teoria/1764593283904.png)

Ahora nos descargamos Composer

![1764593732401](image/Readme-Teoria/1764593732401.png)

![1764595508986](image/Readme-Teoria/1764595508986.png)

Tambien tenemos que descargarnos el global

Despues de ejecutar el comando se nos creara una carpeta con esta estructura

![1764594943686](image/Readme-Teoria/1764594943686.png)

Fundamentos sobre MVC ([Video](https://www.youtube.com/watch?v=kV2jUg-iXYw&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=2))

![1764595261096](image/Readme-Teoria/1764595261096.png)

![1764595322264](image/Readme-Teoria/1764595322264.png)

Como podemos ver ya estamos en el navegador

![1764596087522](image/Readme-Teoria/1764596087522.png)

![1764596978838](image/Readme-Teoria/1764596978838.png)

Como podemos ver los archivos que hay en vista acaban en ".blade.php"

![1764597048379](image/Readme-Teoria/1764597048379.png)

Despues dentro de app encontramos http y dentro los controller y despues models que encontramos user

## CRUD Laravel Basico

![1768220181386](image/Readme-Teoria/1768220181386.png)

Primero nos descargamos la estructuras de carpetas de laravel

![1768220650517](image/Readme-Teoria/1768220650517.png)

![1768221296396](image/Readme-Teoria/1768221296396.png)

![1768222735272](image/Readme-Teoria/1768222735272.png)


## Preguntas

¿El código es legible y está bien organizado?

Sí, el código es legible y está organizado en controladores, vistas y rutas, lo que hace que sea más fácil de entender.



¿Los nombres de las variables y métodos son descriptivos?

Si os nombres indican para qué sirve cada variable o método.



¿Las vistas son fáciles de entender?

Sí, las vistas se entienden bien y el HTML está ordenado, por lo que es fácil saber qué muestra cada página.



¿Los formularios están protegidos?

Sí, los formularios están protegidos contra ataques básicos gracias al uso de @csrf.



¿Has incluido @csrf y @method('PUT'/'DELETE') donde corresponde?

Sí, se han usado correctamente en los formularios que actualizan o eliminan datos.



¿Hay validación del lado del servidor en store() y update()?

Sí, se valida la información antes de guardarla o actualizarla para evitar datos incorrectos.



¿Hay validación del lado del cliente?

Sí, se usan atributos básicos como required o tipos de input adecuados para ayudar al usuario.



¿Estás usando Route::resource() correctamente?

Sí, se usa Route::resource() para agrupar las rutas y facilitar la organización del proyecto.



¿Hay rutas sin usar?

Creo que no.



¿Podrías reutilizar código con parciales (_form.blade.php)?

Sí, sería buena idea usar un formulario reutilizable para evitar repetir código en las vistas de crear y editar.
