<?php
include '/opt/lampp/htdocs/cesde/database/models/PropiedadesModel.php';
//asignacion de varibales desde el formulario registro

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$tel = $_POST['tel'];
$images = $_POST['images'];

//validations php

if (!empty($email) || !empty($fullname) || !empty($direccion) || !empty($tel) || !empty($images)) {
    echo"validate create task";
    $propiedadesModel = new PropiedadesModel();
    $propiedadesModel->insert($fullname, $email, $direccion, $tel, $images);
    
}
