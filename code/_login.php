<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

$customerID = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT customerID, password FROM businessaccess WHERE customerID='$customerID' AND password='$password'";

if($conn->query($query)==TRUE){
   header('Location: _adminPage.php');
}


?>