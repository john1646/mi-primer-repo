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
        <form class="row g-3 mt-2">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombres Completos</label>
                <input type="email" class="form-control" id="nombres">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion principal</label>
                <input type="text" class="form-control" id="direccion" placeholder="Calle 123">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Barrio</label>
                <input type="text" class="form-control" id="barrio" placeholder="Barrio">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="tel">
            </div>
            <div class="col-10">
                <input type="email" class="form-control" id="floatingInputValue" placeholder="Escribeneos aqui tu pregunta" value="">
                <label for="floatingInputValue">Escribenos aqui tu pregunta </label>
            </div>
            </label>
    </div>
    </div>
    <div class="col-10 mt-2">
        <button type="submit" class="btn btn-primary mx-5 mt-2">Enviar</button>
    </div>
    </form>
    </div>
</body>
<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>