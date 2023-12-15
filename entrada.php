<!DOCTYPE html>
<html>
<head>
    <title>Acceso al sistema</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Acceso al sistema</h2>
        <form method="post" action="verificar.php">
            <label for="usuario">Usuario:</label>
            <select name="usuario" id="usuario">
                <option value="usuario1">Usuario 1</option>
                <option value="usuario2">Usuario 2</option>
                <option value="usuario3">Usuario 3</option>
            </select><br><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena"><br><br>
            <input type="submit" value="Acceder">
        </form>
        <div id="mensaje"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>
