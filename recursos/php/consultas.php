<?php

require "conexion.php";




function busqueda($codigo_busqueda){

$obtenerTipo = explode("-",$codigo_busqueda);
$cod = $obtenerTipo[0];
$tipo_tela = $obtenerTipo[1];

if($tipo_tela === "D"){
    $tipo = "Distribuidor";
    
}else{
    $tipo = "Confeccion";
}

$conexion = conexion();
$consulta = "SELECT * FROM `descripcion_telas` WHERE codigo_tela = ? AND tipo_tela = ?";
$busqueda = $conexion->prepare($consulta);

$busqueda ->bind_param("ss",$cod,$tipo);
$busqueda ->execute();

$res = $busqueda->get_result();


$datos=[];

while($row = $res->fetch_assoc()){
    $datos[]=$row;
}

return $datos;
}




?>