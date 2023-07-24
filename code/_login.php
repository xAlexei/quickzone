<?php
session_start();

require_once "_server.php";
$conn;

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
$res = mysqli_query($conn, $query);
$row = mysqli_fetch_array($res);
$typeuser = $row['typeOfUser'];
$iduser = $row['businessID'];

if($typeuser == 'STAFF'){
   $_SESSION['businessID'] = $iduser;
   $_SESSION['username'] = $username;
   header("Location: _landingPage.php");
}else{
   echo "No jala";
}

$conn->close();

?>