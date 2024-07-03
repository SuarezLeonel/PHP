<?php
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $pizza = $_POST['pizza'];
    $cantidad = $_POST['cantidad'];

    $ar = fopen("pedidos.txt", "a") or die("No se pudo abrir el archivo!");
    fputs($ar, "Nombre: $nombre\nDirección: $direccion\nTeléfono: $telefono\nPizza: $pizza\nCantidad: $cantidad\n--------------------\n");
    fclose($ar);

    echo "Pedido guardado. <a href='pedido.php'>Hacer otro pedido</a>";
?>
