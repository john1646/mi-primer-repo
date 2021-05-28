<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<?php
$correo = $_POST['correo'];
$password =$_POST['contrasena'];
if(strlen($password)<5){
    echo "La contrasena debe contener mas de 5 caracteres {$password[0]}";
}
else{
    echo "La contrasena es: {$password[0]}";
}

?> 
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>
