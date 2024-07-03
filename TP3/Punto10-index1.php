<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de Correo Electrónico</title>
</head>
<body>
    <form action="index2.php" method="post">
        Para: <input type="email" name="para"><br>
        Asunto: <input type="text" name="asunto"><br>
        Mensaje: <textarea name="mensaje" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Enviar Correo">
    </form>
</body>
</html>
