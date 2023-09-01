<?php
/* require_once "conection.php";

class instertar{

    public static function nuevoDato(){
        $nombre = filter_input(INPUT_POST, 'NOMBRE');
        $password = filter_input(INPUT_POST, 'PASSWORD');

        $sqlt = INSERT INTO usiarios (nombre,password) VALUES ($nombre,$password);
        $stmt = conection::conectar()->prepare($sqlt);
        $stmt -> execute();
    }

}

$a = new Insert();
$a-> nuevoDato();