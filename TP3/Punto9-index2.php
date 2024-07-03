<?php
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $curso_actual = $_POST['curso_actual'];
    $materias_adeudadas = $_POST['materias_adeudadas'];
    $materia = $_POST['materia'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];

    $ar = fopen("comprobante.txt", "a") or die("No se pudo abrir el archivo!");
    fputs($ar, "Nombre: $nombre\nDNI: $dni\nFecha de Nacimiento: $fecha_nacimiento\nCurso Actual: $curso_actual\nMaterias Adeudadas: $materias_adeudadas\nMateria Inscripta: $materia\nFecha de Inscripción: $fecha_inscripcion\n--------------------\n");
    fclose($ar);

    echo "Inscripción guardada. <a href='inscripcion.php'>Hacer otra inscripción</a>";
?>
