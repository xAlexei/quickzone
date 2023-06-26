<?php

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);

$businessNameID = $_POST['nameID'];
$productName = $_POST['productName'];
$price = $_POST['price'];
$descript = $_POST['descript'];
$linkImage = $_POST['linkImage'];

$query = "INSERT INTO products (businessNameID, productName, price, descript, linkImage) 
VALUES ($businessNameID, '$productName', '$price', '$descript', '$linkImage')";


if($conn->query($query)==TRUE){
    echo "<script>alert('Producto añadido');
    window.location.replace('_adminPage.php');
    </script>";
}else{
   die('Query Failed');
}

mysqli_close($conn);


?>