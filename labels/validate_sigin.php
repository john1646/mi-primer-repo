<?php

$email = $_POST['email'];
$password = $_POST['password'];
///crear en el modelo que verifique en la db si el usuario existe

// validador
$rol = 'admin';
//1. iniciar servicio de sesion
session_start();
//2. crear la sesion
$_SESSION['rol'] =  $rol;

//redireccion
header("Location: /cesde/labels/user_propiedad.php");
exit;

