<html>
<body>
    <?php
        $usuarios = array(
            "usuario1" => "clave1",
            "usuario2" => "clave2",
            "usuario3" => "clave3",
            "usuario4" => "clave4",
            "usuario5" => "clave5"
        );
        foreach ($usuarios as $nombre => $clave) {
            echo "Usuario: $nombre, Clave: $clave" . "<br>";
        }
    ?>
</body>
</html>
