<?php
include("conexion.php");
session_start();

$token = $_POST['token'];
$email=$_POST['email'];

$consulta="SELECT * FROM wp_unknown_followers WHERE email = '$email'";
$resultado=mysqli_query($conexion,$consulta);

if (mysqli_num_rows($resultado)>0){
    
    echo " Este correo ya esta registrado";
    
} else {
    $query="INSERT INTO wp_unknown_followers(email,token) VALUES('$email','$token')";
    $resultado= $conexion->query($query);

    if($_SESSION['token'] == $token){

    header('Location: selectAutor.php');
    }else{
    echo "Has intentado acceder sin cumplir con el token";
    } 
}

?>
<br>
<a href="index.php">Ir al index</a>



