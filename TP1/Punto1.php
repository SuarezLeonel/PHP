<html>
<head>
<title>Captura de datos del form</title>
</head>
<body>
<?php
echo "El nombre ingresado es: ";
echo $_REQUEST['nombre']."<br>";
if ($_REQUEST['edad'] <= 18){
echo "Es mayor de edad.\n";
} else {
echo "No es mayor de edad.\n";
}
?>
</body>
</html>
