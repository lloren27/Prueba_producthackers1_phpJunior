<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mis autores suscritos</title>
</head>
<body style=" background-color: #268BE6; color: white; ">
    <center>
        <table border="3">
            <thead>
                <tr>
                    <th colspan="3" style="color:blue;background-color:white;">Mis suscripciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> Follower_id </td>
                    <td> Author_id </td>
                    <td> Deshabilitar Suscripción</td>
                </tr>

                <?php
                include("conexion.php");
                session_start();
                $token = $_SESSION['token'];
                $query="SELECT id FROM wp_unknown_followers WHERE token = '$token'"; 
                $resultado=mysqli_query($conexion,$query);
                if(mysqli_num_rows($resultado)>0){
                    $arrayUsuarios = $resultado->fetch_assoc();
                    $follower_id = $arrayUsuarios ['id'];
                }else{
                    echo "NO HAY RESULTADOS";   
                }
                $query = "SELECT * from wp_followings WHERE (follower_id = '$follower_id') AND (enable = '1')" ;
                $resultado = $conexion->query($query);
                while($row=$resultado->fetch_assoc()){ 
                ?>
                    <tr style="text-align:center;">
                        <td><?php echo $row['follower_id']; ?></td>
                        <td><?php echo $row['author_id']; ?></td>
                        <td style="background-color:white;text-decoration: none;"><a href="localizarModificar.php?follower_id=<?php echo $row['follower_id'];?>">Eliminar</a></td>
                    </tr>   
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <table border = "1">
        <thead>
                <tr>
                    <th style="color:blue;background-color:white;" colspan="2">Autores</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> Nombre del autor </td>
                    <td> Author_id </td>
                </tr>
                <tr>
                    <td> Marta Robles </td>
                    <td> 1 </td>
                </tr>
                <tr>
                    <td> Eduardo Inda </td>
                    <td> 2 </td>
                </tr>
                <tr>
                    <td> Patricia Navarro </td>
                    <td> 3 </td>
                </tr>
                <tr>
                    <td> Francisco Marguenda </td>
                    <td> 4 </td>
                </tr>
                <tr>
                    <td> Agatha Ruiz de la Prada </td>
                    <td> 5 </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div style="background-color:white;border-radius:30px;text-align:center;padding-top:10px;padding-bottom:10px;margin-left: 100px;margin-right: 100px;">
        <a href="index.php" style="color: #268BE6;font-size:25px;text-decoration: none;">Ir al index</a>
        </div>
    </center>
</body>
</html>