<?php
include("conexion.php");

$email=$_POST['email'];
$random_token = bin2hex(random_bytes(12));





$query="INSERT INTO wp_unknown_followers(email,token) VALUES('$email','$random_token')";
$resultado= $conexion->query($query);

if($resultado){
    echo "Se guardo el correo de forma correcta";
    echo ($random_token);
}else{
    echo "No se pudo guardar";
    echo ($random_token);
}

/// redirecciona esta pagina 
header('Location: formulario.php');

?>