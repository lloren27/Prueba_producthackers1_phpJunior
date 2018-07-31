<?php
include("conexion.php");
session_start();

$token=$_SESSION['token'];
$author=$_POST['author_id'];


$query="SELECT id FROM wp_unknown_followers WHERE token = '$token'"; //// QUIERO COGER EL RESULTADO DE LA CONSULTA 
///////////////////////////////////////////////////PRUEBA/////////////////////////////////////////////////////////
$resultado=mysqli_query($conexion,$query);
/* Si Hay Resultados*/
if(mysqli_num_rows($resultado)>0){
    $arrayUsuarios = $resultado->fetch_assoc();
    $follower_id = $arrayUsuarios ['id'];
}
else{
    echo "NO HAY RESULTADOS";
}
///////////////////////////////PRUEBA////////////////////////////////////////////////////////////////////////////////
$query2="INSERT INTO wp_followings(follower_id,author_id) VALUES('$follower_id','$author')"; /// Y METERLA AQUI PARA GUARDA LA NUEVA SUSCRIPCION 
$resultado2= $conexion->query($query2);

if($resultado2){
    echo " Su suscripcion se ha completado";
    echo $query2;
 
}else{
    echo " No se se pudo completar su suscripcion";
    echo $query2;
    
}


?>
