<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formaulario de invitacion</title>
</head>
<body style=" background-color: #268BE6; color: white; ">
<?php
include("conexion.php");
session_start();

$token = $_POST['token'];
$email=$_POST['email'];

$consulta="SELECT * FROM wp_unknown_followers WHERE email = '$email'";
$resultado=mysqli_query($conexion,$consulta);

if (mysqli_num_rows($resultado)>0){

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
<h1 style="text-align:center;"> Este correo ya esta registrado </h1>
<br>
<div style="background-color:white;border-radius:30px;text-align:center;padding-top:10px;padding-bottom:10px;margin-left: 100px;margin-right: 100px;">
<a href="index.php" style="color: #268BE6;font-size:25px;text-decoration: none;">Volver al index</a>
</div>
</body>
</html>



