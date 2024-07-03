<?php
    $numero = $_POST['numero'];

    function es_par($num) {
        return $num % 2 == 0;
    }

    if (es_par($numero)) {
        echo "El número $numero es par.";
    } else {
        echo "El número $numero es impar.";
    }
?>
