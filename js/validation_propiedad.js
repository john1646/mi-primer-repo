function validatePropiedades() {
    let email = document.getElementById("email").value;
    let fullname = document.getElementById("fullname").value;
    let direccion = document.getElementById("direccion").value;
    let tel = document.getElementById("tel").value;
    
    if (email == "" || fullname == "" || tel=="") {
        alert("debe llenar todos los campos");
        return false;
    } else if (fullname.length < 5) {
        alert("El nombre debe contener mas de 5 caracteres ");
        return false;
    }
    
    return true;
}
