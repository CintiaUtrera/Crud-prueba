<?php 

include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";

$result = mysqli_query($con, $sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios CRUD</title>
    <link  href="./css/styles.css" rel="stylesheet" >
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo" >Crear Usuarios</h1>
        <div class="for">
        <form action='insert_user.php' method="POST" class="">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastname" placeholder="Apellido" required>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">

            <span><input class="btn" type="submit" value="Agregar usuario"></span>
        
        </form>
        </div>

    <div>
        <h2 class="titulo" >Usuarios Registrados</h2>
        <div  class="tabla" >
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($result)): ?> 
                <tr>
                <th> <?=$row ['id']?> </th>
                <th><?=$row ['name']?> </th>
                <th><?=$row ['lastname']?> </th>
                <th><?=$row ['username']?> </th>
                <th><?=$row ['password']?> </th>
                <th><?=$row ['email']?> </th>

                <th><a href="update.php?id= <?=$row ['id']?>" class="edit">Editar</a></th>
                <th><a href="delet_user.php?id= <?=$row ['id']?>" class="delet">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
                
        </table>
        </div>
    </div>
    </div>
</body>
</html>