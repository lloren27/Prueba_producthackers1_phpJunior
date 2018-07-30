<?php
include("conexion.php");

$author=$_POST['author_id'];

$query="INSERT INTO wp_followings(author_id) VALUES('$author')";
$resultado= $conexion->query($query);

if($resultado){
    echo " Su suscripcion se ha completado";
}else{
    echo " No se se pudo completar su suscripcion";
}

?>