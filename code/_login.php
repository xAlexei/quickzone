<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

$customerID = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT businessID, pass FROM users WHERE businessID='$customerID' AND pass='$password'";

if($conn->query($query)==TRUE){
   header('Location: _adminPage.php');
}
else{
   echo "<script>alert('Usuario o contraseña incorrectos')";
   header("Locaition: _businessLogin.html");
}


?>