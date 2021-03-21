
function validar() {

    respuesta = true;
    var myDato = document.getElementById("dato_form").value;
    
    if(myDato == ""){
        respuesta=false;
        alert("Los datos son requeridos");
    }
    return respuesta;
}