<?php

include "_server.php";

$conn = mysqli_connect($servername, $user, $pass, $database);

$businessName = '';
$email = '';
$businessLogo = '';
$address = '';
$phone = '';
$whatsApp = '';
$line = '';
$googleLink = '';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM business WHERE _id=$id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
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
    mysqli_query($conn, $query);
    
    echo "<script>alert('Actualizado')</script>";
  }

  $query2 = "SELECT * FROM business b INNER JOIN products p ON p.businessNameID = b._id WHERE b._id = $id";
  $res2 = mysqli_query($conn, $query2) or die( mysqli_error($conn));

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Editar Negocio</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <div class="header header-fixed header-logo-center header-auto-show">
        <a href="index.html" class="header-title">Inputs</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
    </div>

    <div id="footer-bar" class="footer-bar-6">
        <a href="index-components.html" class="active-nav"><i class="fa fa-layer-group"></i><span>Features</span></a>
        <a href="index-pages.html"><i class="fa fa-file"></i><span>Pages</span></a>
        <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
        <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
        <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
    </div>
    
    <div class="page-title page-title-fixed">
        <h1>Quickzone®</h1>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i class="fa fa-share-alt"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i class="fa fa-moon"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
        <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i class="fa fa-bars"></i></a>
    </div>

    <!--   Banner   --> 
    <div class="page-title-clear">

    </div>
        <div class="card card-style">
            <div class="content mb-0">      
                <!-- Formulario -->
                <form action='_editBusiness.php?id=<?php echo $_GET['id'];?>' method="post">
                <!-- Nombre del negocio -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="name" id="name"  value="<?php echo $businessName; ?>" placeholder="Nombre del negocio ">
                    <label for="form1" class="color-highlight">Nombre del Negocio</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Email  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="email" class="form-control validate-text" name="email" id="email"  value="<?php echo $email; ?>" placeholder="Correo Electronico">
                    <label for="form2" class="color-highlight">Correo Electronico</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Link de imagen  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="logo"  value="<?php echo $businessLogo; ?>"  id="logo" placeholder="Link de imagen">
                    <label for="form2" class="color-highlight">Business Logo</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!--  Direccion -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="address"  value="<?php echo $address; ?>" id="address" placeholder="Direccion">
                    <label for="form3" class="color-highlight">Direccion</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Telefono y Whatsapp  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                   <div class="input-group">
                       <input type="tel" class="form-control validate-text" name="phone"  value="<?php echo $phone; ?>" id="phone" placeholder="Telefono">
                       <input type="tel" class="form-control validate-text" name="whats"  value="<?php echo $whatsApp; ?>" id="whats" placeholder="WhatsApp">
                       <em>(required)</em>
                   </div>
                </div>
                <div class="col-12">
                    <div class="input-style input-style-always-active has-borders no-icon mb-4">
                        <label for="form51" class="color-highlight"></label>
                        <select id="line" name="line">
                            <option value="<?php echo $line; ?>"> Elige una opcion</option>
                            <option  value="Carpinteria" >Carpinteria</option>
                            <option  value="Lavanderia">Lavanderia</option>
                            <option  value="Taxi">Servicios de taxi</option>
                            <option  value="Restaurantes">Restaurantes</option>
                            <option  value="Farmacias">Farmacias</option>
                            <option  value="Tiendas">Tiendas de conveniencia</option>
                            <option  value="Inmobiliarias">Inmobiliarias</option>            
                        </select>
                        <span><i class="fa fa-chevron-down"></i></span>
                    </div>
                </div>
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="googleLink" <?php echo $line; ?> id="googleLink" placeholder="Ubicacion de google">
                    <label for="form3" class="color-highlight">Google Link</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <button style="width: 100%;" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-orange-light" name="update">
          Update
</button>
                </form>
            </div>
        </div>
        
    </div>
    <!-- Page content ends here-->
    
    <!-- Main Menu--> 
    <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="menu-main.html" data-menu-width="280" data-menu-active="nav-components"></div>
    
    <!-- Share Menu-->
    <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="menu-share.html" data-menu-height="370"></div>  
    
    <!-- Colors Menu-->
    <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html" data-menu-height="480"></div> 
     
</div>
<div class="page-content">
        <!-- Servicios de Taxi -->
       
        <div class="card card-style">
            <div class="content">
                <a href="_addProduct.php?id=<?php echo $_GET['id']; ?>" name="id">
                <h1 class="font-24 font-800 mb-0">Añadir mas Productos
                <i class="fa-sharp fa-solid fa-plus" style="padding-left: auto;color: #e7820d;"></i>
                </h1></a>
                <p>
                    Administre de manera rapida los negocios registrados
                </p>
    <?php $i=0; while($row2 = mysqli_fetch_array($res2)){ $i++; ?>
                <div class='d-flex mb-4'>
         <div class='align-self-center'>
            <img src="<?php echo $row2['linkImage'] ?>" class='rounded-m me-3' width='80'>
        </div>
        <div class='align-self-center'>
            <h2 class='font-15 line-height-s mt-1 mb-n1'><?php echo $row2['productName'];?></h2>
            <p class='mb-0 font-11 mt-2 line-height-s'><?php echo $row2['descript']?></p>
            <p class='mb-0 font-11 mt-2 line-height-s'><?php echo $row2['price']?></p>
        </div>
        <div class='ms-auto ps-3 align-self-center text-center'>
            <a href=""><i style='font-size: 35px;' class='uil uil-edit'></i></a>
        </div>
    </div>
    <?php }?>
    </div>
</div>

    </div>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
