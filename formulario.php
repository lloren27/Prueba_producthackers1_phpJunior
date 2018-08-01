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
session_start();
?>
    <form action="guardar.php" method="POST">
    <h1>Formulario para conseguir una invitación de suscripción</h1>
    <input type="email" REQUIRED name="email" placeholder="email@prueba.com" value="" style="background-color:white;border-radius:10px;color:#268BE6;font-size:15px;"/>
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <br>
    <br>
    <input type="submit" value="Enviar" style="background-color:white;border-radius:20px;text-align:center;color:#268BE6;font-size:15px;"/>
    </form>
</body>
</html>