<!DOCTYPE html>
<html>
<head>
    <title>Recibir datos $_POST para validar</title>
</head>
<body>
    <h1>Validar Formulario</h1>
    
    <?php
    
        if (is_numeric($_POST['dato_form'])) {
            $datoAValidar = $_POST['dato_form'] ;
            echo "El dato:". $datoAValidar ." es un numero";
        }
        else{
            echo "El dato ingresado no es un numero";
        }

    ?>

</body>
</html> 