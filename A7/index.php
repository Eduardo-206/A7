<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

    <h2>Ingresa tus datos</h2>

    <form action="procesar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Correo:</label>
        <input type="email" name="correo"><br><br>

        <label>Número:</label>
        <input type="text" name="telefono"><br><br>

        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>