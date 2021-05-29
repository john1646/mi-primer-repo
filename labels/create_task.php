<?php
include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
//asignacion de varibales desde el formulario registro
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$pass = $_POST['pass'];

//validations php

if (!empty($email) || !empty($fullname) || !empty($pass)) {
    echo"validate create task";
    $taskModel = new TaskModel();
    $taskModel->insert($email, $fullname, $pass);
    
}
