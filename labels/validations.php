<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<?php
$email = $_POST['email'];
$fullname =$_POST['fullname'];
$pass =$_POST['passs'];
echo "email {$email} - {$fullname} - {$pass}";
?> 
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>
