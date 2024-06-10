<html>
<head>
<title>Captura de datos del form</title>
</head>
<body>
<?php
echo "El nombre ingresado es: ";
echo $_REQUEST['nombre'] . "<br>";
$contador = 0;
if (isset($_REQUEST['checkbox1'])){
    $contador = $contador + 1;
    } if (isset($_REQUEST['checkbox2'])){
    $contador = $contador + 1;
    } if (isset($_REQUEST['checkbox3'])){
    $cotador = $contador + 1;
    } if (isset($_REQUEST['checkbox4'])){
        $cotador = $contador + 1;
    } 
    echo "Juega " . $contador . " deportes.";
?>
</body>
</html>
