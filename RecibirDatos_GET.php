<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recibir datos $_GET</title>
</head>
<body>
    <h1>Procesa con $_GET</h1>
    <?php
        if ($_GET!=false){
            $nombre = $_GET['nombre_form'] ;
            $apellido = $_GET['apellido_form'] ;
            $tel = $_GET['tel_form'];
            echo "<h3>Nombre:" . $nombre . "</h3><br/>";
            echo "Apellido:" . $apellido . " <br />";
            echo "Tel&eacute;fono:". $tel ." <br />";
        }
        else{
            echo "No se recibieron datos <br />";
        }
    ?>

</body>
</html>