<html>
<head>
<title>Captura de datos del form</title>
</head>
<body>
<?php
echo "El nombre ingresado es: ";
echo $_REQUEST['nombre'] . "<br>";
if ($_REQUEST['estudiosP']){
echo "Tiene estudios primarios.\n";
} else if ($_REQUEST['estudioss']){
echo "Tiene estudios secundarios.\n";
} else if ($_REQUEST['estudiosT']){
echo "Tiene estudios teceriarios.\n";
} else if ($_REQUEST['estudiosU']){
echo "Tiene estudios universitarios.\n";
} else if ($_REQUEST['estudiosSE']){
echo "No tiene estudios.\n";
}
?>
</body>
</html>
