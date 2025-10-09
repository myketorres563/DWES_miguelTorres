php
<?php

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
//mostrar un valor de cada uno
echo $array1["foo"] . "<br>";
echo $array2["bar"] . "<br>";

//Array multidimensional
$multidimensional = array(
    "primero" => array(
        "nombre" => "Miguel",
        "apellido" => "Torres"
    ),
    "segundo" => array(
        "nombre" => "Dani",
        "apellido" => "Castro"
    )
);
echo "Nombre del segundo: " . $multidimensional["primero"]["nombre"] . "<br>";
echo "Apellido del primero: " . $multidimensional["segundo"]["apellido"] . "<br>";

//Array creado paso a paso
$modulos1[0] = "Programación";
$modulos1[1] = "Bases de datos";
$modulos1[2] = "Desarrollo web en entorno servidor";

//Array creado paso a paso sin decir posición
$modulos2[] = "Programación";
$modulos2[] = "Bases de datos";
$modulos2[] = "Desarrollo web en entorno servidor";

echo " <br> Modulos 2: ";
print_r($modulos2);

echo " <br>  ";print_r($modulos1);
echo " <br>  ";print_r($multidimensional);
echo " <br>  ";print_r($array1);print_r($array2);





?>