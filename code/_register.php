<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

 $businessName = $_POST['name'];
 $email = $_POST['email'];
 $businesSLogo = $_POST['logo'];
 $address = $_POST['address'];
 $phone = $_POST['direccion'];
 $whatsApp = $_POST['telefono'];
 $line = $_POST['whats'];
 $googleLink = $_POST['googleLink'];

 
$query = "INSERT INTO NEGOCIOS (businessName, email, businesslogo, address, phone, whatsApp, line, googleLink) 
VALUES ('$name', '$email', '$logo', '$direccion', '$telefono', '$whats')";

if($conn->query($query)==TRUE){
    echo "<script>
    alert('Insertado correctamente')
    window.location.replace('registerForm.html');
    </script>";
}else{
    echo "Error: ";
}

mysqli_close($conn);

?>