<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
echo "El nombre ingresado es: " . $_REQUEST['nombre'] . "<br>";
echo "La edad ingresada es: " . $_REQUEST['edad'] . "<br>";
echo "La edad ingresada es: " . $_REQUEST['nacimiento'] . "<br>";
if ($_REQUEST['genero'] == "Masculino"){
    echo "El usuario es masculino." . "<br>";
} if ($_REQUEST['genero'] == "Femenino"){
    echo "El usuario es femenino." . "<br>";
}  
echo "El lugar de nacimiento es: " . $_REQUEST['lugarnacimiento'] . "<br>";
echo "La direccion es: " . $_REQUEST['direccion'] . "<br>";
echo "Sus intereses son: " . $_REQUEST['intereses'] . "<br>";
echo "Comentarios: " . $_REQUEST['comentarios'] . "<br>";
?>
</body>
</html>
