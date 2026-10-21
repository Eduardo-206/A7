<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos Recibidos</title>
</head>
<body>

    <h2>Datos recibidos:</h2>

    <p>El nombre ingresado es: <?php echo $nombre; ?></p>
    <p>El correo ingresado es: <?php echo $correo; ?></p>
    <p>El numero de telefono ingresado es: <?php echo $telefono; ?></p>

</body>
</html>