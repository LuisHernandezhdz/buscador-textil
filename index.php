<?php
require "./recursos/php/consultas.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
</head>
<body>  
    <form method="GET" >
        <input type="text" placeholder="Ingresa el codigo" name="codigo">
        <button type="submit"></button>
    </form>
        
    <?php

    $nombre = $_GET['codigo']; 

    if($nombre === null){
        echo "Bienvenido ingresa tu codigo";
    }else{

        $respuesta = busqueda($nombre);

      foreach($respuesta as $row){
    echo $row["descripcion"];
}
        
    }

    ?>
</body> 
</html>