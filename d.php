<?php
include "conexion.php";
$pass = md5("HolaMundo");
$sql = $conn->query("INSERT INTO prue(nombre,pass) VALUES
 ('Pedro', '$pass')");

header('Location: index.php');

?>