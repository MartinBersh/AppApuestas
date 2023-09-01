    <?php
    require_once "conection.php";

            $nombre = filter_input(INPUT_POST, 'nombre');
            $password = filter_input(INPUT_POST, 'password');

            $sqlt = "INSERT INTO usuario (nombre,password) VALUES ('$nombre','$password')";
            $stmt = conection::conectar()->prepare($sqlt);
            $stmt -> execute();
