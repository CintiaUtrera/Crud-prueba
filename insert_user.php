<?php 

include('connection.php');
$con = connection();

$id= null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO users VALUES('$id', '$name', '$lastname', '$username', '$password', '$email')";
$result = mysqli_query($con, $sql);

if($result){
    Header("Location: index.php");
};
?>