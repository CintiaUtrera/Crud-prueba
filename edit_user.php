<?php

include('connection.php');
$con = connection();


$id= $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "UPDATE  users SEt name ='$name', lastname='$lastname', username='$username', password='$password', email='$email' WHERE id='$id' " ;
$result = mysqli_query($con, $sql);

if($result){
    Header("Location: index.php");
};


?>