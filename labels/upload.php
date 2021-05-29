<?php
$uploadsfolder = "uploads/";
if (isset($_POST['fullname']) && isset($_POST['tel']) && isset($_POST['dir'])){
    $imagePath = $uploadsfolder . basename($_FILES['myFile']['name']);
    move_uploaded_file($_FILES['myFile']['tmp_name'], $imagePath);
} else {
    echo "Nombres completos - telefono y direccion son campos obligatorios";
}
