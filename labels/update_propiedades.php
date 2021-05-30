
<?php
//include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
require '/opt/lampp/htdocs/cesde/database/models/PropiedadesModel.php';
$propiedadesModel = new PropiedadesModel();
$code = $_GET['code'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$tel = $_POST['tel'];
$images = $_POST['images'];
$propiedadesModel->updatePropiedades($code, $fullname, $email, $direccion, $tel, $images);
header("location:list_propiedades.php");