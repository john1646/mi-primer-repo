<?php
//1. iniciar servicio de session
session_start();
if ($_SESSION['rol'] != 'admin') {
  header("Location: /cesde/labels/sigin.php");
  exit;
}
?>
<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<body>
    <div class="container">
    <div class="1">
    <h1 class="mx-5 mt-4">Vende Tu Propiedad</h1>
    </div>
    
    <form onsubmit="return validatePropiedades()" method="POST" action="create_propiedades.php">
  
    <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text"  class="form-control" id="fullname" aria-describedby="emailHelp" name="fullname">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email"  class="form-control" id="email" name="email">
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text"  class="form-control" id="direccion" aria-describedby="emailHelp" name="direccion">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Telefono de Contacto</label>
    <input type="text"  class="form-control" id="tel" aria-describedby="emailHelp" name="tel">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Link de imagenes</label>
    <input type="text"  class="form-control" id="images" aria-describedby="emailHelp" name="images">
    <div id="text" class="form-text"></div>
  </div>
 
  <button type="submit" class="btn btn-primary mb-4 mx-5">Registrar</button>
</form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>
