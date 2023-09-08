<?php
require_once "conection.php";

$sqlt = "SELECT ' ' as control, nombre, password FROM usuario WHERE estado = '1';";
$stmt = conection::conectar()->prepare($sqlt);
$stmt->execute();
if($stmt->rowCount() > 0 ){
    $registros = $stmt->fetchAll();
}
echo json_encode($registros);
