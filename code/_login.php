<?php

require_once "_server.php";
$conn;

$customerID = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$customerID' AND pass='$password'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($res);
$typeuser = $row['typeOfUser'];

if($typeuser == 'STAFF'){
   session_start();
   $_SESSION['username'];
   header("Location: _landingPage.php");
}else{
   echo "No jala";
}

?>