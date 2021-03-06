<!DOCTYPE html>
<html lang="es">
<head>
    <title>Enviar datos POST </title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="RecibirDatos_POST.php">
        <!-- El atributo *id y *name deben tener el mismo nombre por convensión -->
       
        <!-- El atributo *method nos dice como vamos a enviar todos los objetos de nuestro formulario 
            al destino segun el atributo *action-->

        Nombre: <input name="nombre_form" type="text" id="nombre_form" value=""/> <br />
        Apellido: <input name="apellido_form" type="text" id="apellido_form" value=""/> <br />
        Telefono: <input name="tel_form" type="text" id="tel_form" value=""/> <br />

        <input type="submit" name="submit" value="Aceptar" />
        <!-- el atrtibuto type="submit" quiere decir que, todos los componentes de este formulario 
            son enviados al servidor de la pagina del atributo *action de la tag <form> 
            (en este caso RecibirDatos.php). -->

    </form>
</body>
</html>