<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

 $name = $_POST['name'];
 $email = $_POST['email'];
 $logo = $_POST['logo'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 $whats = $_POST['whats'];

 
$query = "INSERT INTO NEGOCIOS (negocio, email, logo, direccion, telefono, whats) 
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