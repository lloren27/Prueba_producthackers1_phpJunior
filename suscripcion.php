<?php
include("conexion.php");
session_start();

$token=$_SESSION['token'];
$author=$_POST['author_id'];


$query="SELECT id FROM wp_unknown_followers WHERE token = '$token'"; 
$resultado=mysqli_query($conexion,$query);

if(mysqli_num_rows($resultado)>0){
    $arrayUsuarios = $resultado->fetch_assoc();
    $follower_id = $arrayUsuarios ['id'];
}
else{
    echo "NO HAY RESULTADOS";
}
$query2="INSERT INTO wp_followings(follower_id,author_id) VALUES('$follower_id','$author')"; 
$resultado2= $conexion->query($query2);

if($resultado2){
    echo " Su suscripcion se ha completado";
    header('Location: mostrarSucripcion.php');
}else{
    echo " No se se pudo completar su suscripcion";
}
?>
