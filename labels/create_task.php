<?php

//asignacion de varibales desde el formulario registro
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$pass = $_POST['pass'];

//validations php
if (empty($email) || empty($fullname) || empty($pass)) {
    echo "Todos los campos deben estar llenos";
} else if (strlen($fullname) < 5) {
    echo "El nombre debe contener minimo 5 caracters";
} elseif (strlen($pass) < 8) {
    echo "La contrasena debe contener minimo 8 caracteres";
} else {
    //database conection
    $host = "localhost";
    $username = "root";
    $password = "";
    $Db = "cesde";
    $dbconection = new mysqli($host, $username, $password, $Db);
    if ($dbconection->connect_errno) {
        echo "Fallo la conexion a Base de datos";
        exit();
    } else {
        echo "Conexion realizada con exito ";
        $sql = "INSERT INTO Task (name, email, pass) VALUES ('{$fullname}','{$email}','{$pass}')";
        if ($dbconection->query($sql) === true) {
            echo "- Tarea creada con exito";
        } else {
            echo "Error a ejecutar la tarea";
        }
        $dbconection->close();
    }
}
