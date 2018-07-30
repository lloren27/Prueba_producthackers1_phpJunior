<?php 

$conexion = new mysqli('localhost','carlos','1234','producthackers');

if ($conexion){
    echo " Conexion exitosa";
}else{
    echo " Conexion no exitosa";
}

?>