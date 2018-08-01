<?php
$follower_id = $_REQUEST ['follower_id'];
include("conexion.php");
$query="UPDATE `wp_followings` SET `enable`='0' WHERE follower_id = '$follower_id'";
$resultado= $conexion->query($query);
                
    if($resultado){
    
    header('Location: mostrarSucripcion.php');
    }else{
     echo "No se ha podido realizar la modificación";
    }
?>

