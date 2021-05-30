<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>

<body>
    <div class="container">
        <header>
            <div class="title mt-3">
                <h1>Gracias por comunicarte con nosotros</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est ut error illo corrupti, quo quos quibusdam sunt maiores repellat. Nemo consequatur, maiores doloremque quibusdam facilis explicabo cupiditate porro perspiciatis impedit?
                    Rerum nisi provident repellat sapiente eos expedita optio harum omnis a eligendi soluta cumque, iste quia saepe officiis consequuntur voluptatem molestiae nihil libero sit dignissimos nobis. Eveniet, ea quibusdam. Minima!</p>
            </div>
        </header>
        <form class="row g-3 mt-2" onsubmit="return validatecontactanos()" method="POST">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombres Completos</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion principal</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle 123">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Barrio</label>
                <input type="text" class="form-control" id="barrio" name="barrio" placeholder="Barrio">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="tel" name="tel">
            </div>
            <div class="mb-3 col-10">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="tucorreo@correo.com" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">No compartiremos esta informacion con nadie.</div>
            </div>
            <div class="col-10">
                <input type="text" class="form-control" id="text" name="text" placeholder="Escribeneos aqui tu pregunta" value="">
                <label for="floatingInputValue">Escribenos aqui tu pregunta </label>
            </div>

            </label>
    </div>
    </div>
    <div class="col-10 mt-2 mx-5">
        <button type="submit" class="btn btn-primary mx-5 mt-2">Enviar</button>
    </div>
    </form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>