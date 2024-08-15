<?php
session_start();
include "conexion.php";
$nombre = $_POST['nombre'];
$pass = $_POST['pass'];


$cla = md5($pass);

$sql = "SELECT * FROM prue WHERE nombre ='$nombre' AND pass = '$cla'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['nombre'] ===$nombre && $row['pass'] === $cla){
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        header("Location: principal.php");
    }else{
        header("Location: index.php");
    }
}
?>