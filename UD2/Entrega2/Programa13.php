<?php
$age = 18;

$output = match (true) {
    $age < 2 => "Bébé",
    $age < 13 => "Enfant",
    $age <= 19 => "Adolescent",
    $age >= 40 => "Adulte âgé",
    $age > 19 => "Jeune adulte",
};

var_dump($output);
?>