<?php include_once("/opt/lampp/htdocs/cesde/static/header.php") ?>

<body>
    <div class="container">
        <table class="table table-striped mt-4 mb-4">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Imagenes</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                include '/opt/lampp/htdocs/cesde/database/models/PropiedadesModel.php';
                $propiedadesModel = new PropiedadesModel();
                $propiedades = $propiedadesModel->getPropiedades();
                while($row = mysqli_fetch_assoc($propiedades)){
                    $template = "<tr>
                    <th scope='row'>{$row['code']}</th>
                    <td>{$row['fullname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['direccion']}</td>
                    <td>{$row['tel']}</td>
                    <td> <img src='{$row['images']}' alt=' ' width='150px' height='100px' srcset=''></td>                    
                   
                </tr>";
                echo $template;
                }

                ?>
                
            </tbody>
        </table>
    </div>
</body>

<?php include_once("/opt/lampp/htdocs/cesde/static/footer.php") ?>