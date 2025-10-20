# UD 3 PHP OO

Separar el código de presentación de la lógica de negocio en el desarrollo web

**Reflexión** "Los programadores experimentados ven en estas herramientas un apoyo que les permite concentrarse en las partes más complejas y creativas del desarrollo, mientras la IA se encarga de los detalles más tediosos. De esta manera, Copilot no reemplaza las habilidades del desarrollador, sino que las complementa."

[Articulo](https://codersfree.com/posts/programacion-orientada-a-objetos-en-php-definicion-ejemplos-y-principios-clave)

## Teoria

La Programación Orientada a Objetos permite organizar el código de manera modular, escalable y reutilizable.

El paradigma orientado a objetos se utilizo por primera vez conPHP 4 de forma basica hasta que despues salio PHP 5 siendo este mejor. Desde PHP 7 y 8, el lenguaje ha incorporado tipado estricto, traits, namespaces y mejoras en el rendimiento.

### Ventajas:

- Mantenibilidad
  - Permite realizar cambios en una capa sin que se modifique otra
- Reutilización de Código
  - Se puede reutilizar en diferentes interfaces
- Escalabilidad
  - Facilita la expansion de la aplicación
- Mejora en la Prueba y Depuración
  - La logica de negocio puede ser probada de forma aislada
- Facilita el Trabajo en Equipo
  - Permite que los desarrilladores trabajen en paralelo
- Flexibilidad en la Presentación
  - Permite que la capa de presentación se dapte a diferentes tecnologías
- Facilidad para Implementar APIs y Servicios Web
  - Con la logica de negonio desacoplada es facil exponerla a traves de una API
- Uso de Patrones de Diseño y Buenas Prácticas
  - Facilita la implementacion de modelo MVC

## Programa 1

![1760613304901](image/readme/1760613304901.png)

![1760613315894](image/readme/1760613315894.png)

Como podemos ver creamos un objeto una propiedad y un metodo

## Programa 2

![1760613643881](image/readme/1760613643881.png)

![1760613661751](image/readme/1760613661751.png)

![1760614111241](image/readme/1760614111241.png)

## Programa 3

![1760614332327](image/readme/1760614332327.png)

![1760614344597](image/readme/1760614344597.png)

## Programa 4

![1760703047095](image/readme/1760703047095.png)

![1760703191068](image/readme/1760703191068.png)

## Programa 5

![1760703311375](image/readme/1760703311375.png)

![1760703324223](image/readme/1760703324223.png)

## Programa 6

![1760703545981](image/readme/1760703545981.png)

## Programa 7

![1760704156725](image/readme/1760704156725.png)

![1760704166888](image/readme/1760704166888.png)

## Programa 8

![1760704148070](image/readme/1760704148070.png)

![1760704139749](image/readme/1760704139749.png)

![1760704469828](image/readme/1760704469828.png)

## Programa 9

![1760704866928](image/readme/1760704866928.png)

Este código demuestra el **Polimorfismo** y la **Herencia** en la POO de PHP, permitiendo que diferentes figuras (`Cuadrado` y `Círculo`) hereden y **sobrescriban** el método `calcularArea()` de la clase base `Figura` para ejecutar el cálculo específico de cada forma.

## Programa 10

![1760705116346](image/readme/1760705116346.png)

![1760705108205](image/readme/1760705108205.png)

## Programa12

![1760960283347](image/readme/1760960283347.png)

## Programa 13

En vez de crear una clase se utiliza el trait y para usarlo se usa el use


![1760960297302](image/readme/1760960297302.png)

## Programa 14

![1760961746987](image/readme/1760961746987.png)

![1760961775777](image/readme/1760961775777.png)


## SPL 

SPL es la Libreria estandar de PHP que es un conjunto de clases e interfazes integradas que porporcionan funcionalidades


## Programa 15

Se crea una Pila que esta doblemente enlazada y despues se le apaden valores

![1760962719245](image/readme/1760962719245.png)

![1760963462061](image/readme/1760963462061.png)

## Programa 16

Esto es un registro de carga automatico

![1760963865476](image/readme/1760963865476.png)

![1760964121238](image/readme/1760964121238.png)

![1760964280805](image/readme/1760964280805.png)
