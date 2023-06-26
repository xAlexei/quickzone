<?php 

include "_server.php";
$conn = mysqli_connect($servername, $user, $pass, $database);
$id = $_GET['id'];

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM business";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
  }
}

mysqli_close($conn);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Añadir producto</title>
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
                <form action="_add.php" method="post">
                <!-- Nombre del Producto -->
                <input type="hidden" value="<?php echo $_GET['id'];?>" name="nameID">
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="productName" id="productName" placeholder= "Nombre del producto">
                    <label for="form1" class="color-highlight">Nombre del Producto</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Email  -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="price" id="price" placeholder="Precio del producto Ejemplo: '$12.99'">
                    <label for="form2" class="color-highlight">Precio del producto Ejemplo: "$12.99"</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <!-- Link de imagen  -->
                <textarea id="descript" style="width: 100%;" name="descript" placeholder="Descripcion del producto"></textarea>
                    <em class="mt-n6">(required)</em>
                <!--  Direccion -->
                <div class="input-style has-borders no-icon validate-field mb-4">
                    <input type="text" class="form-control validate-text" name="linkImage" id="linkImage" placeholder="Link de imagen">
                    <label for="form3" class="color-highlight">Link de la imagen</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <input style="width: 100%;" type="submit" placeholder="Guardar" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-orange-light">
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

<div class="card card-style">
    <div class="content">
        <h1 class="font-24 font-800 mb-0">Carga tu producto</h1>
         <div class="d-flex mb-4">
            <div class="align-self-center">
                <img src="images/food/small/1s.jpg" class="rounded-m me-3" width="80">
            </div>
            <div class="align-self-center">
                <h2 class="font-15 line-height-s mt-1 mb-n1">Cheesy Hamburger <br> with Bacon and Ham</h2>
                <p class="mb-0 font-11 mt-2 line-height-s">
                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 20 Minutes
                </p>
            </div>
            <div class="ms-auto ps-3 align-self-center text-center">
                <h2 class="font-18 mb-n2">$14.75</h2>
                <span class="color-highlight font-9">per serving</span>
            </div>
        </div>
        <div class="d-flex mb-4">
            <div class="align-self-center">
                <img src="images/food/small/8s.jpg" class="rounded-m me-3" width="80">
            </div>
            <div class="align-self-center">
                <h2 class="font-15 line-height-s mt-1 mb-n1">Chicken Crispy <br> Strips with Fries</h2>
                <p class="mb-0 font-11 mt-2 line-height-s">
                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 25 Minutes
                </p>
            </div>
            <div class="ms-auto ps-3 align-self-center text-center">
                <h2 class="font-18 mb-n2">$23.44</h2>
                <span class="color-highlight font-9">per serving</span>
            </div>
        </div>
        <div class="d-flex mb-4">
            <div class="align-self-center">
                <img src="images/food/small/8s.jpg" class="rounded-m me-3" width="80">
            </div>
            <div class="align-self-center">
                <h2 class="font-15 line-height-s mt-1 mb-n1">Chicken Crispy <br> Strips with Fries</h2>
                <p class="mb-0 font-11 mt-2 line-height-s">
                    <i class="fa fa-truck color-brown-dark pe-2"></i>Ready in 25 Minutes
                </p>
            </div>
            <div class="ms-auto ps-3 align-self-center text-center">
                <h2 class="font-18 mb-n2">$23.44</h2>
                <span class="color-highlight font-9">per serving</span>
            </div>
        </div>
    </div>
    <div data-menu-load="menu-footer.html"></div>
</div>

<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
