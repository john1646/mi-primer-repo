
<?php
//include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
require '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
$taskModel = new TaskModel();
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$pass = $_POST['pass'];