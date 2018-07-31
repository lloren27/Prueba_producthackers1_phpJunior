<?php
include("conexion.php");
session_start();

$token = $_POST['token'];
$email=$_POST['email'];

$query="INSERT INTO wp_unknown_followers(email,token) VALUES('$email','$token')";
$resultado= $conexion->query($query);

if($_SESSION['token'] == $token){
    $email = $_POST['email'];
    echo "Hola " . $email;
    header('Location: selectAutor.php');
}else{
    echo "Has intentado acceder sin cumplir con el token";
}

?>



