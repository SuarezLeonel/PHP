<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción de Estudiantes</title>
</head>
<body>
    <form action="procesar_inscripcion.php" method="post">
        Apellidos y Nombres: <input type="text" name="nombre"><br>
        DNI: <input type="text" name="dni"><br>
        Fecha de Nacimiento: <input type="date" name="fecha_nacimiento"><br>
        Curso Actual: <input type="text" name="curso_actual"><br>
        Cantidad de Materias Adeudadas: <input type="number" name="materias_adeudadas"><br>
        Materia en la que se inscribe: <input type="text" name="materia"><br>
        Fecha de Inscripción: <input type="date" name="fecha_inscripcion"><br>
        <input type="submit" value="Confirmar Inscripción">
    </form>
</body>
</html>
