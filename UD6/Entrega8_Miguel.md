# UD 6 -  Laravel

[Pagina oficial de laravel](https://laravel.com/)

Video Fundamentos, sobretodo MVC: [https://www.youtube.com/watch?v=kV2jUg-iXYw&amp;list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&amp;index=2](https://www.youtube.com/watch?v=kV2jUg-iXYw&list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&index=2 "https://www.youtube.com/watch?v=kV2jUg-iXYw&amp;list=PLDllzmccetSM50U0Y9fTOWHvSzAZ_W6Il&amp;index=2")

## 1.-Arquitectura

Primero instalamos [Composer.
](https://getcomposer.org/)

Importante marcar la opción de añadir PHP a nuestro Path.
[![1764593257163](image/Entrega7/1764593257163.png)](https://getcomposer.org/)

Si en la terminal escribimos composer --version podemos ver que esta instalado y la version que hemos instalado.![1764594153347](image/Entrega7/1764594153347.png)

**Opción 1 - Meditante CMD**
composer create-project laravel/laravel helloLaravel

En php.ini tenemso que descomentar lo siguente:
![1764593938792](image/Entrega7/1764593938792.png)

Ya lo tenemos![1764594080731](image/Entrega7/1764594080731.png)

Se nos crea esta estructura

![1764594911072](image/Entrega7/1764594911072.png)

Para arrancar el servicio tenemos que irnos primero a la carpeta donde lo tenemos y escribir `php artrisan serve.`![1764595232842](image/Entrega7/1764595232842.png)

Ya podemos verlo.![1764595323605](image/Entrega7/1764595323605.png)

**Opción 2 - Instalador de laravel**

Lo instalamos con el comando `composer global require laravel/installer`![1764595507386](image/Entrega7/1764595507386.png)

Para crear un nuevo proyecto utilizamos el comando `laravel new helloLaravel2`![1764596247702](image/Entrega7/1764596247702.png)

---

##### **Carpetas mas importantes**

![1764596573156](image/Entrega7/1764596573156.png)

###### Web.php

`web.php` es el punto de entrada de la aplicación.
![1764596826323](image/Entrega7/1764596826323.png)

###### Vistas

Las vistas se encuentran en la carpeta resources junto con el css y el javaScript.
![1764597107485](image/Entrega7/1764597107485.png)

Las vistas casi siempre acaban en `.blade.php `![1764596971298](image/Entrega7/1764596971298.png)

![1764596959084](image/Entrega7/1764596959084.png)

###### Modelos y controladores

Los modelos y controladores se encuentran en la carpeta `app`.
Los controladores se encuentran en la carpeta **Http**
Los modelos se encuentran en la carpeta **Models**.
![1764597066693](image/Entrega7/1764597066693.png)

---

## 2.-Blade

Creamos un proyecto 3blade.

![1765357548028](image/Entrega7/1765357548028.png)

![1765357657733](image/Entrega7/1765357657733.png)

En vista se crea una vista greeting.blade.php
![1765357724207](image/Entrega7/1765357724207.png)

Dentro escribimoms esto para pasar la mostrar la variale name
![1765357849622](image/Entrega7/1765357849622.png)

Y en web.php escribiemos una ruta nueva con la variable name.
![1765357879590](image/Entrega7/1765357879590.png)

La pagina mostraria el nombre
![1765357932686](image/Entrega7/1765357932686.png)

Ahora vamos a crear varias vistas: about, contact, index y services.
![1765358354420](image/Entrega7/1765358354420.png)

En web añadimos un nombre a cada vista.
![1765358609393](image/Entrega7/1765358609393.png)

Ahora creamos una carpeta layouts en vista y dentro creamos una vista landing.blade.php.
![1765358715180](image/Entrega7/1765358715180.png)

Cambiamos la vista index.
![1765358844531](image/Entrega7/1765358844531.png)

---

## 3.-Migrations

Hemos realizado 3 ejemplos de migraciones.
![1765460517850](image/Entrega7/1765460517850.png)

Esto es una migración del ultimo ejemplo.
![1765460561304](image/Entrega7/1765460561304.png)

---

## 4.- Models

El primer se llamara Blog.
![1767877268202](image/Entrega7/1767877268202.png)

El segundo ejemplo es ModelsProject

![1767965491176](image/Entrega7/1767965491176.png)

---

## 5.-Controllers

El primer ejemplo es Controller-demo

![1767966573375](image/Entrega7/1767966573375.png)

Asi se veria este ejemplo:

![1767966679411](image/Entrega7/1767966679411.png)

---

## 6.-CRUD

El ejemplo que vamos a hacer un ejemplo en el cual vamos a hacer un CRUD completo.

El ejemplo se llama clothing_store.

![1768220250872](image/Entrega7/1768220250872.png)

 Vamos a crear un modelo llamado ClothingItem con su controlador y su migración con el comando: "php artisan make:modelClothingItem-mc".

Al poner resource crea todos los verbos de PHP y si en la terminal ponemos "php artisan route:list" nos muestra una lista de todos los verbos PHP que tenemos.
![1768221263214](image/Entrega7/1768221263214.png)

![1768222771429](image/Entrega7/1768222771429.png)

---

## 7.-SEED

En este punto hemos copiado el proyecto anterior clothing_store pero hemos creado seeders.

![1768383860707](image/Entrega7/1768383860707.png)

---

## 8.- Relationships

En este punto vamos a hacer varios miniproyectos para cada relación

Primer proyecto es OneWarriors en una relacion 1-1.
![1768554655805](image/Entrega8/1768554655805.png)

El segundo proyecto es 1nTrophies que es una relación 1-N.
![1768554693952](image/Entrega8/1768554693952.png)
