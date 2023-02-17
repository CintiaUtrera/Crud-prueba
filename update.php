<?php 

include("connection.php");

$con = connection();

$id=$_GET["id"];

$sql= "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="./css/styles.css" rel="stylesheet" >
    <title>Editar usuarios</title>
</head>
<body>
    <div>
    <form action='edit_user.php' method="POST" class="">
        <h1>Editar usuario</h1>
            <input type="hidden" name="id" value=" <?=$row ['id']?>">
            <input type="text" name="name" placeholder="Nombre" required value=" <?=$row ['name']?>">
            <input type="text" name="lastname" placeholder="Apellido" required value=" <?=$row ['lastname']?>">
            <input type="text" name="username" placeholder="Username" value=" <?=$row ['username']?>">
            <input type="password" name="password" placeholder="Password" value=" <?=$row ['password']?>">
            <input type="email" name="email" placeholder="Email" value=" <?=$row ['email']?>">

            <span><input class="btn" type="submit" value="Actualizar información"></span>
        
        </form>
    </div>
</body>
</html>