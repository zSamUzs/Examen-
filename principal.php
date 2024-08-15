<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        session_start();
        if (!isset($_SESSION['nombre']) || !isset($_SESSION['id'])) {
            header('location: index.php');
        }
        echo "Has iniciado sesion correctamente usuario ". $_SESSION['nombre']. " con numero de ID ". $_SESSION['id'];

        ?>
<br><br>
        <button type="button"><a href="cerrar.php">Cerrar sesion</a></button>
    </h1>
</body>
</html>