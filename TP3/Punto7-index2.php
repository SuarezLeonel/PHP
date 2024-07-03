<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    function sumar($a, $b) {
        return $a + $b;
    }

    echo "La suma es: " . sumar($numero1, $numero2);
?>
