
<?php
//include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
require '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
$taskModel = new TaskModel();
$id = $_POST['id'];
$fullname = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$taskModel->updateTask($id, $fullname, $email, $pass);
header("location:list_task.php");