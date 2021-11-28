<?php
require_once "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/busqueda.css">
    <title></title>
</head>
<body> 
    <form class="nav-busqueda-input" action="index.html" method="GET" role="search">
        <input type="text" name="busqueda"><br>
        <input type="submit" name="enviar" value="buscar">
    </form>

    <br><br><br>

    <?php

    if(isset($_POST['enviar'])){
        $busqueda = $_POST['busqueda'];

        $consulta = $con->query("SELECT * FROM trello WHERE desc_tipo_producto LIKE '%$busqueda%");

        while($row=$consulta->fetch-array()){
            echo $row['desc_tipo_producto'].'<br>';
        }
    }
</body>
</html>