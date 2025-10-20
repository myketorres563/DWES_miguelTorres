<?php
spl_autoload_register(function ($class_name) {
    include 'clases/' . strtolower($class_name) . '.php';
});

$user = new user();
$product = new product();
?>