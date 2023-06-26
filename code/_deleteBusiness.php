<?php 

include "_server.php";
$conn = ($servername, $user, $pass, $database);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM business WHERE _id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
    die("Query Failed.");
  }

  echo "<sript>alert('Eliminado')</script>";
  header('Location: _adminPage.php');
}

?>