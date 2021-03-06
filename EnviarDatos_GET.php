<!--   Metodo totalmente transparente para el usuario */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enviar datos GET </title>
</head>
<body>
    <form id="form1" name="form1" method="GET" action="RecibirDatos_GET.php">
        <!-- El atributo *id y *name deben tener el mismo nombre por convensión -->
       
        <!-- El atributo *method nos dice como vamos a enviar todos los objetos de nuestro formulario 
            al destino segun el atributo *action-->

        Nombre: <input name="nombre_form" type="text" id="nombre_form" /> <br />
        Apellido: <input name="apellido_form" type="text" id="apellido_form" /> <br />
        Telefono: <input name="tel_form" type="text" id="tel_form" /> <br />

        <input type="submit" name="submit" value="Aceptar" />
        <!-- el atrtibuto type="submit" quiere decir que, todos los componentes de este formulario 
            son enviados al servidor de la pagina del atributo *action de la tag <form> 
            (en este caso RecibirDatos.php). -->

    </form>
</body>
</html>