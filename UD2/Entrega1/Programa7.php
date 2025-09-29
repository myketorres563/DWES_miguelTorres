<?php
define("Telefono", 642322234);
print "<p>El valor de pi es " . Telefono . "</p>\n";
?>

<?php
define("AUTOR", "Don Quejote");
print "<p>Mi autor favorito es: " . AUTOR . "</p>\n";
?>


<?php
const LIBRO = ["Don Quijote", "Cervantes", 1605];
print "<p>" . LIBRO[1] . " escribió " . LIBRO[0] . " en " . LIBRO[2] . ".</p>\n";
?>


<?php
$decimales = 6;
if ($decimales == 6) {
    define("PI", 3.141592);
} else {
    define("PI", 3.14);
}
print "<p>El valor de pi es " . PI . "</p>\n";
?>