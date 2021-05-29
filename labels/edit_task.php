<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<?php 
include '/opt/lampp/htdocs/cesde/database/models/TaskModel.php';
    $taskModel = new TaskModel();
    $id = $_GET['id'];
    $Task = $taskModel->getTask($id);
    
?>
<body>
    <div class="container">
    <div class="1">
    <h1 class="mx-5 mt-4">Registrate Con Nosotros</h1>
    </div>
    <form onsubmit="return validateContactForm()" method="POST" action="update_task.php? id=<?php echo $id;?>">
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text" value="<?php echo $Task['name'] ?>" class="form-control" id="name" aria-describedby="emailHelp" name="name">
    <div id="text" class="form-text">Tu correo no sera compartido.</div>
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" value="<?php echo $Task['email'] ?>" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Contrasena</label>
    <input type="password" value="<?php echo $Task['pass'] ?>" class="form-control" id="pass" name="pass">
  </div>
 
  <button type="submit" class="btn btn-primary mb-4 mx-5">Actualizar</button>
</form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>