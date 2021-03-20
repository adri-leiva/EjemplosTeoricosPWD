
function validar() {

    respuesta = true;
    var myDato = document.getElementById("dato_form").value;
    
    if(myDato == ""){
        respuesta=false;
    }
    
    return respuesta;
}