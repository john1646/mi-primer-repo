<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Orient House</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="shortcut icon" href="/cesde/icons/hause.png" type="image/x-icon">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="/cesde/css/sigin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="validate_sigin.php">
      <img class="mb-2" src="/cesde/icons/hause.png" alt="" width="72" height="57">
      <h1 class="h1 mb-3 fw-normal">Orient House</h1>
      <h1 class="h4 mb-3 fw-normal">Inicia sesion</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        <label for="floatingInput">Direccion Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
        <label for="floatingPassword">Contrasena</label>
      </div>

      <div class="checkbox mb-3">
        
      </div>
      <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Sign in</button>
      <!-- <button class="w-100 btn btn-lg btn-primary" href="" type="button">Back</button> -->
     <a href="/cesde/index.php" class="w-100 btn btn-lg btn-primary "  role="button">Back</a>
      <p class="mt-5 mb-3 text-muted">&copy; Orient House-2021</p>
    </form>
  </main>



</body>

</html>