<?php
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    function verificar_claves($clave1, $clave2) {
        if ($clave1 != $clave2) {
            return "Las claves no coinciden.";
        }
        return "Registro exitoso.";
    }

    echo verificar_claves($clave1, $clave2);
?>
