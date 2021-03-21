<!DOCTYPE html>
<html >
<head>
    <title>Valida datos</title>
    <script type="text/javascript" src="Verificar.js"></script>
</head>
<body>

    <form name="form1" method="post" action="RecibirDatosPost.php" onsubmit="return validar();">
    
    <!-- Uso del return: Si la funcion validar() devuelve false los datos no se envian al servidor. Se detiene el envio del formulario -->

        Ingrese dato: <input name="dato_form" type="text" id="dato_form" /><br/>
    <input type="submit" name="submit" value="Aceptar" />
</form>
    
</body>
</html>