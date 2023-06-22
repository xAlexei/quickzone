<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

 $businessName = $_POST['name'];
 $email = $_POST['email'];
 $businessLogo = $_POST['logo'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $whatsApp = $_POST['whats'];
 $line = $_POST['line'];
 $googleLink = $_POST['googleLink'];

 
$query = "INSERT INTO business (businessName, email, businesslogo, businessAddress, phone, whatsApp, typeOf, googleLink) 
VALUES ('$businessName', '$email', '$businessLogo', '$address', '$phone', '$whatsApp', '$line', '$googleLink')";

if($conn->query($query)==TRUE){
    echo "<script>
    alert('Insertado correctamente')
    window.location.replace('_registerForm.html');
    </script>";
}else{
    echo "Error: ";
}

mysqli_close($conn);

?>
