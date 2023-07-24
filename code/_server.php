<?php

$servername = "localhost";
$database = "quickzone";
$user = "quickzone";
$pass = "i/8KTxkpHiCotaLT";

$conn = mysqli_connect($servername, $user, $pass, $database);

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}



?>