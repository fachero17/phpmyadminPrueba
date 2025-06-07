<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registrar Usuario</h2>
    <form action="guardar.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Contraseña: <input type="password" name="contraseña" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
