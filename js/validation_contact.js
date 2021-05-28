function validatecontactanos() {
    let email = document.getElementById("email").value;
    let tel = document.getElementById("tel").value;
    let name = document.getElementById("name").value;
    let lastname = document.getElementById("lastname").value;
    let barrio = document.getElementById("barrio").value;
    let ciudad = document.getElementById("ciudad").value;
    let text = document.getElementById("text").value;
    if (email == "" || name == "" || tel=="" || lastname=="" || barrio=="" || ciudad=="" || text=="") {
        alert("debe llenar todos los campos");
        return false;
    }
    return true;
}
