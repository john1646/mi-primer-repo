
<?php
//include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
require '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
$taskModel = new TaskModel();
$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$taskModel->updateTask($id, $name, $email, $pass);
header("location:list_task.php");