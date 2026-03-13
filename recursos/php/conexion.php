<?php

$host = "192.168.102.17";
$user = "trabajo";
$pass = "1234";
$bd = "bd_telas"; 

 $conn = new mysqli($host, $user, $pass, $bd); 

    if($conn->connect_error){
        echo "no se pudo realizar la conexion";
    }


 function conexion(){
    
$host = "192.168.102.17";
$user = "trabajo";
$pass = "1234";
$bd = "bd_telas"; 

 $conn = new mysqli($host, $user, $pass, $bd); 

 return $conn;
 }    


?>