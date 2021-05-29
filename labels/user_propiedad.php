<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>
<body>
    <div class="container">
    <div class="1">
    <h1 class="mx-5 mt-4">Registra tu Propiedad</h1>
    </div>
    <form method="POST" action="upload.php" enctype="multipart/form-data">
 
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" id="name" name="fullname">
  </div>
  <div class="mb-3 mt-5 col-6 mx-5">
    <label for="exampleInputEmail1" class="form-label">Telefono de contacto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tel">
    <div id="tel" class="form-text">Tu correo no sera compartido.</div>
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="dir" name="dir">
  </div>
  <div class="mb-3 mt-4 col-6 mx-5">
    <label for="exampleInputPassword1" class="form-label">Imagenes</label>
    <input type="file" class="form-control" id="myfile" name="myFile">
  </div>
 
  <button type="submit" class="btn btn-primary mb-4 mx-5">Submit</button>
</form>
    </div>
</body>

<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>
