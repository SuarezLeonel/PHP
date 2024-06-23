<html>
<body>
    <?php
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        sort($meses);
        for ($i = 0; $i < count($meses); $i++) {
            echo $meses[$i] . "<br>";
        }
    ?>
</body>
</html>
