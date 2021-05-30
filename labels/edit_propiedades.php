<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<?php 
include '/opt/lampp/htdocs/cesde/database/models/PropiedadesModel.php';
    $propiedadModel = new PropiedadesModel();
    $code = $_GET['code'];
    $Propiedades = $propiedadModel->getPropiedad($code);
    
?>
<body>
    <div class="container">
    <div class="1">
    <h1 class="mx-5 mt-4">Actualiza tus datos</h1>
    </div>
    
    <form onsubmit="return validatePropiedades()" method="POST" action="update_propiedades.php? code=<?php echo $code;?>">
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
    <input type="text" value="<?php echo $Propiedades['fullname'] ?>" class="form-control" id="fullname" aria-describedby="emailHelp" name="fullname">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" value="<?php echo $Propiedades['email'] ?>" class="form-control" id="email" name="email">
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Direaccion</label>
    <input type="text" value="<?php echo $Propiedades['direccion'] ?>" class="form-control" id="direccion" aria-describedby="emailHelp" name="direccion">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Telefono de Contacto</label>
    <input type="text" value="<?php echo $Propiedades['tel'] ?>" class="form-control" id="tel" aria-describedby="emailHelp" name="tel">
    <div id="text" class="form-text"></div>
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Link de imagenes</label>
    <input type="text" value="<?php echo $Propiedades['images'] ?>" class="form-control" id="images" aria-describedby="emailHelp" name="images">
    <div id="text" class="form-text"></div>
  </div>
 
  <button type="submit" class="btn btn-primary mb-4 mx-5">Actualizar</button>
</form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>