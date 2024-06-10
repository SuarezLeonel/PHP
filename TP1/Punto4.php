<html>
<head>
<title>Captura de datos del form</title>
</head>
<body>
<?php
echo "El nombre ingresado es: ";
echo $_REQUEST['nombre'] . "<br>";
$contador = 0;
if ($_REQUEST['operacion'] == "tercero"){
    echo "Debe pagar recargo.";
} 
?>
</body>
</html>
