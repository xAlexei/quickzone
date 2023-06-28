<?php 

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);

if($_GET['id']){
    $id = $_GET['id'];
}

 $businessName = $_POST['name'];
 $email = $_POST['email'];
 $businessLogo = $_POST['logo'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $whatsApp = $_POST['whats'];
 $line = $_POST['line'];
 $googleLink = $_POST['googleLink'];

    $query = "UPDATE business set 
    businessName = '$businessName', 
    email = '$email',
    businessLogo = '$businessLogo',
    businessAddress = '$address',
    phone = '$phone',
    whatsApp = '$whatsApp',
    typeOf = '$line',
    googleLink = '$googleLink' WHERE _id=$id";
  
if($conn->query($query) == TRUE){
    echo "<script>
    alert('Actualizado correctamente')
    window.location.replace('_editBusiness.php');
    </script>";
}else{
    echo "Error: ". mysqli_error($conn);
}

mysqli_close($conn);  

?>