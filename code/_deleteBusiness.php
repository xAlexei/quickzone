<?php 

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM business WHERE _id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
    die("Query Failed.");
  }
  echo "<script>
    alert('Eliminado')
    window.location.replace('_adminPage.php');
    </script>";
}

mysqli_close($conn);

?>